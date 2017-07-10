<?php
    putenv('TWITTER_oauth_access_token=1488767785-PCGaTvlv3iGhmmZgX0WiVyVzFzuoFB16IMvCKZV');
    putenv('TWITTER_oauth_access_token_secret=Zr0Km97t92LtSbIkF3i2dYtQQN1zEvaizWV0ITEcFy3DR');
    putenv('TWITTER_consumer_key=irOO79hIVDLZnm0F40qs0zsvt');
    putenv('TWITTER_consumer_secret=eZLetLQoBJ6A4eXp96PppgzXZidTcX8WycD3yUWtsWBHF7mDXq');
    // https://stackoverflow.com/questions/12916539/simplest-php-example-for-retrieving-user-timeline-with-twitter-api-version-1-1
    function buildBaseString($baseURI, $method, $params) {
        $r = array();
        ksort($params);
        foreach($params as $key=>$value){
            $r[] = "$key=" . rawurlencode($value);
        }
        return $method."&" . rawurlencode($baseURI) . '&' . rawurlencode(implode('&', $r));
    }

    function buildAuthorizationHeader($oauth) {
        $r = 'Authorization: OAuth ';
        $values = array();
        foreach($oauth as $key=>$value)
            $values[] = "$key=\"" . rawurlencode($value) . "\"";
        $r .= implode(', ', $values);
        return $r;
    }

    $url = "https://api.twitter.com/1.1/statuses/user_timeline.json";

    $oauth_access_token = getenv('TWITTER_oauth_access_token');
    $oauth_access_token_secret = getenv('TWITTER_oauth_access_token_secret');
    $consumer_key = getenv('TWITTER_consumer_key');
    $consumer_secret = getenv('TWITTER_consumer_secret');

    $oauth = array( 'count' => 3,
                    'oauth_consumer_key' => $consumer_key,
                    'oauth_nonce' => time(),
                    'oauth_signature_method' => 'HMAC-SHA1',
                    'oauth_token' => $oauth_access_token,
                    'oauth_timestamp' => time(),
                    'oauth_version' => '1.0');

    $base_info = buildBaseString($url, 'GET', $oauth);
    $composite_key = rawurlencode($consumer_secret) . '&' . rawurlencode($oauth_access_token_secret);
    $oauth_signature = base64_encode(hash_hmac('sha1', $base_info, $composite_key, true));
    $oauth['oauth_signature'] = $oauth_signature;

    // Make requests
    $header = array(buildAuthorizationHeader($oauth), 'Expect:');
    $options = array( CURLOPT_HTTPHEADER => $header,
                      //CURLOPT_POSTFIELDS => $postfields,
                      CURLOPT_HEADER => false,
                      CURLOPT_URL => $url . '?count=3',
                      CURLOPT_RETURNTRANSFER => true,
                      CURLOPT_SSL_VERIFYPEER => false);

    $feed = curl_init();
    curl_setopt_array($feed, $options);
    $json = curl_exec($feed);
    curl_close($feed);

    $twitter_data = json_decode($json);
    echo $json;

//print it out
// print_r ($twitter_data);

?>

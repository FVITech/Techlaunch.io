<?php
    require_once('../eventbrite-sdk-php/HttpClient.php');
    $client = new HttpClient('M43W3J65BLAWDNGL2KJY&order_by=start_asc');
    $response = $client->get('/users/me/owned_events');

    $venues = array();

    foreach($response['events'] as $i => $event) {
        $location = $client->get('/venues/' . $event['venue_id']);

        $response['events'][$i]['location'] = $location['address']['localized_address_display'];
    }

    $response['venues'] = $venues;

    echo json_encode($response);
?>
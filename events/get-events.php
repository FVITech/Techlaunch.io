<?php
    set_include_path(':.');
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    require(__DIR__ . '/eventbrite-sdk-php/HttpClient.php');
    $client = new HttpClient('M43W3J65BLAWDNGL2KJY&order_by=start_asc');
    $response = $client->get('/users/me/owned_events');

    echo json_encode($response);
?>

<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    $venue_id = $_GET['venue_id'];

    require_once('eventbrite-sdk-php/HttpClient.php');
    $client = new HttpClient('M43W3J65BLAWDNGL2KJY&order_by=start_asc');
    $response = $client->get("/venues/$venue_id");

    echo json_encode($response);
?>
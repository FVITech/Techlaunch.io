<?php
$data_uri = $_POST['data_uri_png'];
$encoded_image = explode(",", $data_uri)[1];
$decoded_image = base64_decode($encoded_image);
file_put_contents("test.png", $decoded_image);
return true;
?>

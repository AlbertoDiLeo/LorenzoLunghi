<?php
header('Content-Type: application/json');
require_once("config.php"); // Percorso relativo

$placeId = PLACE_ID;
$apiKey = API_KEY;
$url = "https://maps.googleapis.com/maps/api/place/details/json?place_id=$placeId&fields=reviews&key=$apiKey";

$response = file_get_contents($url);
echo $response;
?>

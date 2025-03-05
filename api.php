<?php
header('Content-Type: application/json');
require_once("config.php");

$placeId = PLACE_ID;
$apiKey = API_KEY;

$url = "https://maps.googleapis.com/maps/api/place/details/json?place_id=$placeId&fields=name,rating,reviews&key=$apiKey";

// Usa cURL per ottenere i dati
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$response = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

if ($httpCode !== 200) {
    echo json_encode(["error" => "Errore HTTP: $httpCode", "api_response" => $response]);
    exit;
}

echo $response;
?>

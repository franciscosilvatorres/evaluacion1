<?php
$endpoint = $_GET['endpoint'];
$apiUrl = 'https://ciisa.coningenio.cl/v1/';
$apiKey = 'ciisa';

$options = [
    "http" => [
        "header" => "Authorization: Bearer $apiKey"
    ]
];
$context = stream_context_create($options);

if ($endpoint === 'servicios') {
    $response = file_get_contents($apiUrl . 'services/', false, $context);
} elseif ($endpoint === 'nosotros') {
    $response = file_get_contents($apiUrl . 'about-us/', false, $context);
} else {
    $response = json_encode(["error" => "Endpoint no válido"]);
}

echo $response;
?>

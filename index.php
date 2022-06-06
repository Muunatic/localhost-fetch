<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Credentials: true");
header("Access-Control-Max-Age: 86400");
header("Access-Control-Allow-Headers: X-Requested-With, Content-Type, Origin, Cache-Control, Pragma, Authorization, Accept, Accept-Encoding");
header("Access-Control-Allow-Methods: PUT, POST, GET, OPTIONS, DELETE");
header("Content-Type: application/json");

$jsonoption = [
    "http" => [
        "method" => "GET",
        "header" => "Authorization: auth"
    ]
];

$url = '<url>'

$json_context = stream_context_create($jsonoption);

$json_get = file_get_contents($url, false, $json_context);

$json_decode = json_decode($json_get, true);

header('Content-type: application/json');
echo json_encode($json_decode);
?>
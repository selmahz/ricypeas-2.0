<?php

$method = $_SERVER["REQUEST_METHOD"];
$json = file_get_contents("recipe_db.json");
$recipes = json_decode($json, true);

function sendJSON($data, $responseCode = 200){
    header("Content-Type: application/json");
    http_response_code($responseCode);
    $json = json_encode($data);
    echo $json;
    exit();
}

if(method != "GET") {
    $error = "Error" => "Invalid request method";
    sendJSON($error, 400);
}

if(isset($_GET["recipes"])) {
    sendJSON($recipes);
}

$error = "Error" => "Bad request";
sendJSON($error, 400);

?>
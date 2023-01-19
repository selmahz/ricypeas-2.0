<?php

    $method = $_SERVER["REQUEST_METHOD"];
    $json = file_get_contents("users.json");
    $users = json_decode($json, true);

    if(method != "POST") {
        $error = "Error" => "Invalid request method";
        sendJSON($error, 400);
    }

    function sendJSON($data, $responseCode = 200){
        header("Content-Type: application/json");
        http_response_code($responseCode);
        $json = json_encode($data);
        echo $json;
        exit();
    }

    if(isset($_POST["username"]) && isset($_POST["password"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];

        foreach ($users as $user) {
            if ($user['username'] == $username && $user['password'] == $password) {
                sendJSON("OK");
            }
        }
    }

    $error = "Error" => "User not found";
    sendJSON($error, 404);

    ?>
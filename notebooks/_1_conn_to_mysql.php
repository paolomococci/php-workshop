<?php

declare (strict_types = 1);

$server_name = $_ENV["DB_HOST"];
$db_name = $_ENV["DB_DATABASE"];
$user_name = $_ENV["DB_USERNAME"];
$password = $_ENV["DB_PASSWORD"];

try {
    $conn = new PDO(
        "mysql:host=$server_name;dbname=$db_name", 
        $user_name, 
        $password
    );
    $conn->setAttribute(
        PDO::ATTR_ERRMODE, 
        PDO::ERRMODE_EXCEPTION
    );
    echo "connection to database $db_name was successful";
} catch (PDOException $e) {
    echo "connection to database $db_name failed with the following message: " . $e->getMessage();
}

$conn = null;

<?php

declare (strict_types = 1);

$server_name = "127.0.0.1";
$db_name = "sample";
$user_name = "username";
$password = "password";

try {
    $conn = new PDO(
        "mysql:host=$server_name;dbname=$db_name", 
        $user_name, 
        $password
    );
} catch (PDOException $e) {
    echo "connection to database $db_name failed with the following message: " . $e->getMessage();
}

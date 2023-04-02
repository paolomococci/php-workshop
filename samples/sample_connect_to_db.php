<?php

declare (strict_types = 1);

$server_name = "127.0.0.1";
$user_name = "username";
$password = "password";

try {
    // TODO
} catch (PDOException $e) {
    echo "database connection failed: " . $e->getMessage();
}

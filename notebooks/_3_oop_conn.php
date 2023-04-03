<?php

declare (strict_types = 1);

$db_host = '127.0.0.1';
$db_database = 'notebook_hh_db_rc0';
$db_username = '';
$db_password = '';

$conn = new mysqli(
    $db_host,
    $db_username,
    $db_password,
    $db_database
);

if ($conn === false) {
    die("connection error: " . $conn->connect_error);
}

echo "connection successful: " . $conn->host_info;

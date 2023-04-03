<?php

declare (strict_types = 1);

$db_host = '127.0.0.1';
$db_port = '3306';
$db_charset = 'utf8';
$db_database = 'notebook_hh_db_rc0';
$db_username = '';
$db_password = '';

$create_table_customers = <<< 'EOD'
DROP TABLE IF EXISTS `customers`;
EOD;

try {

    $conn = new PDO(
        "mysql:host=$db_host;port=$db_port;charset=$db_charset;dbname=$db_database",
        $db_username,
        $db_password
    );

    $conn->setAttribute(
        PDO::ATTR_ERRMODE,
        PDO::ERRMODE_EXCEPTION
    );
    echo "connection to database $db_database was successful\n";

    $conn->query($create_table_customers);

    foreach ($conn->query("SHOW TABLES") as $row) {
        print_r($row);
    }

    $conn = null;

} catch (PDOException $e) {
    echo "connection to database $db_database failed with the following message: " . $e->getMessage() . "\n";
    die();
}

<?php

declare (strict_types = 1);

$values = file_get_contents("../.env");

$lines = explode("\n", $values);
$items = array();

foreach ($lines as $line) {
    $items[] = substr($line, strpos($line, '=') + 1);
}

$rdbms = $items[0];
$db_host = $items[1];
$db_port = $items[2];
$db_charset = $items[3];
$db_database = $items[4];
$db_username = $items[5];
$db_password = $items[6];

$create_table_customers = <<< 'EOD'
DROP TABLE IF EXISTS `customers`;
EOD;

try {

    $conn = new PDO(
        "$rdbms:host=$db_host;port=$db_port;charset=$db_charset;dbname=$db_database",
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

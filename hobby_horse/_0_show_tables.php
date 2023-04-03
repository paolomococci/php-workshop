<?php

declare (strict_types = 1);

$values = file_get_contents("../.env");

$lines = explode("\n", $values);
$items = array();

foreach ($lines as $line) {
    $items[] = substr($line, strpos($line, '='));
}

$rdbms = $items[0];
$db_host = $items[1];
$db_port = $items[2];
$db_charset = $items[3];
$db_database = $items[4];
$db_username = $items[5];
$db_password = $items[6];

$show_tables_query = <<< 'EOD'
SHOW TABLES;
EOD;

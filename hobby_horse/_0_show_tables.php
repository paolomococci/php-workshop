<?php

declare (strict_types = 1);

$values = file_get_contents("../.env");

$lines = explode("\n", $values);
$items = array();

foreach ($lines as $line) {
    $items[] = substr($line, strpos($line, '='));
}

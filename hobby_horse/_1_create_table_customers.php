<?php

declare (strict_types = 1);

$values = file_get_contents("../.env");

$lines = explode("\n", $values);

foreach ($lines as $line) {
    echo "$line\n";
}

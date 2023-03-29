<?php

declare (strict_types = 1);

$original = [
    'some_6',
    'some_5',
    'some_4',
    'some_3',
    'some_two',
    'some_one',
];

$replacement = [
    'some_2',
    'some_1',
];

$result = array_splice($original, 4, count($original), $replacement);

var_dump($original);
var_dump($result);

<?php

declare(strict_types=1);

$alpha = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
$numbers = '0123456789';
$dot = '.';
$dash = '-';

$items = [
  15,
  7,
  15,
  37,
  34,
  36,
  28,
  36,
  30
];

foreach ($items as $item) 
  echo "$alpha$numbers$dot$dash"[$item];

  echo "\n";

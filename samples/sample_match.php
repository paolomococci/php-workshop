<?php

function getNumber(string $stringNumber): string {
  return match ($stringNumber) {
    'zero' => '0',
    'one' => '1',
    'two' => '2',
    'three' => '3',
    'four' => '4',
    'five' => '5',
    'six' => '6',
    'seven' => '7',
    'eight' => '8',
    'nine' => '9',
  };
}

$samples = [
  'zero',
  'one',
  'two',
  'three',
  'four',
  'five',
  'six',
  'seven',
  'eight',
  'nine'
];

foreach ($samples as $sample) {
  echo 'the word ' . $sample . ' corresponds to ' . getNumber($sample) . "\n";
}

echo "\n";

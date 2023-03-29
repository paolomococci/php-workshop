<?php

declare (strict_types = 1);

$xml = simplexml_load_file(__DIR__ . '/extra/assortment.xml');

$products = [
    'product' => [
        'some1',
        'some2',
        'some3',
        'some4',
        'some5',
        'some6',
    ],
];

$pattern = "%10s : %d\n";

foreach ($products as $product => $items) {
    echo ucfirst($product) . "\n";
    foreach ($items as $item) {
        printf(
            $pattern,
            $item,
            $xml?->store?->$product?->$item
        );
    }
}

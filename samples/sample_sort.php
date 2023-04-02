<?php

declare (strict_types = 1);

define('MAX', 80);

$start_time = microtime(true);

function show_processing_time(mixed $start_time)
{
    printf("\n\n");
    printf("processing time: %0.5f\n", (microtime(true) - $start_time));
}

function random_alpha_underscore(): string
{
    $alpha_underscore = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ_';
    return $alpha_underscore[rand(0, 26)] .
        $alpha_underscore[rand(0, 26)] .
        $alpha_underscore[rand(0, 26)] .
        $alpha_underscore[rand(0, 26)];
}

function show(mixed $start_time): void
{
    $iter = new ArrayIterator;
    for ($index = 256; $index < MAX + 256; $index += 2) {
        $key = sprintf('%04X', $index);
        $iter->offsetSet($key, random_alpha_underscore());
        $key = sprintf('%04X', $index + 1);
        if (rand(1, 2) % 2 == 0) {
            $iter->offsetSet($key, '_ABC');
        }

    }

    echo "\n";
    echo "pseudo-random strings before sorting\n";
    foreach ($iter as $key => $value) {
        echo "$key\t$value\n";
    }

    $iter->asort();
    echo "\n";
    echo "pseudo-random strings after sorting\n";
    foreach ($iter as $key => $value) {
        echo "$key\t$value\n";
    }
}

show($start_time);

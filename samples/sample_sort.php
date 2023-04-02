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
    
}

show($start_time);

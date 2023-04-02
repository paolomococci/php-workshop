<?php

declare (strict_types = 1);

define('RELIVE', 16);
define('LOOPS', 4096);
define('EDGE', 80.0);

$start_time = microtime(true);

function replay(
    float $abscissa,
    float $ordinate
): int {
    $c_r = $ordinate - 0.5;
    $c_i = $abscissa;
    $z_r = 0.0;
    $z_i = 0.0;
    $index = 0;
    
    return 0;
}

function mandelbrot(
    mixed $start_time
): void {}

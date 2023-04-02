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

    while (true) {
        $index++;
        $temp = $z_r * $z_i;
        $z_r_square = $z_r * $z_r;
        $z_i_square = $z_i * $z_i;
        $z_r = $z_r_square - $z_i_square + $c_r;
        $z_i = $temp + $temp + $c_i;

        if ($z_i_square + $z_r_square > RELIVE) {
            return $index;
        }

        if ($index > LOOPS) {
            return 0;
        }
    }
}

function mandelbrot(
    mixed $start_time
): void {
    $f_z = EDGE - 1;
    $out = '';

    for ($ordinate = -$f_z; $ordinate < $f_z; $ordinate++) {
        for ($abscissa = -$f_z; $abscissa < $f_z; $abscissa++) {
            $out .= (
                replay(
                    $abscissa / EDGE, 
                    $ordinate / EDGE
                ) == 0
            )
            ? '1'
            : '0';
        }
        $out .= "\n";
    }

    printf("\n\n");
    echo $out;

    $end_time = microtime(true);
    $time = $end_time - $start_time;
    printf("\n\n");
    printf("processing time: %0.3f\n", $time);
}

mandelbrot($start_time);

<?php

declare(strict_types=1);

class Someone {
    public int $id = 0;
    public int $code = 0;
    public string $name = '';
}

$someone = new Someone();

$someone->id = 111;
$someone->code = 222;
//$someone->name = 1;
$someone->name = 'qwerty';

var_dump($someone);

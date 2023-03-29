<?php

declare(strict_types=1);

class SomeOne {
  public static function someone(
    int $id,
    string $code,
    string $name
  ): void {
      echo "ID: $id" . " Code: $code " . "Name: $name\n";
  }
}

class SomeTwo extends SomeOne {
  public static function someone(
    ...$args
  ): void {
      var_dump($args);
  }
}

$someTwo = new SomeTwo();

$someTwo->someone(123456789, '00330200', 'something');

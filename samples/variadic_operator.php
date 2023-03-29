<?php

declare(strict_types=1);

class SomeOne {
  public static function someone(
    int $id,
    string $name
  ): void {
      echo "ID: $id" . "Name: $name\n";
  }
}

class SomeTwo extends SomeOne {
  public static function someone(...$args): void {
      var_dump($args);
  }
}

$someTwo = new SomeTwo();

echo $someTwo->someone(123456789, 'something');

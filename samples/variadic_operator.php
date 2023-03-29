<?php

declare(strict_types=1);

class SomeOne {
  public function someone(
    int $id,
    string $name
  ): void {
      echo "ID: $id" . "Name: $name\n";
  }
}

class SomeTwo extends SomeOne {
  public function someone(...$some): void {
      var_dump($some);
  }
}

$someTwo = new SomeTwo();

echo $someTwo->someone(123456789, 'something');

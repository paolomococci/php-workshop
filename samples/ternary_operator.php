<?php

declare(strict_types=1);

class SomeOne {
  public function someone(
    int $id
  ): string {
      return ($id > 0) ? "positive\n" : "negative\n";
  }
}

$someOne = new SomeOne();

echo $someOne->someone(-5);

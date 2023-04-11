<?php

declare(strict_types=1);

fscanf(STDIN, "%d %d", $a, $b);

$i = 0;

while ($a !== $b) {
  if ($a > $b) {
    $a = $a - $b;
    ++$i;
  } elseif ($a < $b) {
    $b = $b - $a;
    ++$i;
  }
}

echo $i . PHP_EOL;
#var_dump($s);

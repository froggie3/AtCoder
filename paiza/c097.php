<?php

declare(strict_types=1);

fscanf(STDIN, "%d %d %d", $n, $x, $y);

for ($i = 1; $i <= $n; $i++) {
  if (($i % $x === 0) && ($i % $y === 0)) {
    echo (string) 'AB', PHP_EOL;
  } elseif ($i % $x === 0) {
    echo (string) 'A', PHP_EOL;
  } elseif ($i % $y === 0) {
    echo (string) 'B', PHP_EOL;
  } else {
    echo (string) 'N', PHP_EOL;
  }
}

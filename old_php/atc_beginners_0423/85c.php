#!/usr/local/bin/php
<?php

declare(strict_types=1);

# solved: 04:08:58 (shindokatta) 

while (strpos($line = rtrim(fgets(STDIN)), '\n')) {
}
[$n, $y] = array_map('intval', explode(' ', $line));

for ($i = 0; $i <= $n; $i++) {
  for ($j = 0; $j <= $n; $j++) {
    $c = $n - $i - $j;
    if (10000 * $i + 5000 * $j + 1000 * $c === $y && $c >= 0) {
      echo (string) "$i $j $c", PHP_EOL;
      exit;
    }
  }
}

echo (string) "-1 -1 -1", PHP_EOL;

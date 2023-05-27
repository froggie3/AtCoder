#!/usr/local/bin/php
<?php

declare(strict_types=1);

# solved: 20

fscanf(STDIN, '%d %d', $n, $k);
while (strpos($line = rtrim(fgets(STDIN)), '\n'));
$s = str_split($line);
$current = 0;
for ($i = 0; $i < $n; $i++) {
  if ($s[$i] == 'o') {
    if ($current < $k) {
      $current += 1;
    } else {
      $s[$i] = 'x';
    }
  }
}

echo implode('', $s), PHP_EOL;

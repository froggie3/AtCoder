#!/usr/local/bin/php
<?php

declare(strict_types=1);

fscanf(STDIN, '%d %d', $n, $q);

$s = array_fill(0, $n, 0); // status

for ($i = 0; $i < $q; $i++) {
  $line = trim(fgets(STDIN), '\n');
  [$card, $x] = array_map('intval', explode(' ', $line));
  if ($card == 3) {
    if ($s[$x - 1] >= 2) {
      echo 'Yes', PHP_EOL;
    } else {
      echo 'No', PHP_EOL;
    }
  } else {
    $s[$x - 1] += $card;
  }
}

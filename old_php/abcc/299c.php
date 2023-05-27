#!/usr/local/bin/php
<?php

declare(strict_types=1);

fscanf(STDIN, '%d', $n);

while (strpos($line = rtrim(fgets(STDIN)), '\n')) {
}
$s = str_split($line);
$level = 0;
$ans = 0;

for ($flip = 0; $flip < 2; ++$flip) {
  for ($i = 0; $i < $n; ++$i) {
    if ($s[$i] === '-') {
      $ans = max($ans, $level);
      $level = 0;
    } else
      ++$level;
  }
  $s = array_reverse($s);
}

#var_dump($ans);

if ($ans)
  echo (string) $ans, PHP_EOL;
else
  echo (string) '-1', PHP_EOL;

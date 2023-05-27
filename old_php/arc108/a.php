#!/usr/local/bin/php
<?php

declare(strict_types=1);

fscanf(STDIN, '%d %d', $s, $p);
$ms = $mm = [];

# n x m , m x n は重複
for ($n = 1;; $n++) {
  $a = $s - $n;
  $ms[$a] = -1; # sum

  if (!($p % $n)) {
    $b = intdiv($p, $n);
    $mm[$b] = -1; # multiply
  }

  if (isset($ms[$a]) or isset($mm[$b])) {
    break;
  }
}

if (isset($ms[$p]) && isset($mm[$p]))
  echo 'Yes', PHP_EOL;
else
  echo 'No', PHP_EOL;

#var_dump($ms);
#var_dump($mm);
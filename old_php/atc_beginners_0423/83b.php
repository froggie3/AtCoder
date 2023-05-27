#!/usr/local/bin/php
<?php

declare(strict_types=1);

# solved time: 
fscanf(STDIN, "%d %d %d", $n, $a, $b);

#var_dump($n_string);

$c = 0;
$d = "";
$sum = 0;
$vars = [];
for ($i = 0; $i <= $n; $i++) {
  # code...
  $d = array_map('intval', str_split((string) $i));
  $sum = array_sum($d); // 各桁の和
  if ($a <= $sum && $sum <= $b) {
    #var_dump($sum);
    $vars[] = $i;
  }
}

echo (string) array_sum($vars), PHP_EOL;

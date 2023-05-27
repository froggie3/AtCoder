#!/usr/local/bin/php
<?php

declare(strict_types=1);

fscanf(STDIN, '%s', $s);
$arr = str_split($s);
$n = (int) $s;

$count = 0;

$ans = (int) $s[0];
if ($ans !== 0) {
  $count++;
  if ($ans !== $n) {
    $count++;
    $mod = $n % 100;
    if ($mod > 100) {
      $count++; # "0" button 
      $mod = $n % 10;
      if ($mod !== 0)
        $count++;
    } else
      $count++;
  }
}
echo (string) $count, PHP_EOL;



ob_start();

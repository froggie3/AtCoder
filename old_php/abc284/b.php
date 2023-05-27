#!/usr/local/bin/php
<?php

declare(strict_types=1);

fscanf(STDIN, '%d', $t);
$test = array();
for ($i = 0; $i < $t; $i++) {
  fscanf(STDIN, '%d', $n);

  while (strpos($line = rtrim(fgets(STDIN)), '\n'));
  $a = array_map('intval', explode(' ', $line));
  #$line = str_split($line);
  #$line = array_map('intval', explode(' ', $line)); // split and treat them as integer numbers
  #$line = explode(' ', $line); // split them as it is
  $test[] = ['n' => $n, 'a' => $a];
}
#var_dump($test);

foreach ($test as list('n' => $_, 'a' => $arr)) {
  $ans = 0;
  foreach ($arr as $m) {
    if ($m % 2 != 0) {
      ++$ans;
    }
  }
  echo (string) $ans, PHP_EOL;
}

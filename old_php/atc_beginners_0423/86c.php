#!/usr/local/bin/php
<?php

declare(strict_types=1);

# damedeshita (giveup in 25 min)

fscanf(STDIN, '%d', $n);

$t = [];
$x = [];
$y = [];

for ($i = 0; $i < $n; $i++) {
  $line = rtrim(fgets(STDIN), '\n');
  #$line = str_split($line);
  $line = array_map('intval', explode(' ', $line)); // split and treat them as integer numbers
  #$line = explode(' ', $line); // split them as it is
  $t[] = $line[0];
  $x[] = $line[1];
  $y[] = $line[2];
  #var_dump($t, $x, $y);
}

$x = 0;
$y = 0;

$last = count($t) - 1;

for ($i = 0; $i < $last; $i++) {
  $adj = array(
    'right' => [$x + 1, $y],
    'left'  => [$x - 1, $y],
    'up'    => [$x, $y + 1],
    'down'  => [$x, $y - 1]
  );

  print_r($adj);
  foreach ($adj as $direction) {
    foreach ($direction as $value) {
      if (abs($value - $x) || abs($value - $y)) {
      } else {
        echo (string) 'No', PHP_EOL;
        exit;
      }
    }
  }
}

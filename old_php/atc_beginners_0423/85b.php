#!/usr/local/bin/php
<?php

declare(strict_types=1);

# solved: 5:40.84

fscanf(STDIN, '%d', $n);
$d = array();
for ($i = 0; $i < $n; $i++) {
  $line = trim(fgets(STDIN), '\n');
  #$line = str_split($line);
  $line = (int) $line; // split and treat them as integer numbers
  #$line = explode(' ', $line); // split them as it is
  $d[$line] = true;
}
// $d = array_flip($d);
#var_dump($n,$d);

echo (string) count($d), PHP_EOL;


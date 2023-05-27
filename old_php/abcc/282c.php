#!/usr/local/bin/php
<?php

declare(strict_types=1);

fscanf(STDIN, '%d', $n);
while (strpos($line = rtrim(fgets(STDIN)), '\n'));
$s = str_split($line);
$quote = false;
ob_start(); 
for ($i = 0; $i < $n; ++$i) {
  if ($quote) {
    if ($s[$i] === '"') $quote = false;
  } else {
    if ($s[$i] === ',') $s[$i] = '.';
    elseif ($s[$i] === '"') $quote = true;
  }
  echo $s[$i];
}

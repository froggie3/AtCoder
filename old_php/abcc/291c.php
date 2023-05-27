#!/usr/local/bin/php
<?php

declare(strict_types=1);

fscanf(STDIN, '%d', $n);
while (strpos($line = rtrim(fgets(STDIN)), '\n'));
$s = str_split($line);
$x = $y = 0;
$arr = [];
$arr["$x, $y"] = false;
for ($i = 0; $i < $n; $i++) {
  if ($s[$i] === 'R')     ++$x;
  elseif ($s[$i] === 'L') --$x;
  elseif ($s[$i] === 'U') ++$y;
  elseif ($s[$i] === 'D') --$y;
  #echo (string) $x, ' ', $y, PHP_EOL;
  $str = "$x, $y";
  if (isset($arr[$str])) {
    echo 'Yes', PHP_EOL;
    exit;
  } else {
    $arr[$str] = false;
  }
}
#print_r($arr);
echo 'No', PHP_EOL;

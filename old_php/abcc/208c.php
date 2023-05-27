#!/usr/local/bin/php
<?php

declare(strict_types=1);


fscanf(STDIN, '%d %d', $n, $k);
while (strpos($line = rtrim(fgets(STDIN)), '\n'));
$a = array_map('intval', explode(' ', $line));

$sorted = $a;
sort($sorted);

$intdiv = fn ($k, $n) => [intdiv($k, $n), $k % $n];
[$div, $mod] = $intdiv($k, $n);

$ass = array_combine($sorted, array_fill(0, $n, $div));

foreach ($ass as $key => &$value) {
  if ($mod > 0) {
    $ass[$key] = $value + 1;
    $mod--;
  }
}

ob_start();

for ($i = 0; $i < $n; $i++)
  echo (string) $ass[$a[$i]], ' ', PHP_EOL;

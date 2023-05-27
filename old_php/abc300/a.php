#!/usr/local/bin/php
<?php
declare(strict_types=1);

fscanf(STDIN, '%d %d %d', $n, $a, $b);
while (strpos($line = rtrim(fgets(STDIN)), '\n'));
$c = array_map('intval', explode(' ', $line));

$sum = $a + $b;
foreach ($c as $key => $value) {
  if ($value===$sum):
    echo (string) $key + 1, PHP_EOL;
  endif;
}

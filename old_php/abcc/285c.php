#!/usr/local/bin/php
<?php

declare(strict_types=1);
while (strpos($line = rtrim(fgets(STDIN)), '\n'));
$s = str_split($line);
$s = array_reverse($s);
$count = count($s);

# アルファベットの何番目
#$alphaint = fn (string $s): int => array_flip(range('A', 'Z'))[$s] + 1;
$a = ord('A');
$z = ord('Z');
$base = abs($a - $z) + 1;

$ans = 0;

for ($i = 0; $i < $count; $i++) {
  $alphaint = ord($s[$i]) - $a + 1;
  $ans += $base ** $i * $alphaint;
}

echo (string) $ans, PHP_EOL;

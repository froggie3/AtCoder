#!/usr/local/bin/php
<?php

declare(strict_types=1);

# solved: 

fscanf(STDIN, '%d %d', $n, $m);
while (strpos($line = rtrim(fgets(STDIN)), '\n'));
$a = array_map('intval', explode(' ', $line));
while (strpos($line = rtrim(fgets(STDIN)), '\n'));
$b = array_map('intval', explode(' ', $line));
#$a = array_keys(array_flip($a));
#$b = array_keys(array_flip($b));
sort($a);
sort($b);

#print_r($a,);
#print_r($b,);
$arr = [];
$n = count($a);
$m = count($b);

for ($i = 0; $i < $n; $i++) {
  for ($j = 0; $j < $m; $j++) {
    $tmp = (string) abs($a[$i] - $b[$j]);
    $arr[$tmp] = false;
  }
}
$arr = array_keys($arr);
sort($arr);

echo (string) $arr[0], PHP_EOL;

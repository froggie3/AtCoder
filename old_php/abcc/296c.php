<?php

declare(strict_types=1);

fscanf(STDIN, '%d %d', $n, $x);
$a = array_map('intval', explode(' ', trim(fgets(STDIN))));
$ax = array_flip($a);
$ans = 'No';

for ($i = 0; $i < $n; $i++) {
  # a(j) の値もユニーク
  $j = -1 * ($x - $a[$i]);
  #echo (string) $j, PHP_EOL;
  if (isset($ax[$j])) {
    $ans = 'Yes';
    break;
  }
}

echo $ans, PHP_EOL;

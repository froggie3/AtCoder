#!/usr/local/bin/php
<?php

declare(strict_types=1);

fscanf(STDIN, '%d %d', $N, $M);

$a = array();
for ($i = 0; $i < $M; $i++)
  $a[] = array_map('intval', explode(' ', trim(fgets(STDIN))));

$pattern = [];
#$patterns = intdiv(($N - 1) ** 2, 2);

for ($i = 1; $i <= $N; $i++) {
  for ($j = 1; $j <= $N; $j++) {
    if ($i !== $j) {
      $pattern["$i, $j"] = -1;
    }
  }
}

$cnt = 0;
$arr = [];
for ($i = 0; $i < $M; $i++) {
  for ($j = 0; $j < $N - 1; $j++) {
    $arr[] = $a[$i][$j] . ', ' . $a[$i][$j + 1];
  }
}

foreach ($arr as $key => $value) {
  if (isset($pattern[$value])) {
    ++$cnt;
  }
}

print_r([$a, $pattern, $arr]);
echo (count($pattern) - $cnt), PHP_EOL;

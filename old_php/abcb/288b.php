#!/usr/local/bin/php
<?php

declare(strict_types=1);

fscanf(STDIN, '%d %d', $n, $m);

$s = array();
for ($i = 0; $i < $n; $i++) {
  $line = str_split(trim(fgets(STDIN)));
  $s[] = $line;
}
$t = array();
for ($i = 0; $i < $m; $i++) {
  $line = str_split(trim(fgets(STDIN)));
  $t[] = $line;
}
$count = 0; 
for ($i = 0; $i < $n; $i++) {
  for ($j = 0; $j < $m; $j++) {
    # 文字を確認
    for ($l = 0; $l < $m; $l++) {
      if ($s[$i][$l + 2] == $t[$j][$l]) {
        # OK
      } else {
        # NG
        break;
      }
      ++$count;
    }
  }
}
echo (string) $count, PHP_EOL;
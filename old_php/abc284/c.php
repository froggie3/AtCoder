#!/usr/local/bin/php
<?php

declare(strict_types=1);

fscanf(STDIN, '%d %d', $n, $m);

#$gr = array_fill(0, $n, false);

$a = [];
$b = [];
for ($i = 0; $i < $m; $i++) {
  $line = trim(fgets(STDIN), '\n');
  [$x, $y] = array_map('intval', explode(' ', $line));
  $a[] = $x;
  $b[] = $y;
  $adj[$a] = -1;
  $adj[$b] = -1;
}


// 空の隣接リストを作る


/* for ($i = 0; $i < $m; $i++) {
  $adj[$a] = -1;
  $adj[$b] = -1;
} */



# 各頂点を見て、
var_export($adj);

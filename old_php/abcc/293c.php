#!/usr/local/bin/php
<?php

declare(strict_types=1);

fscanf(STDIN, '%d %d', $h, $w);

$a = array();
for ($i = 0; $i < $h; $i++) {
  $line = trim(fgets(STDIN), '\n');
  $line = array_map('intval', explode(' ', $line)); // split and treat them as integer numbers
  $a[] = $line;
}
# 上から i 行目、左から j 列目

$i = 1;
$j = 1;


print_r($a);


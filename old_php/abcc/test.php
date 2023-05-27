#!/usr/local/bin/php
<?php

declare(strict_types=1);

$n = '234';
$c = strlen($n);
$arr = strrev($n);
$ans = 0;

for ($i = 0; $i < $c; $i++) {
  $ans += 10 ** $i * (int) $arr[$i];    # 基数部分
  echo (string) $ans, PHP_EOL;
}

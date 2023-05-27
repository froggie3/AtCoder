#!/usr/local/bin/php
<?php

declare(strict_types=1);

fscanf(STDIN, '%d %d %d', $a, $b, $c);
$arr = array_map(fn ($x) => 7 - $x, [$a, $b, $c]);
$sum = array_sum($arr);
echo (string) $sum, PHP_EOL;

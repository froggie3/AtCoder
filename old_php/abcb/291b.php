#!/usr/local/bin/php
<?php

declare(strict_types=1);

fscanf(STDIN, '%d', $n);
while (strpos($line = rtrim(fgets(STDIN)), '\n'));
$x = array_map('intval', explode(' ', $line));
sort($x);

$x = array_slice($x, $n, count($x) - $n * 2);
echo array_sum($x) / count($x), PHP_EOL;

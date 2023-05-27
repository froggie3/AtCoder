#!/usr/local/bin/php
<?php

declare(strict_types=1);
fscanf(STDIN, '%d', $n);
while (strpos($line = rtrim(fgets(STDIN)), '\n'));
$a = array_map('intval', explode(' ', $line));

$adj = array_fill(0, $n, []);
for ($i = 0; $i < $n; $i++) {
  $adj[$a[$i] - 1][] = $i + 1;
}
print_r($adj);
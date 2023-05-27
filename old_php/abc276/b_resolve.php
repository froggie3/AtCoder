#!/usr/local/bin/php
<?php

declare(strict_types=1);

fscanf(STDIN, '%d %d', $n, $m);

$adj = array_fill(0, $n, []);

for ($i = 0; $i < $m; $i++) {
  $line = trim(fgets(STDIN));
  list($p, $q) = array_map('intval', explode(' ', $line));
  $adj[$p - 1][] = $q;
  $adj[$q - 1][] = $p;
}

print_r($adj);

for ($i = 0; $i < $n; $i++) {
  sort($adj[$i]);
  printf('%d %s' . PHP_EOL, count($adj[$i]), implode(' ', $adj[$i]));
}


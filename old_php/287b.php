#!/usr/local/bin/php
<?php

fscanf(STDIN, '%d %d', $N, $M);
$S = [];
$T = [];
for ($i = 0; $i < $N; $i++) $S[] = trim(fgets(STDIN));
for ($i = 0; $i < $M; $i++) $T[] = trim(fgets(STDIN));
$T = array_values(array_unique($T));

$S_trimmed = array_map(fn ($x) => substr($x, 3), $S);
$S_trimmed = array_values(array_unique($S_trimmed));
#print_r([$S_trimmed, $T]);
$match = 0;

for ($i = 0; $i < count($S_trimmed); $i++) {
  for ($j = 0; $j < count($T); $j++)
    if ($S_trimmed[$i] == $T[$j]) ++$match;
}

echo $match, PHP_EOL;

<?php

declare(strict_types=1);

fscanf(STDIN, '%s', $n); // index
fscanf(STDIN, '%s %s', $t, $a);

$h = array_map('intval', explode(' ', trim(fgets(STDIN))));

$avgs = array_map(fn ($x) => $t - ($x * 0.006), $h);

# 平均と a の値の差
$diff = array_map(fn ($x) => abs($a - $x), $avgs);
#1, 2, 5,

// var_dump($avgs);
// var_dump($diff);

# 最小値のキーを求める
$min = array_search(min($diff), $diff);
echo (string) $min + 1, PHP_EOL;

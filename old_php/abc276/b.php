<?php

declare(strict_types=1);

fscanf(STDIN, "%d %d", $n, $m);

$a = array_fill(0, $n, []);
#print_r($a);

for ($i = 0; $i < $m; $i++) {
    $line = rtrim(fgets(STDIN), '\n');
    [$u, $v] = array_map('intval', explode(' ', $line));
    $a[$u - 1][] = $v;
    $a[$v - 1][] = $u;
}

#var_dump($a);

foreach ($a as &$v) {
    sort($v);
    echo (string) count($v), ' ', implode(' ', $v), PHP_EOL;
}

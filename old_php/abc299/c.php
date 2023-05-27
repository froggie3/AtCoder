<?php

declare(strict_types=1);

fscanf(STDIN, "%d", $n);
$s = str_split(trim(fgets(STDIN)));

$count = 0;
$level = [];

foreach ($s as $i) {
    if ($i === 'o') {
        ++$count;
    } else {
        if ($count !== 0) {
            $level[] = $count;
            $count = 0;
        }
    }
}
if ($level === []) {
    echo (string) "-1", PHP_EOL;
} else {
    echo (string) max($level), PHP_EOL;
}

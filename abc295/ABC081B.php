<?php

declare(strict_types=1);

$n = trim(fgets(STDIN));
$input = explode(" ", trim(fgets(STDIN)));

(string) $ans = calc($input, (int) $n);
echo $ans;

function calc(array $array, int $max, int $count = 0): int
{
    for ($i = 0; $i < $max; $i++) {
        foreach ($array as $item) {
            if ($item % 2 !== 0) {
                return $count;
            }
        }
        $array = array_map(fn ($x) => $x / 2, $array);
        return calc($array, $max, ++$count);
    }
}

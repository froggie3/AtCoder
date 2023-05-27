<?php

declare(strict_types=1);

# [$n, $a, $b] = explode(' ', trim(fgets(STDIN)));
#echo func((int) $n, (int) $a, (int) $b);

function func(int $n, int $a, int $b): int
{
    #var_dump($n, $a, $b);
    $target = array();
    for ($i = 0; $i <= $n; ++$i) {
        if (testEqual(sumOfDigits($i), $a, $b)) {
            $target[] = $i;
        }
    }
    #var_dump($n, $target);
    $sum = array_sum($target) ?: 0;
    return $sum;
}

function testEqual($n, $min, $max)
{
    return ($min <= $n && $max >= $n) ?: false;
}
#var_dump(testEqual(2, min: 2, max: 5));

function sumOfDigits(int $n): int
{
    $total = 0;
    foreach (str_split((string) $n) as $digitChar) {
        $digitInt = (int) $digitChar;
        $total += $digitInt;
    }
    return $total;
}

foreach ([func(20, 2, 5), func(10, 1, 2), func(100, 4, 16)] as $ans) {
    echo $ans, PHP_EOL;
}

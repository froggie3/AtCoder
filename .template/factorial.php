<?php

function factorial(int $x): int
{
    if ($x === 1)
        return 1;
    $n = 1;
    for ($i = 1; $i <= $x; $i++)
        $n *= $i;
    return $n;
}

$ans = factorial(5);
printf('%s' . PHP_EOL, $ans);

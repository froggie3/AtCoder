<?php

declare(strict_types=1);

function abc(int $n): string
{
    $array = range('a', 'h', 1);
    var_dump($array);
    if (isset($array[$n])) {
        return $array[$n];
    }
}

echo abc(0);
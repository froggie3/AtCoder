<?php

declare(strict_types=1);

$input = str_split(trim(fgets(STDIN)));

function main(array $split): string
{
    $count = 0;
    #var_export($split);
    foreach ($split as $item) {
        if ($item === '1') ++$count;
    }
    return "$count";
}

echo main($input);

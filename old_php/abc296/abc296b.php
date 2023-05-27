<?php

declare(strict_types=1);

$input_array = array();
while ($input_line = fgets(STDIN)) {
    array_push($input_array, $input_line);
}
$input_array = array_reverse($input_array);
echo implode("", column($input_array));

function column(array $array): array
{
    for ($i = 0; $i < 8; $i++) { // tate
        $strings = $array[$i];
        #var_dump($strings);
        for ($k = 0; $k < 8; $k++) { // yoko
            if ($strings[$k] === '*') {
                return [forRow($k + 1), $i + 1];
            }
        }
    }
    return [];
}

function forRow(int $value): string
{
    $array = range('a', 'h', 1);
    #var_dump($array);
    if (isset($array[$value])) {
        return $array[$value];
    }
    return '';
}

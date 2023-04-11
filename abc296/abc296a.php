<?php

declare(strict_types=1);

$n = trim(fgets(STDIN)); // int 
$s = trim(fgets(STDIN));   // string

function main(int $length, string $string): bool 
{
    $beforeChar = "";
    $array = str_split($string);
    #var_dump($array);
    foreach ($array as $current) {
        // different string
        #var_dump($beforeChar, $current);
        if ($beforeChar === $current) {
            return false;
        }       
        $beforeChar = $current;                
    }
    return true;
}


function testYes(bool $bool): void {
    if ($bool) {
        echo "Yes";
    } else {
        echo "No";
    }
}

testYes(main((int) $n, (string) $s));


/* var_dump(testEqual(100, 0, 1, 0));
var_dump(testEqual(100, 0, 0, 2));
 */
<?php

declare(strict_types=1);

function main()
{
    fscanf(STDIN, "%d %d", $a, $b);
    fscanf(STDIN, "%s", $s);

    $s = str_split($s);
    $len = $a + $b + 1;

    if ($s[$a] !== '-') {
        echo (string) 'No', PHP_EOL;
        return;
    }

    $strn = 0;
    for ($i = 0; $i < $len; $i++) {
        if ($s[$i] !== '-') {
            if (!(ord('0') <= ord($s[$i]) && ord($s[$i]) <= ord('9'))) {
                echo (string) 'No', PHP_EOL;
                return;
            } else {
                ++$strn;
            }
        }
    }

    if ($strn === $len - 1) {
        echo (string) 'Yes', PHP_EOL;
    } else {
        echo (string) 'No', PHP_EOL;
    }
}

main();

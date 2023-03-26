<?php

declare(strict_types=1);

$a = trim(fgets(STDIN)); // max = 50
$b = trim(fgets(STDIN));
$c = trim(fgets(STDIN));  // abc >= 1 
$yen = trim(fgets(STDIN)); // 50 <= x <= 20000, can be devided by 50

function main($yen, ...$coins): int
{
    list($a, $b, $c) = $coins;
    $patterns = 0;
    #var_dump($coins, $yen);

    // 500 
    for ($k = 0; $k <= $a; ++$k) {
        // 100
        for ($l = 0; $l <= $b; ++$l) {
            // 50
            for ($m = 0; $m <= $c; ++$m) {
                if (testEqual($yen, $k, $l, $m)) {
                    ++$patterns;
                }
            }
        }
    }
    if ($yen >= 50 && $yen <= 20000) {
        return $patterns;
    }
}

function testEqual($yen, $k, $l, $m): bool
{
    return ($yen === 500 * $k + 100 * $l + 50 * $m) ?: false;
}

echo main((int) $yen, (int) $a, (int) $b, (int) $c);

/* echo main(100, 2, 2, 2), PHP_EOL;
echo main(150, 5, 1, 0), PHP_EOL;
echo main(6000, 30, 40, 50), PHP_EOL;
  */

/* var_dump(testEqual(100, 0, 1, 0));
var_dump(testEqual(100, 0, 0, 2));
 */
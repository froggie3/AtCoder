<?php

declare(strict_types=1);

fscanf(trim(STDIN), "%d %d", $length, $value);
$numbers = array_map('intval', explode(" ", trim(fgets(STDIN))));

echo main($value, $numbers);
/* echo main(5, [3, 1, 4, 1, 5, 9]);
echo main(-4, [-2, -7, -1, -8, -2, -8]);
echo main(0, [141421356,17320508]);
 */
function main(int $x, array $numbers): string
{
    foreach ($numbers as $i) {
        foreach ($numbers as $j) {
            if ($i - $j === $x) {
                if ($i - $j === 0) {
                    return 'Yes';
                }
                return 'Yes';
            }
        }
    }
    return 'No';
}

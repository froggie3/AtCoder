<?php

declare(strict_types=1);

fscanf(STDIN, "%d %d", $a, $b);

if ($a < 0 && 0 <= $b) {
    echo (string) 'Zero', PHP_EOL;
} elseif ($a > 0 && $b > 0) {
    echo (string) 'Positive', PHP_EOL;
} else {
    if (($b - $a + 1) % 2 === 0) {
        echo (string) 'Positive', PHP_EOL;
    } else {
        echo (string) 'Negative', PHP_EOL;
    }
}

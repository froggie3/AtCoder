<?php

declare(strict_types=1);

fscanf(STDIN, "%s", $s);

$count = count(str_split($s));

$content = implode(['+', $s, '+']);

$plus = implode(array_fill(0, $count + 2, '+'));

echo (string) $plus, PHP_EOL;
echo (string) $content, PHP_EOL;
echo (string) $plus, PHP_EOL;
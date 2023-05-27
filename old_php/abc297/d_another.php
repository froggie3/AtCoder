<?php

declare(strict_types=1);

fscanf(STDIN, "%d %d", $a, $b);

$i = 0;

if ($a < $b) [$a, $b] = [$b, $a];
while ($b > 0) {
  $i = (int) $i + floor($a / $b);
  $a = $a % $b;
  [$a, $b] = [$b, $a];
}

echo (int) $i - 1  . PHP_EOL;
#var_dump($s);

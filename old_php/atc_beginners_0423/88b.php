#!/usr/local/bin/php
<?php

# solved: 15:50.14

declare(strict_types=1);

fscanf(STDIN, '%d', $n);

while (strpos($line = rtrim(fgets(STDIN)), '\n')) {
}
$a = array_map('intval', explode(' ', $line));
sort($a);
#rsort($a);
#var_dump($n, $a);

$alice_sum = 0;
$bob_sum = 0;
//alice (odd)
for ($i = 0; $i < $n; $i++) {
  if ($i % 2 !== 0) {
    $alice_sum += array_pop($a);
  } else {
    $bob_sum += array_pop($a);
  }
}

echo (string) abs($alice_sum - $bob_sum), PHP_EOL;

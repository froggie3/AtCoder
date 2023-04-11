<?php

declare(strict_types=1);

fscanf(STDIN, "%d %d", $n, $m);
$a = array_map('intval', explode(" ", trim(fgets(STDIN))));
$b = array_map('intval', explode(" ", trim(fgets(STDIN))));

$c = [...$a, ...$b];
sort($c);

print_r($c);

$v = array_combine($c, range(1, count($c)));

print_r($v);

foreach ($a as $e) {
  print $v[$e] . PHP_EOL;
}

foreach ($b as $e) {
  print $v[$e] . PHP_EOL;
}
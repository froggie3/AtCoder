#!/usr/local/bin/php
<?php

declare(strict_types=1);

fscanf(STDIN, '%d %d', $n, $m);
while (strpos($line = rtrim(fgets(STDIN)), '\n')) {
}
$a = array_map('intval', explode(' ', $line));
while (strpos($line = rtrim(fgets(STDIN)), '\n')) {
}
$b = array_map('intval', explode(' ', $line));

# a, b are unique
$c = [...$a, ...$b];
sort($c);
$sizec = count($c);

# make sets
$a = array_flip($a);
$b = array_flip($b);
$o1 = '';
$o2 = '';
#var_dump($a, $b, $c);

for ($i = 0; $i < $sizec; $i++) {
  $key = $c[$i];
  if (isset($a[$key])) $o1 .= $i + 1 . ' ';
  if (isset($b[$key])) $o2 .= $i + 1 . ' ';
}

echo $o1, PHP_EOL;
echo $o2, PHP_EOL;

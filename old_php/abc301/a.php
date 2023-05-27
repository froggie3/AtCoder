#!/usr/local/bin/php
<?php

declare(strict_types=1);

fscanf(STDIN, '%d', $n);
$s = str_split(trim(fgets(STDIN)));

$t = $a = 0;

for ($i = 0; $i < $n; $i++) {
  if ($s[$i] === 'T') ++$t;
  else ++$a;
}

if ($t > $a) {
  echo 'T', PHP_EOL;
} elseif ($t < $a) {
  echo 'A', PHP_EOL;
} elseif ($s[$n - 1] === 'A') {
  echo 'T', PHP_EOL;
} else {
  echo 'A', PHP_EOL;
}

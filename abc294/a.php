<?php

declare(strict_types=1);

$n = trim(fgets(STDIN)); // int 
$a = explode(' ', trim(fgets(STDIN)));   // string

$bucket = [];
for ($i = 0; $i < $n; $i++) {
  if ($a[$i] % 2 === 0) {
    $bucket[] = $a[$i];
  }
}
// PHP_EOL
echo implode(' ', $bucket);

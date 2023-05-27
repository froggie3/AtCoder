<?php

declare(strict_types=1);

# solved time: 10:07.86

fscanf(STDIN, "%d", $a);
fscanf(STDIN, "%d", $b);
fscanf(STDIN, "%d", $c);
fscanf(STDIN, "%d", $x);

$ptn = 0;
$sum = 0;

#while ($sum === $x) {
for ($i = 0; $i <= $a; $i++) {
  for ($j = 0; $j <= $b; $j++) {
    for ($k = 0; $k <= $c; $k++) {
      $sum = $i * 500 + $j * 100 + $k * 50;
      if ($sum === $x) {
        #var_dump([$i, $j, $k]);
        $ptn += 1;
      }
    }
  }
}
#}

echo (string) $ptn, PHP_EOL;

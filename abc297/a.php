<?php

declare(strict_types=1);

fscanf(STDIN, "%d %d", $n, $d);
$t = array_map('intval', explode(" ", trim(fgets(STDIN))));


for ($i = 0; $i < $n; $i++) {
  if ($i < $n - 1) {
    $diff = $t[$i + 1] - $t[$i];
    if ($diff <= $d) {
      echo $t[$i + 1];
      exit;
    }
  }
}
// PHP_EOL
echo -1; 

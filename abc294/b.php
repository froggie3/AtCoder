<?php

declare(strict_types=1);

[$h, $w] = explode(' ', trim(fgets(STDIN)));   // string

$a = [];
while ($std = fgets(STDIN)) {
  $std = trim($std);
  if ($std === "") break;
  else $a[] = explode(' ', $std);
}

for ($i = 0; $i < $h; $i++) {
  for ($j = 0; $j < $w; $j++) {
    if ($a[$i][$j] == 0) {
      echo /* $emp[$i][$j]  = */ '.';
    } else {
      /*$emp[$i][$j] = */
      echo chr(832 + $a[$i][$j]);
    }
    if ($j === $w - 1) {
      echo "\n";
    }
  }
}

<?php

declare(strict_types=1);

fscanf(STDIN, "%d %d", $h, $w);

$s = [];

while ($std = fgets(STDIN)) {
  $std = trim($std);
  if ($std === "") break;
  else $s[] = str_split($std);
}

for ($h_i = 0; $h_i < $h; $h_i++) {
  for ($w_i = 0; $w_i < $w; $w_i++) {
    if ($w_i < $w - 1) {
      if ($s[$h_i][$w_i] === 'T' && $s[$h_i][$w_i + 1] === 'T') {
        $s[$h_i][$w_i] = 'P';
        $s[$h_i][$w_i + 1] = 'C';
      }
    }
    echo $s[$h_i][$w_i];
    if ($w_i === $w - 1) echo "\n";
  }
}


#var_dump($s);

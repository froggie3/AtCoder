<?php

fscanf(STDIN, "%d", $n);

$s = str_split(trim(fgets(STDIN)));

$bar_c = 0; // |
$ast_c = 0; // "*"

$flag = false;

for ($i = 0; $i < $n; $i++) {
  if ($s[$i] === '|') {
    ++$bar_c;
    if ($bar_c !== 0 && $ast_c !== 0) {
      $flag = true;
    }
  }
  if ($bar_c !== 0) {
    if ($s[$i] === '*') {
      ++$ast_c;
    }
  }

  # code...
}

if ($flag) {
  echo (string) 'in', PHP_EOL;
} else {
  echo (string) 'out', PHP_EOL;
}

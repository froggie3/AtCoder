<?php

declare(strict_types=1);

// https://atcoder.jp/contests/abc059/tasks/abc058_b

function main()
{
  fscanf(STDIN, "%d", $n); // index
  $s = [];
  $t = [];
  for ($i = 0; $i < $n; $i++) {
    $ln_ = readline();
    $ln_ = trim($ln_);
    $ln_ = explode(' ', $ln_);
    $s[] = $ln_[0];
    $t[] = $ln_[1];
  }

  $flags = [];
  $a = [];
  for ($i = 0; $i < $n; $i++) {
    for ($j = 0; $j < $n; $j++) {
      // adana は不定 (どちらか) 

      $boolean = $s[$i] !== $t[$i] || $a[$i] === $t[$i];
      $boolean2 = $a[$i] !== $s[$j] && $a[$i] === $t[$j];
      if ($boolean && $boolean2) {
        $flags[] = true;
      } else {
        $flags[] = false;
      }
    }
  }

  foreach ($flags as $f) {
    if ($f === false) {
      echo (string) 'No', PHP_EOL;
      return;
    }
  }
  echo (string) 'Yes', PHP_EOL;
}
main();

<?php

declare(strict_types=1);

function main()
{
  fscanf(STDIN, "%d %d", $r, $c);

  $b = array();
  for ($i = 0; $i < $r; $i++) {
    $ln_ = readline();
    $ln_ = trim($ln_);
    $ln_ = str_split($ln_);
    $b[] = $ln_;
  }

  #var_dump($b);
  [$n, $i_, $j_] = [null, null, null];

  for ($i = 0; $i < $r; $i++) {
    for ($j = 0; $j < $c; $j++) {
      $curr = &$b[$i][$j];
      if (is_int($curr)) {
        $n = (int) $curr;
        [$i_, $j_] = [$i, $j];
      } else {
        if (abs($i - $i_) + abs($j - $j_) <= $n) {
          $curr = '.'; #'.';
          //$n = null;
        }
      }
      echo $curr;
      if ($j >= $c - 1) {
        echo PHP_EOL;
      }
    }
  }
}
main();

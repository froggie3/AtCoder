#!/usr/local/bin/php
<?php

declare(strict_types=1);

# solved: 18:57.87

fscanf(STDIN, '%s', $tmp);
#$tmp = 'RNBQKBNR'; // b = 3, b = 6
$S = str_split($tmp);

$rkr = [];

$bodd = -1;
$beven = -1;


for ($i = 0; $i < 8; $i++) {
  // b の偶奇判定
  if ($S[$i] === 'B') {
    if ($i % 2 === 0) {
      $bodd++;
    } else {
      $beven++;
    }
  }
  if ($S[$i] === 'R') {
    $rkr[] = 'R';
  }
  if ($S[$i] === 'K') {
    $rkr[] = 'K';
  }
  # code...
}

#var_dump($rkr);
if ($bodd == 0 && $beven == 0) {
  //
  if (implode('', $rkr) === 'RKR') {
    echo (string) 'Yes', PHP_EOL;
    exit;
  }
}
echo (string) 'No', PHP_EOL;

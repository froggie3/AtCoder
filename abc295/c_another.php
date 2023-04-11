<?php

declare(strict_types=1);

$n = (trim(fgets(STDIN)));
$a = explode(' ', trim(fgets(STDIN)));
$n = $n - 1;

#$a = [4, 1, 7, 4, 1, 4];
#$n = count($a) - 1;

$mp = [];
foreach ($a as $e) {
  if(!isset($mp[$e])){
    $mp[$e] = 0;
  }
  $mp[$e] += 1;
}

$ans = 0;
foreach ($mp as $k => $v) {
  $ans += floor($v / 2);
}
echo $ans;


<?php

declare(strict_types=1);

fscanf(STDIN, "%d %d", $h, $w);

$a = [];

while ($std = fgets(STDIN)) {
  $std = trim($std);
  if ($std === "") break;
  else $s[] = explode(' ', $std);
}


$c = [...$a, ...$b];
sort($c);

$len_c = count($c);

$a_i = 0;
$b_i = 0;
$a_array = [];
$b_array = [];

for ($i = 0; $i < $len_c; $i++) {
  if ($c[$i] === $a[$a_i]) {
    $a_array[] = $i + 1;
    $a_i++;
  } elseif ($c[$i] === $b[$b_i]) {
    $b_array[] = $i + 1;
    $b_i++;
  }
}
echo implode(' ', $a_array) . PHP_EOL;
echo implode(' ', $b_array) . PHP_EOL;

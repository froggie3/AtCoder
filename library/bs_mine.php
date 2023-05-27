<?php

declare(strict_types=1);

$arr = array(11, 13, 24, 26, 35, 37, 46, 49, 54, 68);
print_r($arr);
sscanf(rtrim(fgets(STDIN)), '%d', $target);

$left = 0;
$center = -1;
$right = count($arr) - 1;

while ($left <= $right) {
  $center = intdiv($left + $right, 2);    // 要素の真ん中の位置
  if ($arr[$center] === $target) {
    echo "探索値: $target は 0 から数えて $center 番目にあります。\n";
    exit;
  } elseif ($arr[$center] < $target) {
    $left = $center + 1;
  } else {
    $right = $center - 1;
  }
}

echo "探索値: $target は見つかりませんでした。\n";

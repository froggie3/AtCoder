<?php

declare(strict_types=1);

$arr = array(11, 13, 24, 26, 35, 37, 46, 49, 54, 68);

print_r($arr);

#sscanf(rtrim(fgets(STDIN)), '%d', $target);

$target = 11;
$mid = 0;
$high = 0;
while (abs($ok - $ng) > 1) {
  $mid = ($ok +  $ng) >> 1;
  if (solve($mid))
}
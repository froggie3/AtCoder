<?php 
declare (strict_types=1);

$a = fgets(STDIN);
$a = explode(' ', $a);

$ans = (int) $a[1] / (int) $a[0];
$ans = round($ans, 3);

#var_dump($ans);
printf("%.3f", $ans);
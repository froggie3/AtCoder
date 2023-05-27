<?php

declare(strict_types=1);


# 数値処理

// round
$var = 1.7;



# 奇数 or 偶数判定

$isEven = $x & 1; // true
$isOdd = !($x & 1);

$even = array_filter($array, fn($x) => !($x & 1));
$odd = array_filter($array, fn($x) => $x & 1);

var_dump($even, $odd);


# アルファベットの順列
$alphabet = range('a', 'z', 9);

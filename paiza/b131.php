<?php

declare(strict_types=1);

fscanf(STDIN, "%d %d", $n, $m);

$a = array();
for ($i = 0; $i < $n; $i++) {
    $ln_ = readline();
    $ln_ = trim($ln_);
    $ln_ = array_map('intval', explode(" ", $ln_));
    $a[] = $ln_;
}

fscanf(STDIN, "%d", $x);
$r = array();
$s = array();
for ($i = 0; $i < $x; $i++) {
    $ln_ = readline();
    $ln_ = trim($ln_);
    [$ln_r, $ln_s] = array_map('intval', explode(' ', $ln_));
    $r[] = $ln_r;
    $s[] = $ln_s;
}

// Calc for x 

$sum = 0;

# e.g. $j 工程目 ($j < $x)
for ($i = 0; $i < $x - 1; $i++) {
    if ($x <= 1) {
        #echo (string) 'aaa', PHP_EOL;
        $sum += $a[$r[$i]][$s[$i]];
    } else {
        if (isset($s[$i + 1])) {
            if ($s[$i + 1] == $s[$i]) {
                continue;
            } else if ($s[$i + 1] < $s[$i]) {
                $sum += $a[$r[$i - 1]][$s[$i - 1]];
                echo (string) 'a', PHP_EOL;
            } elseif ($s[$i + 1] > $s[$i]) {
                $sum += $a[$r[$i -1 ]][$s[$i - 1]];
                echo (string) 'b', PHP_EOL;
            }
        }
    }
}


/* var_dump($a);
var_dump($r);
var_dump($s);
 */
echo (string) $sum, PHP_EOL;

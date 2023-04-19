<?php

declare(strict_types=1);

fscanf(STDIN, "%d %d", $n, $m);

[$a, $b] = [[], []];

for ($i = 0; $i < $m; $i++) {
    $ln_ = readline();
    $ln_ = trim($ln_);
    $ln_ = array_map('intval', explode(' ', $ln_));
    [$ln_a, $ln_b] = $ln_;
    $a[] = $ln_a;
    $b[] = $ln_b;
}

#var_dump($a);
#var_dump($b);

// 頂点を作る
$adj = [];
for ($i = 0; $i < $m; $i++) {
    $adj[$a[$i]][] = -1;
    $adj[$b[$i]][] = -1;
}

for ($i = 0; $i < $m; $i++) {
    if (array_key_exists($a[$i], $adj)) {
        $c = count($adj[$a[$i]]);
        for ($j = 0; $j < $c; $j++) {
            $adj[$a] = '';
        }
    }
    $imax = count($adj[$i]) - 1;
}
var_dump($adj);

#!/usr/local/bin/php
<?php

declare(strict_types=1);

fscanf(STDIN, '%d %d', $h, $w);
if ($h <= 1 or $w <= 1) {
  $ans = ($h <= 0 or $w <= 0) ? 0 : 1;
} else {
  $s = $h * $w;
  [$ans, $l] = [intdiv($s, 2), $s % 2];
  $ans = ($l) ? $ans + 1 : $ans;
}
echo (string) $ans, PHP_EOL;

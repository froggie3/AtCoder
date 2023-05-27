#!/usr/local/bin/php
<?php

declare(strict_types=1);

fscanf(STDIN, '%d', $n);
$s = array();
for ($i = 0; $i < $n; $i++) {
  $line = trim(fgets(STDIN));
  $s[] = $line;
}
$s = array_reverse($s);
for ($i = 0; $i < $n; $i++) {
  echo $s[$i], PHP_EOL;
}
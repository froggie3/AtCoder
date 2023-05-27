#!/usr/local/bin/php
<?php
declare(strict_types=1);

fscanf(STDIN, '%d %d', $h, $w);
$a = array();
for ($i = 0; $i < $h; $i++) {
  $line = trim(fgets(STDIN), '\n');
  $line = str_split($line);
  $a[] = $line;
}
for ($i = 0; $i < $h; $i++) {
  $line = trim(fgets(STDIN), '\n');
  $line = str_split($line);
  $b[] = $line;
}
# s < h, t < w

  


ob_start();


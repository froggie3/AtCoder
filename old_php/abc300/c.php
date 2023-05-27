#!/usr/local/bin/php
<?php
declare(strict_types=1);

fscanf(STDIN, '%d %d', $h, $w);
$c = array();
for ($i = 0; $i < $h; $i++) {
  $line = trim(fgets(STDIN), '\n');
  $line = str_split($line);
  $c[] = $line;
}

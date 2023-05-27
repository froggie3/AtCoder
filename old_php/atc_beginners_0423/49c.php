#!/usr/local/bin/php
<?php

declare(strict_types=1);

# solved: 48:29.40

while (strpos($line = rtrim(fgets(STDIN)), '\n')) {
}
$s = $line;
$set = ['dream', 'dreamer', 'erase', 'eraser'];

while (1) {
  $c = 0;
  $slen = strlen($s);
  foreach ($set as $key => $value) {
    $len = strlen($value);
    $test = substr($s, -$len);
    if ($test === $value) {
      $s = substr($s, 0, $slen - $len);;
      break;
    } else {
      $c++;
    }
  }
  if ($c >= 4) break;
}
if ($s === '') {
  echo (string) 'YES', PHP_EOL;
  exit;
}
echo (string) 'NO', PHP_EOL;
#var_dump($s);

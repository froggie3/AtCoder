<?php
#!/usr/local/bin/php

declare(strict_types=1);

# solved: 16 min

fscanf(STDIN, "%d", $n);

$a = array_map('intval', explode(' ', trim(fgets(STDIN), '\n')));
$c = 0;

$cantdiv = false;

while (1) {
  foreach ($a as $key => &$value) {
    if ($value % 2 === 0) {
      $a[$key] = intdiv($value, 2);
    } else {
      #echo (string) 0, PHP_EOL;
      $cantdiv = true;
      break;
    }
  }
  if (!$cantdiv) {
    $c += 1;
  } else {
    break;
  }
}

echo (string) $c, PHP_EOL;
#var_dump($a);
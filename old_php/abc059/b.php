<?php

declare(strict_types=1);

// https://atcoder.jp/contests/abc059/tasks/abc059_b

function main()
{
  fscanf(STDIN, "%s", $a);
  fscanf(STDIN, "%s", $b);

  if ($a > $b) {
    echo (string) 'GREATER', PHP_EOL;
  } elseif ($a < $b) {
    echo (string) 'LESS', PHP_EOL;
  } else {
    echo (string) 'EQUAL', PHP_EOL;
  }
}
main();

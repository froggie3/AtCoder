<?php

declare(strict_types=1);

// https://atcoder.jp/contests/abc059/tasks/abc058_b

function main()
{
  fscanf(STDIN, "%s", $o);
  fscanf(STDIN, "%s", $e);

  $o = str_split($o);
  $e = str_split($e);

  $o_len = count($o);
  if ($o_len !== count($e)) {
    $e = array_pad($e, $o_len, '');
  }
  $arr = [];
  for ($i = 0; $i < $o_len; $i++) {
    $arr[] = $o[$i];
    $arr[] = $e[$i];
    # code...
  }
  echo (string) implode('', $arr), PHP_EOL;
}
main();

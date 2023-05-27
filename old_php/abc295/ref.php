<?php

function main()
{
  $arr = range(1, 11, 2);
  print_r($arr);
  $c = count($arr);
  for ($i = 0; $i < $c; $i++) {
    $curr =& $arr[$i];
    $curr = $curr - 1;
  }
  print_r($arr);
}
main();

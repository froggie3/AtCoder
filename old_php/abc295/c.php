<?php

declare(strict_types=1);

$n = (trim(fgets(STDIN)));
$a = explode(' ', trim(fgets(STDIN)));


$n = $n - 1;
#$a = [4, 1, 7, 4, 1, 4];
#$n = count($a) - 1;
sort($a);
#rsort($a);

$counter = 0;
for ($i = 0; $i < $n; $i++)
{
  if ($n >= $i)   
  {
    if ($a[$i] === $a[$i+1])
    {
      $i++; $counter++; 
    }
  }
}
#print_r($a);
print $counter;


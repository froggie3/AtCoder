<?php

declare(strict_types=1);

$dummy = explode("", trim(fgets(STDIN)));
$words = explode(" ", trim(fgets(STDIN)));
$compared = ["and", "not", "that", "the", "you"];

$flag = "No"; 
foreach ($words as $word) { 
  if (in_array($word, $compared, true)) {
    $flag = "Yes"; 
  } 
}
echo $flag;

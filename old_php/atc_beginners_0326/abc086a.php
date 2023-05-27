<?php


declare(strict_types=1);

$input = explode(' ', fgets(STDIN));
[$a, $b] = $input;
$product = $a * $b;

function main($product)
{
  if (($product % 2) === 0) {
    return 'Even';
  }
  return 'Odd';
}

echo main($product);

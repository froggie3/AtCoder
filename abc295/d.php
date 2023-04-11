<?php

declare(strict_types=1);

fscanf(STDIN, "%s", $s);
$s = str_split($s);
var_dump($s);
$bucket = array_flip($s);

$c = count($bucket);

var_dump($bucket, $c);
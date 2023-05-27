#!/usr/local/bin/php
<?php

declare(strict_types=1);

fscanf(STDIN, '%d %d', $n, $k);
while (strpos($line = rtrim(fgets(STDIN)), '\n')) { }
$a = array_map('intval', explode(' ', $line));

#sort($a);

print_r($a);

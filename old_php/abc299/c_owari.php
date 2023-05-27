<?php



// fscanf(STDIN, "%d", $n);
// $s = str_split(trim(fgets(STDIN)));

$n = 10;
$s = str_split('o-oooo---o');
$s = 'o-oooo---o';

$begin = -1;
$final = -1;
$length = -1;

preg_match_all('/o+/', $s, $matches, PREG_OFFSET_CAPTURE);

var_dump($matches);
$level = -1;


$arr = [];

foreach ($matches as list($arr)) {
    [$string, $offset] = $arr;
    $begin = $offset - 1;
    $after = $offset + 1;
    $level = strlen($string);
    $arr[] = ['b' => $begin, 'a' => $after, 'l' =>$level];
}

#var_dump($arr);

// for ($i = 0; $i < $n; $i++) {
//     if ($s === 'o') {

//     }
// }

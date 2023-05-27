<?php

fscanf(STDIN, "%d %d", $n, $t);

$tmp = array();
// zokusei 2 ko
for ($i = 0; $i < 2; $i++) {
  $line = rtrim(fgets(STDIN), '\n');
  $line = array_map('intval', explode(' ', $line));

  $tmp[] = $line;
}
list($c, $r) = $tmp;
#var_dump($c, $r);


$winner = -1;
$winnersnum = -1;

if (!in_array($t, $c)) {
  $t = $c[0];
}

for ($i = 0; $i < $n; $i++) {
  // $t の色が出された 
  if ($t === $c[$i]) {
    if ($winner === -1) {
      # １にんめ      
      $winner = $i + 1;
      $winnersnum = $r[$i];
    } elseif ($winnersnum <= $r[$i]) {
      $winner = $i + 1;
      $winnersnum = $r[$i];
    }
    #echo (string) 'found', PHP_EOL;
  } 
  # code...
}

echo (string) $winner, PHP_EOL;

// out player number

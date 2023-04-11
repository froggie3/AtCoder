<?php

declare(strict_types=1);

$s = str_split(trim(fgets(STDIN)));   // string

$passedk = false;
$passedr = 0;
$kbetweenr = false;

$passedb = 0;
$lastb = NULL;
$difflag = true;

$twovars = [];
$differency = false;

for ($i = 0; $i < count($s); $i++) {
  if ($s[$i] === 'R') {
    $passedr++;
    if ($passedk) {
      $kbetweenr = true;
    }
  }
  if ($passedr === 1 && $s[$i] === 'K') {
    $passedk = true;
  }

  if ($s[$i] === 'B') {
    $passedb++;
    $twovars[] = $i + 1;
  }
}

#var_dump(sizeof($twovars));

function even($i)
{
  return !($i & 1);
}
#var_dump($twovars);
if (sizeof($twovars) === 2) {
  if (even($twovars[0]) !== even($twovars[1])) {
    $differency = true;
  }
}
#var_dump($kbetweenr, $differency);
#var_dump($passedb, $differency);

if ($kbetweenr && $differency) {
  echo "Yes";
} else {
  echo 'No';
}

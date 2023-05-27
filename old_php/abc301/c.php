#!/usr/local/bin/php
<?php

declare(strict_types=1);

$s = str_split(trim(fgets(STDIN)));
$t = str_split(trim(fgets(STDIN)));
$size = count($s);
#rsort($s);
#rsort($t);

for ($i = 0; $i < $size; $i++) {
  if ($s[$i] == $s[$i]) { 
    # 同じ文字
    #continue;

    # 両方 @ のときどうする？
  } else {
    # 探索開始
    
  }
}

print_r([$s, $t]);

<?php
/**

This is the first part. You can solve the second part here when you are done with this. Multiply two numbers! Simple!

The arguments are passed as strings.
The numbers may be way very large
Answer should be returned as a string
The returned "number" should not start with zeros e.g. 0123 is invalid
Note: 100 randomly generated tests!
**/

function multiply(string $a, string $b): string {
  // Write your code here
  echo 'a='.$a;
  echo 'b='.$b;
  $muti = array();
for ($i = 0; $i < 10; $i++) {
    for ($j = 0; $j < 10; $j++) {
        $muti[strval($i)][strval($j)] = $i * $j;
    }
}

$len_1 = strlen($a);
$len_2 = strlen($b);
$len_r = $len_1+$len_2+1;
$result = array_fill(0, $len_r, 0);
$a = strrev($a);
$b = strrev($b);
//按位运算
for ($i = 0; $i < $len_1; $i++) {
    for ($j = 0; $j < $len_2; $j++) {
        $result[$i + $j] += $muti[$a[$i]][$b[$j]];
    }
}

//进位处理
$i = 0;
$j = $len_r-1;
do{
    $result[$i + 1] += (int) ($result[$i] / 10);
    $result[$i] = $result[$i] % 10;
}  while (++$i<$j);


$i = $j - 1;
//去除前导0
while ($i && !$result[$i--]) {
};
$i++;
$str = '';
do {
    $str .= $result[$i];
} while ($i--);

return  $str;
}


function multiply(string $a, string $b): string {
  $a = array_reverse(str_split(ltrim($a, '0')));
  $b = array_reverse(str_split(ltrim($b, '0')));
  $r = [];

  foreach ($a as $ai => $av) {
    foreach ($b as $bi => $bv) {
      $m = $av * $bv;
      $r[$ai + $bi] += $m;
      if ($r[$ai + $bi] >= 10) {
        $r[$ai + $bi + 1] += floor($r[$ai + $bi] / 10);
        $r[$ai + $bi] = $r[$ai + $bi] % 10;
      }
    }
  }

  return implode('', array_reverse($r));
}
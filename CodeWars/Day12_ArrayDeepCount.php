<?php
function deep_c(array $a): int {
  $c= 0;
  foreach ($a as $value) {
    $c++;
    if(is_array($value)){
      $c += deep_c($value);
    }

  }
  return $c;
  //return count($a, COUNT_RECURSIVE); // Rewrite this with your own logic
}
echo deep_c(["x", "y", ["z"]]).PHP_EOL; //4
echo deep_c([1, 2, [3, 4, [5]]]).PHP_EOL;
$food = array('fruits' => array('orange', 'banana', 'apple'), //7
              'veggie' => array('carrot', 'collard', 'pea')); //8
echo deep_c($food).PHP_EOL;


<?php
function productFib($prod) {
  // your code
	$n_0 =0;
	$n_1 =1;
	$n_next = 0;
	$n_pro=0;

	while ( $prod>$n_pro) {

		$n_next = $n_0+$n_1;
		$n_pro = $n_next*$n_1;
		if($n_pro==$prod){
			return [$n_1,$n_next,true];
		}elseif($n_pro>$prod){
			return [$n_1,$n_next,false];
		}

		$n_0 = $n_1;
		$n_1 = $n_next;
	}

}
var_dump(productFib(714));// [21, 34, true]
var_dump(productFib(4895));// [55, 89, true]
var_dump(productFib(5895));// [89, 144, false]
<?php
function game($n) {
	$sun_add = $sum_one = $sum = 0;
	for($i=1;$i<=$n;$i++){
		for($j=1;$j<=$n;$j++){
			printf('%5s',$j.'/'.($j+$i)."|");
			$sum += $j/($j+$i);
		} echo PHP_EOL;
	} echo $sum.PHP_EOL;
	for($i=1;$i<$n;$i++){
		if($i<$n){
			$sum_one+=$i;
		}
	}
	$sun_add = $sum_one*2+$n;
	if($sun_add%2==0){
		return [$sun_add/2];
	}else{
		return [$sun_add,2];
	}
}

var_dump(game(8));

<?php

function buddy($start, $limit) {
    // your code
    for($n=$start;$n<=$limit;$n++){
    	$m = -1;
    	$div = 1;
    	while ( $div<= sqrt($n)) {
    		if($n%$div==0){
    			$m += $div;
    			$res = $n/$div;
    			if($n/$div<$n){
    				$m += $res;
    			}

    		}
    		$div++;
    	}
    	if($m<=$n){
    		continue;
    	}
    	$m_sum = -1;
    	$div = 1;
    	while ( $div<= sqrt($m)) {
    		if($m%$div==0){
    			$m_sum += $div;
    			$res = $m/$div;
    			if($res<$n){
    				$m_sum += $res;
    			}

    		}
    		$div++;
    	}
    	if($m_sum==$n){
    		return "$n $m";
    	}
    }
   return "Nothing";
}

print_r(buddy(10, 50));// "48 75"
print_r(buddy(1071625,1103735));// returns "48 75"
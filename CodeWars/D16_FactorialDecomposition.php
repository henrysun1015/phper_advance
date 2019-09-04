<?php
error_reporting(0);
function decomp($n) {
	$num_count = array();
	$primes = get_prime($n);
	for($i=2;$i<=$n;$i++){
		$start = $i;
		if(in_array($start,$primes)){
			$num_count[$start]++;
			continue;
		}
		foreach ($primes as  $j) {
			if($i<$j){
				break;
			}
			$start =  $i;
			while ($start>1) {
				if($start%$j==0){
					$num_count[$j]++;
					$start /= $j;
				}else{
					break;
				}
			}
		}
	}
	$decomp = '';
	foreach ($num_count as $key => $value) {
		if($value>1){
			$decomp .= ' * '.$key.'^'.$value;
		}else{
			$decomp .= ' * '.$key;
		}
	}
	return ltrim($decomp,' * ');
}
function get_prime($num){
	$prime = array();
	for($i=2;$i<=$num;$i++){
		$is_prime = true;
		for ($j = 2; $j <= sqrt($i); $j++) {
	        if ($i % $j == 0) {
	           $is_prime = false;
	        }
    	}
    	if($is_prime){
    		$prime[] = $i;
    	}
	}
	return $prime;
}
var_dump(decomp(12));
var_dump(decomp(22));
var_dump(decomp(25));
/**
n = 12; decomp(12) -> "2^10 * 3^5 * 5^2 * 7 * 11"
since 12! is divisible by 2 ten times, by 3 five times, by 5 two times and by 7 and 11 only once.

n = 22; decomp(22) -> "2^19 * 3^9 * 5^4 * 7^3 * 11^2 * 13 * 17 * 19"

n = 25; decomp(25) -> 2^22 * 3^10 * 5^6 * 7^3 * 11^2 * 13 * 17 * 19 * 23

*/
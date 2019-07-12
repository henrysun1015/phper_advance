<?php

function longestConsec($strarr, $k) {
    // your code
    $arr_len = count($strarr);
    $longest = '';
    for($i=0;$i<=$arr_len-$k;$i++) {
    	$string = '';
    	for($j=0;$j<$k;$j++){
    		$string .= $strarr[$i+$j];
    	}
    	if(strlen($longest)<strlen($string)){
    		$longest = $string;
    	}
    }
   return $longest;
}


echo longestConsec(["zone", "abigail", "theta", "form", "libe", "zas", "theta", "abigail"], 2);
echo PHP_EOL;//return abigailtheta
echo longestConsec(["ejjjjmmtthh", "zxxuueeg", "aanlljrrrxx", "dqqqaaabbb", "oocccffuucccjjjkkkjyyyeehh"], 2);
echo PHP_EOL;//return dqqqaaabbboocccffuucccjjjkkkjyyyeehh

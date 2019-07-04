<?php

function solution ($roman) {
  $number = 0;
 	$strs=["M"=>1000,"CM"=>900,"D"=>500,"CD"=>400,"C"=>100,"XC"=>90,
                "L"=>50,"XL"=>40,"X"=>10,"IX"=>9,"V"=>5,"IV"=>4,"I"=>1];
    $i = 0;
    $len = strlen($roman);
    while ($i<$len){
    	$litter = $roman{$i};
    	if(isset($roman{$i+1})){
    		$db = $litter.$roman{$i+1};
    		if(isset($strs[$db])){
    			$number +=$strs[$db];
    			$i += 2;
    			continue;
    		}
    	}
    	$number +=$strs[$litter];
    	$i++;
    }
  return $number;
}
var_dump(solution('MDCLXVI'));
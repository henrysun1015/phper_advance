<?php

function string_transformer(string $str): string {
   return implode(' ',array_reverse(explode(' ',strtolower($str) ^ strtoupper($str) ^ $str)));
}

function stringTransformer($s){
	$new_string = $word = '';
	$i = 0;
	$len = strlen($s);
	while ($i<$len) {
		$litter = $s{$i};
		$i++;
		$ascii_num = ord($litter);
		if($ascii_num==32){
			$word = ' '.$word;
			if(isset($new_string{0})){
				$new_string = $word.$new_string;
			}else{
				$new_string = $word;
			}
			$word ='';
			continue;
		}
		$word .= chr($ascii_num>96?($ascii_num-32):($ascii_num+32));
	}
	if(!empty($word)){
		$new_string = $word.$new_string;
	}
	return $new_string;
}
var_dump(stringTransformer("Example string"));//string(14) "STRING eXAMPLE"
var_dump(stringTransformer(" A b C d E f G "));//string(15) " g F e D c B a "
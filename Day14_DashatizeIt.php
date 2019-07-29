<?php

/*Given a number,
return a string with dash'-'marks before and after each odd integer,
but do not begin or end the string with a dash mark.*/

function dashatize1(int $num): string {
    // Replace with your code
    $numbers = str_split($num);
    $str = '';
    $is_ord = false;
    foreach ($numbers as $key => $value) {
    	if($value%2==1){
    		$str .=  empty($str)?$value:'-'.$value;
    		$is_ord = true;
    	}else{
    		$str .= $is_ord?'-'.$value:$value;
    		$is_ord = false;
    	}
    }
    return trim(str_replace('--', '-',$str),'-');
}

function dashatize2(int $num): string {
	return trim(str_replace('--', '-', preg_replace('/([13579])/','-$1-', $num)), '-');
}

echo dashatize2(-1).PHP_EOL ;//-> '2-7-4'
echo dashatize1(6815).PHP_EOL;// -> '68-1-5'
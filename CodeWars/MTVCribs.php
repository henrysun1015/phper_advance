<?php
/**
 * @Purpose:
 * @CreateDate: 2019/9/19 17:23
 * @Author:shr26207 sunhaoran@offcn.com
 */

function my_crib($n) {
	$crib = '';
	for($i=0;$i<2*$n;$i++){
		if($i<$n){
			$crib .= str_repeat(' ',$n-$i).'/'.str_repeat (' ',2*$i).'\\'.str_repeat(' ',$n-$i)."\n";
		}elseif($i==$n){
			$crib .=  '/'.str_repeat ('_',2*$n).'\\'."\n";
		}else{
			$crib .=  '|'.str_repeat (' ',2*$n).'|'."\n";
		}
	}
	$crib .=  '|'.str_repeat ('_',2*$n).'|';
	return $crib;
}

print_r(my_crib(10));

echo PHP_EOL;

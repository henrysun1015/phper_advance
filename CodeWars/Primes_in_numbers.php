<?php
/**
 * @Purpose:https://www.codewars.com/kata/primes-in-numbers/train/php
 * @CreateDate: 2019/8/26 13:53
 * @Author:shr26207 sunhaoran@offcn.com
 */

function primeFactors($n) {
	$params_count= array();
	for($i=2; $i<=$n; $i++) {
		while($n%$i==0){
			$n = $n/$i;
			isset($params_count[$i])?$params_count[$i]++:$params_count[$i]=1;
		}
		if($n==1){
			break;
		}
	}
	$str = '';
	foreach ($params_count as $key=>$val){
		$str .= $val>1?'('.$key.'**'.$val.')':'('.$key.')';
	}
	return $str;
}
function primeFactors_f($n) {
	if ($n < 2) return "(".strval($n).")";
	$factors = "";
	for ($i = 2; $i <= $n; $i++) {
		$cnt = 0;
		while ($n % $i == 0) {
			$cnt++;
			$n /= $i;
		}
		if ($cnt) {
			$factors .= "(".strval($i);
			if ($cnt > 1) {
				$factors .= "**".strval($cnt);
			}
			$factors .= ")";
		}
	}
	return $factors;
}
echo primeFactors(7775460);//"(2**2)(3**3)(5)(7)(11**2)(17)");
echo PHP_EOL;exit;
echo primeFactors(7919);//"(7919)");
echo PHP_EOL;
echo primeFactors(86240);//"(2**5)(5)(7**2)(11)");
echo PHP_EOL;
echo primeFactors(999999999);//"(3)(17**2)(31)(677)");
echo PHP_EOL;
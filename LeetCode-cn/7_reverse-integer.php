<?php
/**
 * @Purpose:
 * @CreateDate: 2019/9/20 16:46
 * @Author:shr26207 sunhaoran@offcn.com
 */

class Solution {

	/**
	 * @param Integer $x
	 * @return Integer
	 */
	function reverse($x) {
		$x = (string)$x;
		$str_num = '';
		for($i=strlen($x)-1;$i>=0;$i--){
			$n = $x{$i};
			if($n=='-'){
				$str_num = $n.$str_num;
				break;
			}
			if($n>0 || strlen($str_num)>0){
				$str_num .= $n;
			}
		}
		$int = (int)$str_num;
		if($int<-2147483648 || $int>2147483647){
			return 0;
		}
		return $int;
	}
}
$m = new Solution();

echo $m->reverse(123);echo PHP_EOL;
echo $m->reverse(901000);echo PHP_EOL;
echo $m->reverse(-112);echo PHP_EOL;
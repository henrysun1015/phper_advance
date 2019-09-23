<?php
/**
 * @Purpose:
 * @CreateDate: 2019/9/23 16:57
 * @Author:shr26207 sunhaoran@offcn.com
 */

class Solution {

	/**
	 * @param Integer $x
	 * @return Boolean
	 */
	function isPalindrome($x) {
		$x = (string)$x;
		$x_len = strlen($x);
		for($i=0;$i<$x_len/2;$i++){
			if($x{$i}!=$x{$x_len-1-$i}){
				return false;
			}
		}
		return true;
	}
}

$m = new Solution();
var_dump($m->isPalindrome("1111112111111"));echo PHP_EOL;
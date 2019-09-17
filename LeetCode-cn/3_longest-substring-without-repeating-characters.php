<?php
/**
 * @Purpose:
 * @CreateDate: 2019/9/17 16:11
 * @Author:shr26207 sunhaoran@offcn.com
 */

class Solution {

	/**
	 * @param String $s
	 * @return Integer
	 */
	function lengthOfLongestSubstring($s) {
		$len = strlen($s);
		$max_len = 0;
		for($i=0;$i<$len;$i++){
			$left = substr($s,$i+1);
			//var_dump($left);
			$current_len = 1;
			$box = array();
			$box[] =  $s{$i};
			for ($j=0;$j<strlen($left);$j++){
				$next = $left{$j};
				if(in_array($next,$box)){
					break;
				}
				$box[] = $next;
				$current_len++;
			}
			//var_dump($current_len);
			if($current_len>$max_len){
				$max_len = $current_len;
			}
		}
		return $max_len;
	}
}
$model = new Solution();
echo $model->lengthOfLongestSubstring("dvdf");echo PHP_EOL;
echo $model->lengthOfLongestSubstring("abcabcbb");echo PHP_EOL;
echo $model->lengthOfLongestSubstring("pwwkew");echo PHP_EOL;

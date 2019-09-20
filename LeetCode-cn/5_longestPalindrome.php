<?php
/**
 * @Purpose:https://leetcode-cn.com/problems/longest-palindromic-substring/
 * @CreateDate: 2019/9/19 10:04
 * @Author:shr26207 sunhaoran@offcn.com
 */

class Solution {

	/**
	 * @param String $s
	 * @return String
	 */
	function longestPalindrome($s) {
		$length = strlen($s);
		$longest = $s{0};
		for($i=0;$i<$length;$i++){
			if(strlen($this->l2rHelper($s,$i)) >strlen($longest)){
				$longest = $this->l2rHelper($s, $i);
			}
		}
		return $longest;
	}

	function l2rHelper($s,$mid){
		$l = $mid - 1; $r = $mid + 1;
		$length = strlen($s);
		while ($r < $length){
			if($s{$r} == $s{$mid}){
				$r++;
			}else{
				break;
			}
		}

		//exit;
		while ($l >= 0 && $r < $length){
			if($s{$l} == $s{$r}){
				$l--;
				$r++;
			}else{
				break;
			}
		}
		return substr($s,$l+1,$r-$l-1);
	}
}

$m = new Solution();

echo $m->longestPalindrome("cbbd");echo PHP_EOL;
echo $m->longestPalindrome("babad");echo PHP_EOL;
echo $m->longestPalindrome("bb");echo PHP_EOL;
//echo $m->longestPalindrome('cbbd');echo PHP_EOL;
/**
 *给定一个字符串 s，找到 s 中最长的回文子串。你可以假设 s 的最大长度为 1000。

示例 1：

输入: "babad"
输出: "bab"
注意: "aba" 也是一个有效答案。
示例 2：

输入: "cbbd"
输出: "bb"

来源：力扣（LeetCode）
链接：https://leetcode-cn.com/problems/longest-palindromic-substring
著作权归领扣网络所有。商业转载请联系官方授权，非商业转载请注明出处。
 */
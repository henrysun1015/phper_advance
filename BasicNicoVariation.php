<?php
/**
 * @Purpose:https://www.codewars.com/kata/5968bb83c307f0bb86000015/train/php
 * @CreateDate: 2019/8/27 18:53
 * @Author:shr26207 sunhaoran@offcn.com
 */
function nico(string $key, string $message): string {
	$new_sort = array();
	$lkey = strlen($key);
	$lmsg = strlen($message);
	$max_len = ceil($lmsg/$lkey)*$lkey;
	$j = 0;
	$new_msg = '';
	for($i=0;$i<=$max_len;$i++){
		$new_sort[$key{$j}.'_'.$j] = isset($message{$i})?$message{$i}:' ';
		$j++;
		if($j==$lkey){
			$j = 0;
			ksort($new_sort);
			$new_msg .= implode('',$new_sort);
			$new_sort = array();
		}
	}
	return $new_msg;
}
//"sp9rpl7n7lrg9xfdq7lyram43b4e3gribtbw4zg58m1dwq2a85e2ek3rrwkjtmkas0555jorcqrnlv6pczkwrr5agzszgl2vuzen8wqcxnrc7tdon0x6paudlmwuci8ywbykcxz3hme1s2ekh9ntptkr77vb8ch856u2d0ttahriyn557s9a4ume3qdr87hck6bod4s1mnetcyt005"
var_dump(nico("dz97w", "9ppsrnl7l79fgrx7yqdlm3ar4eg4b3bbirtz54wg1wm8da52q8e32ekwjrrkksmta5j505crroqvpln6krzcwaz5rgg2zslznuveqxw8cctrn7nxod0adp6uwcmluyb8iwczkyxm1h3eeh2skttn9p7vrk7c88bhud652tht0ay5irnsa759m3u4er7dq8kbch641dosecnmt05ty0"));
echo PHP_EOL;exit;
//"abcd  "

echo nico("abc", "abcd");echo PHP_EOL;
//"2143658709"
echo nico("ba", "1234567890");echo PHP_EOL;
//"message"
echo nico("a", "message");echo PHP_EOL;
//"eky"
echo nico("key", "key");echo PHP_EOL;

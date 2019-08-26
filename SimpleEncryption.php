<?php
//"This is a test!", 1 -> "hsi  etTi sats!"
//"This is a test!", 2 -> "hsi  etTi sats!" -> "s eT ashi tist!"

function encrypt($text, $n) {
	if(empty($text) || $n<=0){
		return $text;
	}

  for($i=0;$i<$n;$i++)
  {
  	$str = '';
  	$left = '';
	for($j=0;$j<strlen($text);$j++){
		if($j%2){
  			$str .= $text{$j};
  		}else{
			$left .= $text{$j};
  		}
	}
  	$text = $str.$left;
  }
  return $text;
}

function decrypt($text, $n){
	if(empty($text) || $n<=0){
		return $text;
	}

	  for($i=0;$i<$n;$i++)
	  {
	  	$str = '';
  		$len = strlen($text);
		for($j=0;$j<floor($len/2);$j++){
			$f = (int)floor($len/2)+$j;
			$str .= $text{$f}.$text{$j};
		}
  		$text = $len%2==0?$str:$str.$text{$len-1};
	  }
	  return $text;
}
echo encrypt("This is a test!", 3);
echo PHP_EOL;
echo decrypt("s eT ashi tist!", 2);
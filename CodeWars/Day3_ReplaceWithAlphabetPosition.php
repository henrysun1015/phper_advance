<?php

function alphabet_position(string $s): string {
  // Your code here
	$len=strlen($s);
	$i=0;
	$position = '';
	while ($i<$len) {
		$letter = $s{$i};
		$ascii_number = ord(strtolower($letter));
		if($ascii_number>=97 && $ascii_number<=122){
			if(!empty($position)){
				$position .= ' '.($ascii_number-96);
			}else{
				$position = ($ascii_number-96);
			}
		}
		$i++;
	}
	return $position;
}

echo alphabet_position('The sunset sets at twelve o\' clock.');

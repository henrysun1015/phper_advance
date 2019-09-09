<?php
/**
 * @Purpose:https://www.codewars.com/kata/57eb8fcdf670e99d9b000272/train/php
 * @CreateDate: 2019/9/9 9:04
 * @Author:shr26207 sunhaoran@offcn.com
 */
function high($x) {
	$high_word = $current = '';
	$high_score = $score = 0;
	for($i=0;$i<=strlen($x);$i++){
		$l = @$x{$i};
		if($l==' ' || empty($l)){
			if($score>$high_score){
				$high_word = $current;
				$high_score = $score;
			}
			$score = 0;
			$current = '';
		}else{
			$current .= $l;
			$score += ord($l)-96;
		}
	}
	return $high_word;
}

var_dump('taxi'===high('man i need a taxi up to ubud'));
var_dump('volcano'===high('what time are we climbing up the volcano'));
var_dump('semynak'===high('take me to semynak'));


/*
Given a string of words, you need to find the highest scoring word.

Each letter of a word scores points according to its position in the alphabet: a = 1, b = 2, c = 3 etc.

You need to return the highest scoring word as a string.

If two words score the same, return the word that appears earliest in the original string.

All letters will be lowercase and all inputs will be valid.
 */

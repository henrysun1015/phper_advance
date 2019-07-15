<?php

function bingo(array $ticket, int $win): string {
  // Your code here
  $mini_win = 0;
  foreach ($ticket as $key => $value) {
  	for($i=0;$i<strlen($value[0]);$i++){
  		if(ord($value[0]{$i})==$value[1]){
  			$mini_win++;
  			break;
  		}
  	}
  }
  if($mini_win>=$win){
  	return 'Winner!';
  }else{
  	return 'Loser!';
  }
}
echo bingo([['ABC', 65], ['HGR', 74], ['BYHT', 74]], 2);
echo bingo([['ABC', 65], ['HGR', 74], ['BYHT', 74]], 1);

<?php
//https://www.codewars.com/kata/52b7ed099cdc285c300001cd/train/php
function sum_intervals(array $intervals): int {
	  // Your code here
	if(empty($intervals)){
		return 0;
	}
	$new_intervals = array();
	$len = count($intervals);
	$sum_add = 0;
	for($i=0;$i<$len;$i++){
		$sum_add += ($intervals[$i][1]-$intervals[$i][0]);
		for($j=$intervals[$i][0];$j<$intervals[$i][1];$j++){
			$new_intervals[$j] = 1;
		}
		if(!isset($new_intervals[($j)]))
		$new_intervals[($j)] = 0;

	}

	return array_sum($new_intervals);

}


echo sum_intervals( [
   [1,2],
   [6, 10],
   [11, 15],
] ); // => 9

echo sum_intervals([
   [1,4],
   [7, 10],
   [3, 5]
] ); // => 7

echo sum_intervals( [
   [1,5],
   [10, 20],
   [1, 6],
   [16, 19],
   [5, 11]
] ); // => 19
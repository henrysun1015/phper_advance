<?php
//https://www.codewars.com/kata/5839c48f0cf94640a20001d3/train/php
function land_perimeter($arr) {
	$count = 0;
	foreach ($arr as $r => $value) {

		$c = 0;
		while (isset($value{$c})) {

			if($value{$c}=='X'){
				foreach ([[-1,0],[0,1],[1,0],[0,-1]] as list($dr, $dc)) {
					$new_r = $r+$dr;
					$new_c = $c+$dc;
					if($new_c>=0 && isset($arr[$new_r][$new_c]) && $arr[$new_r][$new_c]=="X"){
						continue;
					}
					$count++;
				}
			}
			$c++;
		}

	}
	return 'Total land perimeter: '.$count;
}

echo land_perimeter(["OOOOXO", "XOXOOX", "XXOXOX", "XOXOOO", "OOOOOO", "OOOXOO", "OOXXOO"]);
echo land_perimeter([
"OXOOOX",
"OXOXOO",
"XXOOOX",
"OXXXOO",
"OOXOOX",
"OXOOOO",
"OOXOOX",
"OOXOOO",
"OXOOOO",
"OXOOXX"]).PHP_EOL;

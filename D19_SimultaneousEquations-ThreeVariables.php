<?php
function solveEq($eq){
	$sum_D = $sum_Dx = $sum_Dy = $sum_Dz = 0;
	for($i=0;$i<3;$i++){
		$line1 = $line2 = $x1 = $x2 = $y1 = $y2 =$z1 = $z2 =1;
		for($j=0;$j<3;$j++){
			$line1 *= $eq[($i+$j)%3][$j];
			$line2 *= $eq[($i+$j)%3][2-$j];

			$x1 *= $j==0?$eq[($i+$j)%3][3]:$eq[($i+$j)%3][$j];
			$x2 *= 2-$j==0?$eq[($i+$j)%3][3]:$eq[($i+$j)%3][2-$j];

			$y1 *= $j==1?$eq[($i+$j)%3][3]:$eq[($i+$j)%3][$j];
			$y2 *= 2-$j==1?$eq[($i+$j)%3][3]:$eq[($i+$j)%3][2-$j];

			$z1 *= $j==2?$eq[($i+$j)%3][3]:$eq[($i+$j)%3][$j];
			$z2 *= 2-$j==2?$eq[($i+$j)%3][3]:$eq[($i+$j)%3][2-$j];
			//echo $j>=1?(($i+$j)%3).($j+1).PHP_EOL:(($i+$j)%3).($j).PHP_EOL;
			//echo $j-1>=1?(($i+$j)%3).(3-$j-1).PHP_EOL:(($i+$j)%3).(3-$j).PHP_EOL;
		}
		$sum_D += ($line1-$line2);

		$sum_Dx +=($x1-$x2);
		$sum_Dy +=($y1-$y2);
		$sum_Dz +=($z1-$z2);
	}

	return [$sum_Dx/$sum_D,$sum_Dy/$sum_D,$sum_Dz/$sum_D];
}array (


print_r(solveEq([[4, -3, 1, -10], [2, 1, 3, 0], [-1, 2, -5, 17]]));//[1, 4, -2],
print_r(solveEq([[2, 1, 3, 10], [-3, -2, 7, 5], [3, 3, -4, 7]]));//[-1, 6, 2],
print_r(solveEq([[3, 2, 0, 7], [-4, 0, 3, -6], [0, -2, -6, -10]]));//[3, -1, 2],
print_r(solveEq([[4, 2, -5, -21], [2, -2, 1, 7], [4, 3, -1, -1]]));//[1, 0, 5],
print_r(solveEq([[1, 1, 1, 5], [2, 2, 3, 14], [2, -3, 2, -5]]));//[-2, 3, 4],

/**

4, -3, 1, -10
2, 1, 3, 0
-1, 2, -5, 17


**/
//https://www.codewars.com/kata/59280c056d6c5a74ca000149/train/php
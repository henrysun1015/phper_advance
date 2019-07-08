<?php

function nbMonths($startPriceOld, $startPriceNew, $savingPerMonth, $percentLossByMonth) {
    // your code
    $total = $startPriceOld;
    $newCar = $startPriceNew;
    $saveMoney = 0;
    $month = 0;
    while ($total < $newCar) {
    	$month++;
    	if($month%2==0){
    		$percentLossByMonth += 0.5;
    	}
    	$startPriceOld *= (1-$percentLossByMonth/100);
    	$newCar *= (1-$percentLossByMonth/100);
    	$saveMoney += $savingPerMonth;
    	$total = $startPriceOld+$saveMoney;


    }
    return [$month,round($total-$newCar)];
}


var_dump(nbMonths(2000, 8000, 1000, 1.5));
nbMonths(2000, 8000, 1000, 1.5);// [6, 766]
nbMonths(12000, 8000, 1000, 1.5);//[0, 4000]
nbMonths(8000, 12000, 500, 1);//[8, 597]
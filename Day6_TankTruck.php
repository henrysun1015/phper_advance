<?php







//L =4vt / (pi()*pow(d,)
//h=5, d=7, vt = 3848 2940
//面积【rl-c(r-h)】/2
//l(弧长)=2*arccos((r-h)/r)*r
//c(弦长)=2*√r^2-(r-h)^2

function tankvol($h, $d, $vt) {
    // your code
    $r = $d/2;
    $l_y = 2*acos(($r-$h)/$r)*$r;
    $c = 2*pow(($r*$r-($r-$h)*($r-$h)), 1/2);
    $len = 4*$vt/(pi()*pow($d,2));
    $mj=($r*$l_y-$c*($r-$h))/2;
    return floor($mj*$len) ;
}

echo tankvol(5,7,3848);//2940
echo tankvol(40,120,3500) ;//should return 1021
echo tankvol(60,120,3500) ;//should return 1750
echo tankvol(80,120,3500) ;//should return 2478
<?php
function gap($g, $m, $n) {
    // your code
    $start = 0;
    for($i=$m;$i<=$n;$i++){
    	if(isPrime($i)){
    		if(($i-$start)==$g){
    			return [$start,$i];
    		}else{
    			$start = $i;
    		}
    	}
    }
}

function isPrime($num) {
		if($num==2 || $num==3) {
			return true;
		}
		if($num%6!=1 && $num%6!=5) {
			return false;
		}

		for($i=5; $i<=sqrt($num); $i+=6) {
			if($num%$i==0 || $num%($i+2)==0) {
				return false;
			}
		}
		return true;
}

var_dump(gap(2,100,110)); //[101, 103]);
var_dump(gap(4,100,110)); //[103, 107]);
var_dump(gap(6,100,110)); //null);
var_dump(gap(8,300,400)); //[359, 367]);
var_dump(gap(10,300,400)); // [337, 347]);

/**

一个关于质数分布的规律：大于等于5的质数一定和6的倍数相邻，例如5和7，11和13,17和19等等。

证明：令x≥1，将大于等于5的自然数表示如下：
······ 6x-1，6x，6x+1，6x+2，6x+3，6x+4，6x+5，6(x+1），6(x+1)+1 ······

可以看到，不在6的倍数两侧，即6x两侧的数为6x+2，6x+3，6x+4，由于2(3x+1)，3(2x+1)，2(3x+2)，
所以它们一定不是素数，再除去6x本身，显然，素数要出现只可能出现在6x的相邻两侧。

另外，一个数若可以进行因数分解，那么分解时得到的两个数一定是一个小于等于sqrt(n)，一个大于等于sqrt(n)，据此，上述代码中并不需要遍历到n-1，遍历到sqrt(n)即可，因为若sqrt(n)左侧找不到约数，那么右侧也一定找不到约数。

**/
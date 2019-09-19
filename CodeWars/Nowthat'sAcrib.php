<?php
/**
 * @Purpose:
 * @CreateDate: 2019/9/19 17:57
 * @Author:shr26207 sunhaoran@offcn.com
 */
function my_crib($n): string {
	$crib = str_repeat(' ',2*$n).str_repeat ('_',2*$n+1).str_repeat(' ',2*$n)."\n";;
	$wight = $n*6+1;
	for($i=1;$i<4*$n;$i++){
		if($i<=2*$n){
			$crib .= str_repeat(' ',2*$n-$i).'/'.str_repeat ('_',2*($n+$i)-1).'\\'.str_repeat(' ',2*$n-$i)."\n";
		}elseif($i<3*$n){
			$crib .=  '|'.str_repeat (' ',$wight-2).'|'."\n";
		}elseif($i==3*$n){
			$crib .=  '|'.str_repeat (' ',2*$n).str_repeat ('_',2*$n-1).str_repeat (' ',2*$n).'|'."\n";
		}else{
			$crib .=  '|'.str_repeat (' ',2*$n-1).'|'.str_repeat (' ',2*$n-1).'|'.str_repeat (' ',2*$n-1).'|'."\n";
		}
	}
	$crib .=  '|'.str_repeat ('_',2*$n-1).'|'.str_repeat ('_',2*$n-1).'|'.str_repeat ('_',2*$n-1).'|';
	return $crib;
}
echo my_crib(1);
echo PHP_EOL;
print_r("  ___  \n /___\\ \n/_____\\\n|  _  |\n|_|_|_|");
echo PHP_EOL;
echo my_crib(2);
echo PHP_EOL;
print_r("    _____    \n   /_____\\   \n  /_______\\  \n /_________\\ \n/___________\\\n|           |\n|    ___    |\n|   |   |   |\n|___|___|___|");
echo PHP_EOL;
echo my_crib(3);
echo PHP_EOL;
print_r("      _______      \n     /_______\\     \n    /_________\\    \n   /___________\\   \n  /_____________\\  \n /_______________\\ \n/_________________\\\n|                 |\n|                 |\n|      _____      |\n|     |     |     |\n|     |     |     |\n|_____|_____|_____|");

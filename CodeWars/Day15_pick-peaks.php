<?php
function pickPeaks(array $arr) {
    // Replace with your code
    $ret = array('pos'=>[],'peaks'=>[]);
    $start_k = $start_v = 0;
    $sw = false;
    foreach($arr as $key=>$val){
        if(isset($arr[$key-1]) && isset($arr[$key+1])){
            if($val>$arr[$key-1]){
                 $sw = true;
                 $start_k = $key;
                 $start_v = $val;
            }
            if($sw && $val>$arr[$key+1]){
              $ret['pos'][] = $start_k;
              $ret['peaks'][] = $start_v;
              $start_k = $start_v = 0;
              $sw = false;
            }
        }
    }
    return $ret;
}
pickPeaks([3, 2, 3, 6, 4, 1, 2, 3, 2, 1, 2, 3]);//should return {pos: [3, 7], peaks: [6, 3]}
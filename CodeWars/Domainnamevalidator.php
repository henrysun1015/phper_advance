<?php
/**
 * @Purpose:
 * @CreateDate: 2019/9/19 19:06
 * @Author:shr26207 sunhaoran@offcn.com
 */

function validate($domain) {
	var_dump($domain);
	if(strlen($domain)>253) return false;
	$arr = explode('.',$domain);
	$count = count($arr);
	if($count>127 || $count<2){
		return false;
	}

	foreach ($arr as $k=>$item) {
		$l = strlen($item);
		if($l>63 || $l<1){
			return false;
		}
		if($item{0}=='-' || $item{$l-1}=='-'){
			return false;
		}
		if($k==0){
			$regex = '/^[a-zA-Z0-9][a-zA-Z0-9-]*$/';
		}elseif($k==$count-1){
			$regex = '/^[a-zA-Z0-9\-]*[a-zA-Z0-9]$/';
			if(preg_match('/^\d*$/',$item)){
				return false;
			}
		}else{
			$regex = '/^[a-zA-Z0-9\-]*$/';
		}
		if(false==preg_match($regex,$item)){
			return false;
		}

	}
	return true;
}
var_dump(validate('example@codewars.com'));
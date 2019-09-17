<?php
/**
 * @Purpose:https://leetcode-cn.com/problems/add-two-numbers/
 * @CreateDate: 2019/9/17 11:46
 * @Author:shr26207 sunhaoran@offcn.com
 */
/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val) { $this->val = $val; }
 * }
 */
class ListNode {
	public $val = 0;
	public $next = null;
	function __construct($val) { $this->val = $val; }
}
class Solution {

	/**
	 * @param ListNode $l1
	 * @param ListNode $l2
	 * @return ListNode
	 */
	function addTwoNumbers($l1, $l2) {
		$sum = new ListNode(NULL);
		$next_node = &$sum;
		$add = 0;
		while (1){
			if(is_null($l1) && is_null($l2) && $add==0){
				break;
			}
			$node_sum = $l1->val+$l2->val+$add;
			if(is_null($sum->val)){
				$sum->val = $node_sum%10;
			}else{
				$next_node->next = new ListNode($node_sum%10);
				$next_node = &$next_node->next;
			}
			$add = floor($node_sum/10);
			$l1 = $l1->next;
			$l2 = $l2->next;
		}
		return $sum;
	}
}
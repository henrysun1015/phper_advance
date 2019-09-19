<?php
/**
 * @Purpose:https://leetcode-cn.com/problems/median-of-two-sorted-arrays/
给定两个大小为 m 和 n 的有序数组 nums1 和 nums2。

请你找出这两个有序数组的中位数，并且要求算法的时间复杂度为 O(log(m + n))。

你可以假设 nums1 和 nums2 不会同时为空。

 * @CreateDate: 2019/9/18 9:28
 * @Author:shr26207 sunhaoran@offcn.com
 */
class Solution {

	/**
	 * @param Integer[] $nums1
	 * @param Integer[] $nums2
	 * @return Float
	 */
	function findMedianSortedArrays($nums1, $nums2) {
		$arr = array();
		if(empty($nums1) || empty($nums2)){
			$arr = empty($nums1)?$nums2:$nums1;
		}else{
			$len_1 = count($nums1);
			$len_2 = count($nums2);
			for ($i = 0, $j = 0; $i < $len_1&&$j < $len_2;){
				if ($nums1[$i] < $nums2[$j])
				{
					$arr[] = $nums1[$i];
					$i++;
				}else{
					$arr[] = $nums2[$j];
					$j++;
				}
			}
			while ($i < $len_1)
			{
				$arr[] = $nums1[$i++];
			}
			while ($j < $len_2)
			{
				$arr[] = $nums2[$j++];
			}
		}
		$len = count($arr);
		if ($len% 2 == 0){
			return ($arr[$len / 2] + $arr[$len / 2 - 1]) / 2;
		}else{
			return floatval($arr[$len / 2]);
		}
	}
}

$m = new Solution();

echo $m->findMedianSortedArrays( [1, 3],[2]);echo PHP_EOL;
echo $m->findMedianSortedArrays( [1, 2],[3,4]);echo PHP_EOL;

/*
float median(vector<int>& nums1,vector<int>& nums2 )
{
    int x1 = nums1.size();
    int x2 = nums2.size();
    if (nums1.empty())
    {
        if (nums2.size() % 2 == 0)
            return (nums2[x2 / 2] + nums2[x2 / 2 - 1]) / 2;
        if (nums2.size() % 2 != 0)
            return nums2[x2 / 2];
    }
    if (nums2.empty())
    {
        if (nums1.size() % 2 == 0)
            return (nums1[x1 / 2] + nums2[x1 / 2 - 1]) / 2;
        if (nums1.size() % 2 != 0)
            return nums1[x1 / 2];
    }
    //归并排序
    vector<int>c;
    int i, j, k;//分别为nums1,nums2,c的下标
    for (i = 0, j = 0; i < x1&&j < x2;)
    {
        if (nums1[i] < nums2[j])
        {
            c.push_back(nums1[i]);
            i++;
        }
        else
            c.push_back(nums2[j++]);
    }
    while (i < x1)
    {
        c.push_back(nums1[i++]);
    }
    while (j < x2)
    {
        c.push_back(nums2[j++]);
    }
    int k = c.size();
    if (k% 2 == 0)
        return (c[k / 2] + nums2[k - 1]) / 2;
    if (k % 2 != 0)
        return nums1[k / 2];
//归并排序，顺便求了中位数
}
*/
<?php
/*
You are given two integer arrays nums1 and nums2, sorted in non-decreasing order,
 and two integers m and n,
 representing the number of elements in nums1 and nums2 respectively.
 */
class MergeSortedArray{
    function merge(&$numbers1, $m, $numbers2, $n) {
           $indexNumber1 = $m-1;
           $indexNumber2 = $n-1;
           $indexNewArray = $m + $n -1;
           while($indexNumber1 >= 0 && $indexNumber2 >= 0){
                if($numbers1[$indexNumber1] > $numbers2[$indexNumber2]){
                    $numbers1[$indexNewArray--] = $numbers1[$indexNumber1--];
                }else{
                    $numbers1[$indexNewArray--] = $numbers2[$indexNumber2--];
                }
           }
           while($indexNumber2 >= 0){
                $numbers1[$indexNewArray--] = $numbers2[$indexNumber2--];
           }
           return $numbers1;
    }
}
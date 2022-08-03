<?php
/* Given an integer array nums, find the contiguous subarray (containing at least one number)
     which has the largest sum and return its sum.
*/
class MaxSubArray {
    function maxSubArray( array $numbers) {
        $maxSoFar = PHP_INT_MIN; 
        $maxEndingHere = 0;
        $size = count($numbers);
        for($i = 0; $i<$size; $i++){
            $maxEndingHere =  $maxEndingHere + $numbers[$i];
            if($maxEndingHere > $maxSoFar) $maxSoFar = $maxEndingHere;
            if($maxEndingHere < 0)$maxEndingHere = 0;
        }
        return $maxSoFar;
    }
}
<?php
class ContainsDuplicate {
    /*
    Given an integer array nums, return true if any value appears at least twice in the array,
    and return false if every element is distinct.
    */
    function containsDuplicate( array $numbers) {
        sort($numbers);
        $count = count($numbers);
        for($i =0;$i<$count-1; $i++){
            if($numbers[$i] == $numbers[$i+1]){
                return true;
                break;
            }
        }
        return false;
    }
}

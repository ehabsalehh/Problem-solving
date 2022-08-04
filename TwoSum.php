<?php
/* Given an array of integers nums and an integer target,
  return indices of the two numbers such that they add up to target
*/
class TwoSum {
    function twoSum( array $numbers,int $target):array {
        $size = count($numbers);
        $map =[];
        $result = []; 
        for($i = 0 ; $i < $size; $i++){
            if(in_array($numbers[$i],$map)){
                $result[0] = $i;
                $result[1] = array_search($numbers[$i],$map); 
            }else{
                array_push($map,$target - $numbers[$i]);
            }
        }
        return $result;
        
    }
}
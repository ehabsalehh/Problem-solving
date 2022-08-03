<?php
class IntersectionOfTwoArrays{
    function intersect($numbers1, $numbers2) {
        foreach($numbers1 as $key=> $number1){
            if(in_array($number1,$numbers2)){
                $interSectionArray[$key] = $number1;
            }
        }
        return $interSectionArray;       
    }
}
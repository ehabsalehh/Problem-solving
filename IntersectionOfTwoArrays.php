<?php
class IntersectionOfTwoArrays{
    function intersect($numbers1, $numbers2):array {
        $sizeNumbers1 = count($numbers1);
        $sizeNumbers2 = count($numbers2);
        $interSectionArray=[];
        $indexIntersectionNumbers = $indexNumbers1 = $indexNumbers2 = 0;
        sort($numbers1);
        sort($numbers2);
        while($indexNumbers1<$sizeNumbers1 && $indexNumbers2<$sizeNumbers2){
            if($numbers1[$indexNumbers1]<$numbers2[$indexNumbers2]){
                $indexNumbers1++;
            }elseif($numbers1[$indexNumbers1]>$numbers2[$indexNumbers2]){
                $indexNumbers2++;
            }else{
                $interSectionArray[$indexIntersectionNumbers++]=$numbers1[$indexNumbers1++];
                $indexNumbers2++;
            }
        }
        return $interSectionArray;       
    }
}
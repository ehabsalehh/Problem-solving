<?php 
class SearchA2DMatrix {
    function searchMatrix( array $matrix, int $target):bool {
        foreach($matrix as $arr) {
            if ( $target <= $arr[count($arr)-1] ) return array_search($target,$arr) !== false;
        }
        return false;
    }
    // another Solution

    //     $length = count($matrix);   
    //     $LengthColumns = count($matrix[0]);
    //     $findRowNumber = $length-1;
        
    //     for($r = 0 ; $r < $length -1; $r++){
    //         if($matrix[$r][0] == $target) return true;
    //         if($matrix[$r][0] < $target && $matrix[$r+1][0]> $target){
    //             $findRowNumber = $r; 
    //         }
    //     }
    //     for($c = 1 ; $c < $LengthColumns ; $c++ ){
    //         if($matrix[$findRowNumber][$c] == $target) return true;
    //     }
    //     return false;
    // }
}
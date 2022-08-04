<?php
class ReshapeTheMatrix {
    function matrixReshape(array $mat, int $NumberOfRows, int $NumberOfColumn): array
    {
        $rowLength = count($mat);
        $columnLength = count($mat[0]);
        if($NumberOfRows * $NumberOfColumn !== $rowLength * $columnLength) return $mat;
        $rowIndex = $columnIndex =  0;
        $shape = [$NumberOfRows][$NumberOfColumn]; 
        for($i = 0;$i < $rowLength; $i++){
            for($j = 0; $j < $columnLength; $j++){
                $shape[$rowIndex][$columnIndex++] = $mat[$i][$j];
                if($columnIndex == $NumberOfColumn){
                    $columnIndex = 0;
                    $rowIndex++;
                }
            }
        }
        return $shape;
    }
}
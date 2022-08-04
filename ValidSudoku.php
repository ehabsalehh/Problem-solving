<?php
/*
Determine if a Sudoku board is valid.
Only the filled cells need to be validated according to the following rules:
Each row must contain the digits 1-9 without repetition.
Each column must contain the digits 1-9 without repetition.
Each of the nine 3 x 3 sub-boxes of the grid must contain the digits 1-9 without repetition.
*/
class ValidSudoku{
    function isValidSudoku($board):bool {
        $array = [];
        $length = count($board);
        for($r = 0 ; $r < $length; $r++){
            for($c =0 ;$c < $length; $c++){
                $cell =$board[$r][$c];
                if($cell == ".") continue;
                if(
                    in_array($cell."_found_in_r_".$r, $array) ||
                    in_array($cell."_found_in_c_".$c, $array) ||
                    in_array($cell."_found_in_b_".floor($r/3).floor($c/3), $array))
                        return false;
               array_push($array, $cell."_found_in_r_".$r,
                        $cell."_found_in_c_".$c,
                        $cell."_found_in_b_".floor($r/3).floor($c/3));
            }
        }
        return true;
    }
}
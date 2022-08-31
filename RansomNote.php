<?php
class RansomNote{
/*
Given two strings ransomNote and magazine,
return true if ransomNote can be constructed by using the letters from magazine and false otherwise.
Each letter in magazine can only be used once in ransomNote.
*/
    function canConstruct($ransomNote, $magazine) {
        $magazineLength =  strlen($magazine);
        $ransomNoteLength = strlen($ransomNote);
        $constructArray = array_fill(0,26,0);
        for($i =0; $i<$magazineLength; $i++){
            $constructArray[ord($magazine[$i])- ord('a')]++;
        }
        for($i = 0; $i < $ransomNoteLength; $i++){
            if(--$constructArray[ord($ransomNote[$i])- ord('a')] <0) return false;
        }
        return true;

        // another Solution
        // $magazineLength =  strlen($magazine);
        // $ransomNoteLength = strlen($ransomNote);
        // $constructArray = [];
        // for($i =0; $i<$magazineLength; $i++){
        //     if(!isset($constructArray[$magazine[$i]])){
        //         $constructArray[$magazine[$i]] = 0; 
        //     } 
        //     $constructArray[$magazine[$i]]++;
        // }
        // for($i = 0; $i < $ransomNoteLength; $i++){
        //     if($constructArray[$ransomNote[$i]]-- ==0) return false;
        // }
        // return true;
    }
}
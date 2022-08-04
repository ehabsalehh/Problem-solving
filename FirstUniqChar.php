<?php
class firstUniqChar {
    function firstUniqChar($s) {
        $new = array_fill(0, 26, 0);
        $l = strlen($s);
        for($i=0; $i<$l; $i++){
            $new[ord($s[$i]) - ord('a')]++;
                
        }
        for($i=0; $i<$l; $i++){
             if($new[ord($s[$i]) - ord('a')]==1){
                 return $i;
             }
        }
        return -1;
        // another Solution        
        // $repatedTimes = array_count_values(str_split($s));
        // if (! $char = array_search(1, $repatedTimes)) return -1;
        // return strpos($s, $char);
    }
}
<?php
class MaxProfit{
/*
You are given an array prices where prices[i] is the price of a given stock on the ith day.
You want to maximize your profit by choosing a single day to buy one stock and choosing a different day in the future to sell that stock.
Return the maximum profit you can achieve from this transaction. If you cannot achieve any profit, return 0
*/
    function maxProfit( array $prices) {
        $size = count($prices);
         if ($size < 2) return 0;
         $buy = $prices[0];
         $maxProfit = 0;
         for($i = 1 ; $i < $size; $i++){
             if($buy > $prices[$i]){
                 $buy = $prices[$i];
             }elseif($prices[$i] - $buy > $maxProfit){
                 $maxProfit = $prices[$i] - $buy;
             }
         }
         return $maxProfit;
     }
    
}
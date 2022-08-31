<?php
/**
 * Definition for a singly-linked list->
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val) { $this->val = $val; }
 * }
 */
class LinkedListCycle{
    /**
     * @param ListNode $head
     * @return Boolean
     */
    function hasCycle($head) {
        $slowPointer = $head;
        $fastPointer = $head;
 
      while ($slowPointer != null && $fastPointer != null && $fastPointer->next != null)
      {
        $slowPointer = $slowPointer->next;
        $fastPointer = $fastPointer->next->next;
        if ($slowPointer == $fastPointer)
          return true;
      }
      return false;
    }
    // function hasCycle($head) {
    //     if($head == null) return false;
    //     $hasCycle = [];
    //     while($head != null){
    //         if(in_array($head,$hasCycle))return true;
    //         $hasCycle[] = $head;
    //         $head = $head->next; 
    //     }
    //     return false;
    // }
    
    // function hasCycle($head) {
//     while($head != null){
//             if($head->val == "found"){
//                 return true;
//             }
//             $head->val = "found";  
            
//             $head= $head->next;
//         }
//         return false;
        
//     }
  }

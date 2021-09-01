<?php

class Node{
    public $value;
    public $next;
}
class LinkList{
    public $head;
    public function __construct()
    {
        $this->head= null;
    }
    public function create($data)
    {
        $newNode = new Node();
        $newNode->value = $data;
        $newNode->next= null;
        if($this->head == null){
            $this->head = $newNode;
        }else{
            $temp = $this->head;
            while($temp->next != null){
                $temp = $temp->next;
            }
            $temp->next = $newNode;
        }
    }
    public function printList()
    {
        $temp = $this->head;
        while($temp != null){
            echo $temp->value.'->';
            $temp = $temp->next;
        }
    }
    public function midpoint(){
        $tempi = $this->head;
        $tempj = $this->head;
        while( $tempj!= null && $tempj->next != null){
            $tempi = $tempi->next;
            $tempj = $tempj->next->next;
        }
       // echo $tempi->value;
    //    echo gettype($tempi) ;
    return $tempi;
    }
    public function reverse($mid){
        $prev = null;
        $curr = $this->head;
        $next = null;
        while($curr != $mid ){
            $next = $curr->next;
            $curr->next = $prev;
            $prev = $curr;
            $curr = $next;
        }
        return $this->head = $prev;
        
    }

    public function palindrom($mid)
    {
        $left = $this->head;
        // echo 'left('.$curr->value.')';
       
        if($left != null && $mid->next != null){
            $midNext = $mid->next;
            while($midNext){
                if($midNext->value == $left->value){
                    $midNext = $midNext->next;
                    $curr = $left->next;
                }else{
                    return false;
                }
                
            }
        
          return true;
        }else if($left != null && $mid->next == null){
            if($left == $mid){
                return true;
            }else{
                return false;
            }
        }
           
    }
}

$myList = new LinkList();
$myList->create('a');
$myList->create('n'); 
// $myList->create('m');
// $myList->create('m');
// $myList->create('a');
// $myList->create('n');
//$myList->printList();
$mid = $myList->midpoint();
//echo 'mid==>'.$mid->value.'<br/>';
  $myList->reverse($mid);
  $myList->printList();
  $result = $myList->palindrom($mid);
   echo $result;
//$xyz = &$myList;

//$myList->reverse1($myList->head);
//echo '<br/>++++++=>'.$xyz->head->value.'<br/>';
//echo '<br/>';
//$myList->printList();
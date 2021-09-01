<?php

use LinkList as GlobalLinkList;

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
    public function reverse()
    {
        $prev = null;
        $cur = $this->head;
        $next =  null;
        while($cur != null){
            $next = $cur->next;
            $cur->next = $prev;
            $prev = $cur;
            $cur = $next;
        }
        $this->head = $prev;
    }
    
    public function reverse1(Node &$head){
        $prev = null;
        $cur = $head;
        $next =  null;
        while($cur != null){
            
            $next = $cur->next;
            $cur->next = $prev;
            $prev = $cur;
            $cur = $next;
           
        }
        $head = $prev;
        $temp = $head;
        while($temp!=null){
            echo '<br/>=> v'.$temp->value;
            $temp = $temp->next;
       }
        //echo '<br/>=>'.$head->value.'<br/>';
    }
    public function midPoint()
    {
        if($this->head != null && $this->head->next !=null){
            $temp = $this->head;
            $tempX = $this->head;
            while($tempX != null && $tempX->next != null){
                $temp = $temp->next;
                $tempX = $tempX->next->next;
            }
            echo '<br/>Midvalue='.$temp->value;
        }else{
            echo 'Mid point not exist';
        }
    }
    public function deleteLinkList($data)
    {
        $prev = null;
        $curr = $this->head;
        while($curr){
            $prev = $curr;
            $curr = $curr->next;
            if($prev == $this->head && $prev->value == $data){
                $this->head = $curr;
                return;
            }else if($curr->value == $data){
                $prev->next = $curr->next;
                return;
            }
        }
    }
    public function checkLoop()
    {
        $slow = $this->head;
        $fast = $this->head;
        while($fast  && $fast->next ){
            $slow = $slow->next; 
            $fast = $fast->next->next; 
            if($slow == $fast){
                echo 'loop exist';
                return;
            }
        }
        echo 'Loop doesnot exist';
    }

}

$myList = new LinkList();
$myList->create(10);
$myList->create(20);
$myList->create(30);
$myList->create(40);
$myList->printList();
$xyz = &$myList;

$myList->reverse1($myList->head);
//echo '<br/>++++++=>'.$xyz->head->value.'<br/>';
echo '<br/>';
$myList->printList();
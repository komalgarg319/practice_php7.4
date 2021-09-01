<?php
class Node{
    public $value;
    public $next;
}
class linkList{
    public $head;
    public function __construct()
    {
        $this->head = null;
    }

    public function pushBack($data)
    {
        $newnode = new Node();
        $newnode->value = $data;
        $newnode->next = null;
        
        if($this->head == null){
           $this->head = $newnode;
        }else{
            $temp = new Node();
            $temp = $this->head;
            while($temp->next != null){
                $temp= $temp->next;
                
            }
            //if($temp->next == null){
                $temp->next = $newnode;
               
            //}
        }
    }
    public function printList() {
        $temp = new Node();
        $temp = $this->head;
        if($temp != null) {
          
          while($temp != null) {
            echo $temp->value." ";
            $temp = $temp->next;
          }
          echo "\n";
        } else {
          echo "The list is empty.\n";
        }
      }   
    public function count()
    {
        # code...
    }
    public function reverse()
    {
        # code...
    }
}

$mylist = new linkList();
$mylist->pushBack(10);
$mylist->pushBack(20);
$mylist->pushBack(90);
$mylist->printList();
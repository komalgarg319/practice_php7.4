<?php
class Node{
    public $value;
    public $next;
}
class LinkList{
    public $head;
    // public function __construct()
    // {
    //     $this->head = null;
    // }
    public function printLinkList()
    {
        $temp = new Node();
        $temp = $this->head;
        if($temp != null){
            while($temp != null){
                echo $temp->value.'<br/>';
                $temp = $temp->next;
            }
        }else{
            echo 'list is empty';
        }
    }
}

$first = new Node();
$first->value = 10;
$first->next = null;
$second = new Node();
$second->value = 20;
$second->next = null;
$first->next = $second;
$third = new Node();
$third->value = 30;
$third->next = null;
$second->next = $third;

$myList = new LinkList();
$myList->head = $first;
$myList->printLinkList();
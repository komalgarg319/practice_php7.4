<?php 
class AAA{
    public function eat()
    {
        echo 'parent';
    }
}
class B extends AAA{
    public function eat()
    {
        echo 'child';
    }
}
$obj = new B;
$obj->eat();
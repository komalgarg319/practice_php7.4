<?php 

class Person {
    public $name = "komal";
   public Address $a;
}

class Address{
    public $firstLine="gulshan";
}

$p1 = new Person();
$p1->a = new Address();
$p2 = clone $p1;
$p2->name = 'vivek';
$p2->a->firstLine = "ikebana";
echo $p1->name.' '.$p1->a->firstLine; //vivek ikebana

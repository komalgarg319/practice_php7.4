<?php


abstract class MyAbstractClass1
{
    abstract public function read();
    public function write(){
        echo "write something in ".__CLASS__."\n";
    }

}
abstract class MyAbstractClass2
{
    abstract public function read();
    public function write(){
        echo "write something in ".__CLASS__."\n";
    }

}
interface MyInterface1
{
    function add();
}
interface MyInterface2
{
    function multiply();
}
//we can implement multiple inheritance using Interface
class MyClass1 implements MyInterface1,MyInterface2
{
    function add()
    {
        echo "add something in ".__CLASS__."\n";
    }
    public function multiply()
    {
        echo "multiply something in ".__CLASS__."\n";
    }

}

//we can't implement multiple inheritance using Abstract class
class MyClass2 extends MyAbstractClass1
{
    public function read()
    {
        echo "read something in ".__CLASS__."\n";
    }
}
$obj1 = new MyClass1();
$obj2 = new MyClass2();
$obj1->add();
$obj1->multiply();
$obj2->read();
$obj2->write();
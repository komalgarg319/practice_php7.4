<?php

class Foo
{
    var $that;

// public function __clone()
// {
//     $this->that = clone $this->that;
// }

}

$a = new Foo();
$b = new Foo();
$a->that = $b;
$b->that = $a;

$c = clone $a;
echo 'What happened?';
echo '<pre>';print_r(var_dump($c));echo '</pre>';
// class A {
//     public $foo = 1;
// }  
// $e = 10;

// foo($e);
// function foo( &$obj) {
//     // ($obj) = ($e) = <id>
//     $obj = 2;
//     echo $obj."\n";
// }
// echo $e."\n";

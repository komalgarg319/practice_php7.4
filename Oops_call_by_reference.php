<?php
class A {
    public $foo = 1;
}  

class B {
    public function foo(A $bar)
    {
        $bar->foo = 42;
    }
    
    public function bar(A $bar)
    {
        $bar = new A;
    }
}

$f = new A;
$g = new B;
echo $f->foo . "\n";//1

$g->foo($f);
echo $f->foo . "\n";

$g->bar($f);
echo $f->foo . "\n";

?>

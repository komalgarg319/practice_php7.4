<?php  
interface A{
 function area($a,$b);
}

class C implements A{
    public function __constructor(){

    }
    public function area($base,$height)
    {
        echo ($base*$height)/2;
    }
}
$obj = new C;
$obj->area(2,3);
class X{
    public function FunctionName()
    {
        echo 'hello';
    }
    public function FunctionName($a)
    {
        echo $a;
    }
}
?>  
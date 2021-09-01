<?php
/*
 * call by reference
 */

//$i = 10;
//function add($i){
//    $i++;
//}
//add($i);
//echo $i;

/*
 * call by value
 */
$i = 10;
function add(&$i){
    $i++;
}
add($i);
echo $i;

$arr = array("a"=>"small","b"=>"large","c"=>"medium");
$arr = array_reverse($arr);
print_r($arr);


/** intervie qustion */
$a = 1;
$b = $a;

echo 'statement1:'.$a. '---' .$b."<br/>";
$b = "2 $a";
//echo nl2br("");
echo 'statement2:'.$a. ' ' .$b."<br/>";
//die;
/** intervie qustion */
echo '=======================================<br/>';

class Atest{
   public $var = 'a';
   public function my(Atest $tt)
    {
         $tt->var = "poti909";
    }
}
class Btest{
    public $var = 'b';
 }
 $aa = new Atest();//a
 echo $aa->var."<br/>";
 $aa->my($aa);
 echo $aa->var."<br/>";//poti
 //$aa->my($aa);
 //$bb =  $aa;
 //$bb->var = 'C';
//  echo $aa->var;

 

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
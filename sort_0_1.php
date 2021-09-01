<?php
function sort_array($arr){
    $j= 0;
    for($i=0;$i<sizeof($arr);$i++){
        if($arr[$i] == 0){
            $arr = swap($arr,$i,$j);
            $j++;
        }
    }
    print_r($arr);
}
function swap($arr,$i,$j){
    $temp = $arr[$i];
    $arr[$i] = $arr[$j];
    $arr[$j] = $temp;
    return $arr;
}
$input = array(1,0,1,0,1,0,1,1);
sort_array($input);
<?php
// $string = "this is a test sentence";
// $string = str_replace(" ","",$string);
// $arry = (str_split($string));
// sort($arry);
// //print_r($arry);
// // $arry = array_count_values($arry);
// // //print_r($arry);
// // $string = '';
// // foreach($arry as $key=>$val){
// //     $string .= $key.$val;
// // }
// // echo $string ;

// $count = [];
// foreach($arry as $key=>$val){
//     if(!isset($count[$val])){
//         $count[$val] = 0;
//     }
//     $count[$val]++;
// }
// print_r($count);
// echo '==============';

// $count = [];
// for($i=0;$i<count($arry);$i++){
//     if(isset($count[$arry[$i]])){
//         $count[$arry[$i]] = $count[$arry[$i]] +1;
//     }
//     else{
//         $count[$arry[$i]] = 1;
//     }
// }
// print_r($count);



$string = "this is a test sentence";
$string = str_replace(" ","",$string);
$arr = array();
for($i=0;$i<strlen($string);$i++){
    if(isset($arr[$string[$i]])){
        $arr[$string[$i]] ++;
    }else{
        $arr[$string[$i]] = 1;
    }
}
ksort($arr);
print_r($arr);
<?php
// $var = "null";

// echo isset($var);
// $var1 = "null";
// var_dump(!empty($var1));
// class typeCasting{
//     public function sum(int $a, int $b)
//     {

//         $arry = array('1');
//         //return strval($a+$b);
//         try{dae();
//            // echo 10/0;
//            //dae();
//             if($a+$b < 10){
//                 var_dump((int)("hjgjg")) ;
//                 echo 'try';
//             }else{
//                 throw new Error("this value should be less then 10");
//             }
//         }
//         catch(Error $ex){
//             echo 'catch';
//           echo   $ex->getMessage();
            
//         }
//     }
    
// }
// $obj = new typeCasting();
// echo $obj->sum(5,5);
$data = unserialize($foo, ["allowed_classes" => ["MyClass", "MyClass2"]]);
print_r($data);




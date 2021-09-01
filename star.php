<?php
// for($i=0;$i<5;$i++){
//     for($j=$i;$j>=0;$j--){
//         echo '*';
//     }
//     echo "\n";
// }
$n = 3;
for($i=0;$i<$n;$i++){
    for($j=$n-1;$j>$i;$j--){
        echo '_';
        
    }
    for($k=1;$k<=2*$i+1;$k++){
        echo '*';
    }
    echo "\n";
   
}
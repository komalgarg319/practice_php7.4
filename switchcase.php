<?php
$num = 200;
switch($num){
case 10:
    echo 'hello';
    break;
    case 20:
        echo 'byew';
        break;
        default:
        echo 'default';
}

$i = 1;
while($i<5){
echo $i.'<br/>';
$i++;
}

$j = 8;
do{
    echo 'must print';
    $j++;
}while($j<10);
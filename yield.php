<?php 

function fruits(){
    yield 'apple';
    yield from rarefuits();
    yield 'banana';
    return 'fruits';
}
function rarefuits(){
    yield 'avocado';
    yield 'ice apple';
}
function arrayYield(){
    yield 'Name' => 'Komal';
    yield 'last name' => 'Garg';
}
$obj = fruits();
foreach($obj as $fruit){
    echo $fruit .'<br/>';
}
echo 'All are my fav '.$obj->getReturn(); 

$arrObj = arrayYield();
foreach($arrObj as $key=>$val){
    echo $key.'=>'.$val.'<br/>';
}
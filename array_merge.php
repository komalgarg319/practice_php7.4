<?php
$array1 = ['judas', 'john', 'michael'];    
$array2 = ['fernando', 'jsamine', 'sam', 'walter'];
$array3 = ['judas', 'john', 'mike', 'steve'];

$all_arrays = [$array1, $array2, $array3];
$merged = [];
for ($i = 0; $i < 3; $i++) {
    $arr = $all_arrays[$i];
    $x = count($arr);
    for ($j=0; $j < $x; $j++) { 
        // Using the value as the key in the merged array ensures 
        // that you will end up with distinct values.
       $merged[$arr[$j]] = 1;
    }
}
print_r(array_keys($merged));
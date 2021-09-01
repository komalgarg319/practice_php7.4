<?php
function majorityElement($a,$n){
    //max value from array
    $mIndex = 0;
    $count = 1;
    for($i=1;$i<$n;$i++){
        if($a[$i] == $a[$mIndex]){
            $count++;
        }else{
            $count--;
            if($count == 0){
                //Reset 
                $count = 1;  
                $mIndex = $i;
            }
        }
    }
    $maxValue =  $a[$mIndex];
    //get coun of above maxValue in array
    $c = 0;//count of maxvalue in array
    for($j=0;$j<$n;$j++){
        if($a[$j] == $maxValue){
            $c++;
        }
    }
     $maxValueCount = $c;
     //check whether this max value is majority in array
     if($maxValueCount>$n/2){
        return  $maxValue; 
     }else{
         return -1;
     }

}
$arr = array(1, 1, 2, 1, 3, 5, 1);   //array(1, 1, 2, 1, 3, 5, 1, 8);
$n = sizeof($arr);
print_r(majorityElement($arr,$n));

/*function findMajority($arr, $n)
{
    $maxCount = 0;
    $index = -1; // sentinels
    for($i = 0; $i < $n; $i++)
    {
        $count = 0;
        for($j = 0; $j < $n; $j++)
        {
            if($arr[$i] == $arr[$j])
            $count++;
        }
         
        // update maxCount if count of
        // current element is greater
        if($count > $maxCount)
        {
            $maxCount = $count;
            $index = $i;
        }
    }
     
    // if maxCount is greater than n/2
    // return the corresponding element
    if ($maxCount > $n/2)
        echo $arr[$index] . "\n";
    else
        echo "No Majority Element" . "\n";
}
 
// Driver code
$arr = array(1, 1, 2, 1, 3, 5, 1);
$n = sizeof($arr);
     
// Function calling
findMajority($arr, $n);
 
// This code is contributed*/

 $x = '0';
echo '==='.!empty($x);
//echo isset($x);

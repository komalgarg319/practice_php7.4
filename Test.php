<?php
//$conn = mysqli_connect("locahost","root","","test") or die("Error " . mysqli_error($conn));
$conn = mysqli_connect("localhost","root","","test"); //or die('error-'.mysqli_error($conn));
// Check for valid connection
if (mysqli_connect_errno())
{
echo "Unable to connect with MySQL: " . mysqli_connect_error();
}
// $result = mysqli_query($conn,"select * from cutomers");
// $results = mysqli_fetch_array($result,MYSQLI_ASSOC);
// print_r($results);
$result=mysqli_query($conn,"select * from customers");
//$rows=mysqli_fetch_array($result,MYSQLI_ASSOC);
if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_object($result)){
echo '<pre>';print_r($row->id);echo '</pre>';
    }
}

echo 'helo'.'<br/>';
print "Java Developer"."<br/>";
$varr = print('hello').'<br/>';
echo $varr;

define('abc',134);
echo abc;
$languages = array("C#", "Java", "PHP", "VB.Net");
echo '--'.in_array("PHP", $languages);


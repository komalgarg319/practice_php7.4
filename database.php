<?php
$conn = mysqli_connect('localhost','root','','test');
if(!$conn){
    die(mysqli_connect_errno());
}else{
    echo "Connected successfully \n";
}
//create database
//$sql = 'create database mytestdb';
//if(!(mysqli_query($conn,$sql))){
//    echo mysqli_error($conn)."\n";
//}else{
//    echo "Database mydb created successfully.\n";
//}


//create table
//$sql = 'create table mytable(id INT AUTO_INCREMENT,name VARCHAR(50) NOT NULL,
//salary INT NOT NULL,primary key(id))';
//if(mysqli_query($conn,$sql)){
//    echo "table created \n";
//}else{
//    echo mysqli_error($conn);
//}

//insert into table
//$sql = 'insert into mytable(name,salary) values ("Komal",1200000)';
//if(mysqli_query($conn,$sql)){
//    echo 'data inserted successfully';
//}else{
//    echo mysqli_error($conn)."\n";
//}

//update query
$sql = 'update employee set name="Vivek90" where id=1';
if(mysqli_query($conn,$sql)){
   echo "update successfully";
}else{
   echo mysqli_error($conn);
}

//delete record
//$sql = 'delete from mytable where name="komal"';
//if(mysqli_query($conn,$sql)){
//    echo "delete successfully";
//}else{
//    echo mysqli_error($conn);
//}

//select data
//$sql = 'select * from mytable order by name';
//$result = (mysqli_query($conn,$sql));
//if(mysqli_num_rows($result)>0){
//    while($rows= mysqli_fetch_assoc($result)){
//        echo "id={$rows['id']}, name=$rows[name] \n";
//    }
//}else{
//    echo "0 results";
//}

//select single value
//$sql = 'select name from mytable where id=4';
//$result = (mysqli_query($conn,$sql));
//if(mysqli_num_rows($result)>0){
//    while($rows= mysqli_fetch_assoc($result)){
//        echo "name=$rows[name] \n";
//    }
//}else{
//    echo "0 results";
//}

//join
//$sql = 'select orders.OrderID, customers.CustomerName
//        from orders FULL JOIN customers
//        on orders.CustomerID = customers.CustomerID';
//$sql='SELECT customers.CustomerName, orders.OrderID
//FROM customers
//LEFT JOIN orders ON customers.CustomerID=orders.CustomerID
//UNION
//SELECT customers.CustomerName, orders.OrderID
//FROM customers
//RIGHT JOIN orders ON customers.CustomerID=orders.CustomerID';
//$result = (mysqli_query($conn,$sql));
//if(mysqli_num_rows($result)>0){
//    while($rows= mysqli_fetch_assoc($result)){
//        print_r($rows);echo "\n";
//    }
//}else{
//    echo "0 results";
//}

$sql = 'SELECT A.CustomerName As name1,B.CustomerName As name2 FROM customers A,customers B
       where A.CustomerID <> B.CustomerID And A.Country = B.Country';
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result)){
   //print_r(mysqli_fetch_assoc($result));
   while($rows = mysqli_fetch_assoc($result) ){
       echo $rows['name1'].'--'.$rows['name2']."\n";
   }
}


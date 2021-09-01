<?php
// class First_Class{
//     public function connction()
//     {
//        $conn =  mysqli_connect('localhost','root','','test') or die('error-'.mysqli_connect_error());
//         return $conn;
//     }
// }
// class Second_Class{
//     private $db;
//     public function __construct(First_Class $f)
//     {
//         $this->db = $f->connction();
//        // echo $this->db;
//     }
//     public function getcustomers()
//     {
//        $results =  mysqli_query($this->db,'select * from customers');
//        while($row = mysqli_fetch_assoc($results)){
//         echo $row['name'].'<br/>';
//        }
//     }
// }

// $obj = new Second_Class(new First_Class());
// $obj->getcustomers();



//----------------- second example -------------------------
// Class A{
//     public $var1="this is value";
//     public function getValue()
//     {
//         return $this->var1;
//     }
// }
// Class B{
//     public $var2= '';
//     public function __construct(A $a)
//     {
//         $this->var2 = $a->var1;
//     }
//     public function getValue()
//     {
//         echo  $this->var2;
//     }
// }

// $obj = new B(new A);
// $obj->getValue();



//----------------- MAIN example -------------------------------
// class Database{
//     public $conn;
//     public function __construct($host,$usr,$pass,$db)
//     {
//         $this->conn =  mysqli_connect($host,$usr,$pass,$db) or die('error-'.mysqli_connect_error());
//          return $this->conn;
//     }
//     public function getAll($table)
//     {
//        return mysqli_query($this->conn,'select * from '.$table);
//     }
// }
// class User 
// {
//     private $database = null;

//     public function __construct(Database $database) {
//         $this->database = $database;
//     }

//     public function getUsers() {
//         return $this->database->getAll('customers');
//     }
// }

// $database = new Database('localhost','root','','test');
// $user = new User($database);
// print_r($user->getUsers());


//----------------- practice -------------------------
class Database{
    public $conn;
    public function __construct($host,$usr,$pass,$db)
    {
        $this->conn = mysqli_connect($host,$usr,$pass,$db);
        return $this->conn;
    }
    public function getAll($table)
    {
        $results = mysqli_query($this->conn,'select * from '.$table);
        while($row = mysqli_fetch_assoc($results)){
            echo $row['name'].'<br/>';
        }
    }
}

Class User{
    private $database = null;
    public function __construct(Database $db)
    {
        $this->database = $db;
    }
    public function getAllUsers()
    {
        return $this->database->getAll('customers');
    }
}

$user = new User(new Database('localhost','root','','test'));
print_r($user->getAllUsers());

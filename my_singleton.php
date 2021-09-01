<?php
class DatabaseManager{
    private static $instance;
    /**
    * public constructor
    */ 
    private function __construct()
    {
        // here for example you make a connection to a databse
    }
    /**
     * getInstance
     * 
     * this method will return instance of the class
     */
    public static function getInstance(){
        if(!self::$instance)
            self::$instance = new self;
        return self::$instance;
    }
    public function query($statement) 
    {
       // query the database
    }
}
// $db1 = new DatabaseManager();
// $db2 = new DatabaseManager();
// $db3 = new DatabaseManager();
$db1 = DatabaseManager::getInstance();
$db2 = DatabaseManager::getInstance();
$db3 = DatabaseManager::getInstance();
// print these objects
echo "<pre>";
var_dump($db1, $db2, $db3);
echo "</pre>";
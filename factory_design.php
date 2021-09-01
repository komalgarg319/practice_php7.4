<?php 
class MySQlConn{
    function __construct()
    {
        echo "MySQL Database Connection" . PHP_EOL;
    }
    public function select()
    {
        echo "Your mysql select query execute here" . PHP_EOL;
    }
}
class OracleConn{
    function __construct()
    {
        echo "Oracle Database Connection" . PHP_EOL;
    }
    public function select()
    {
        echo "Your Oracle select query execute here" . PHP_EOL;
    }
}

class DBFactory{
    // public static  $myvariable = 'abc';
    // public const abc = 2;

    public static function getConn($dbtype)
    {
        // echo  self::$myvariable;
    //    echo  self::abc;
        switch($dbtype){
            case "MySQL":
                $dbobj = new MySQlConn();
                break;
            case "Oracle":
                $dbobj = new OracleConn();
                break;
            default:
                $dbobj = new MySQlConn();
                break;
        }
        return $dbobj;
    }
}

$obj = DBFactory::getConn("MySQL");
$obj->select();
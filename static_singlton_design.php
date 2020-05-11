<?php

header('Content-type: text/plain');

class B
{
    private static B $instance;

    private function __construct()
    {

    }

    public static function getInstance(): B
    {
        if (!isset(self::$instance)) {
            self::$instance = new B();
        }
        return self::$instance;

    }

    public function printFile()
    {
        echo "Print file.";
    }


}

$obj1 = B::getInstance();
$obj2 = B::getInstance();
var_dump($obj1 == $obj2);
$obj1->printFile();
//$obj->printFile();




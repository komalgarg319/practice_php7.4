<?php

header('Content-type: text/plain');

class B
{
    private function B()
    {

    }

    private static $instance = null;

    static function getInstance()
    {
        if (self::$instance == null) {
            $instance = new B();
        } else {
            return self::$instance ;
        }
    }

    public function printFile()
    {
        echo "Print file.";
    }
}

$obj = B::getInstance();
$obj->printFile();




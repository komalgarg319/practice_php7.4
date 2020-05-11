<?php


class access_modifier
{
    public function __construct()
    {
        echo "I am access_modifier constructor \n";
    }

    public string $name = "komal";
    protected string $profile = "developer";
    private string $salary = "80000";
    public const company = "Globallogic";

    function person()
    {
        echo "Name: " . $this->name . "\n";
        echo "Profile: " . $this->profile . "\n";
        echo "Salary: " . $this->salary . "\n";
        echo "Company: " . self::company;
    }
}

class child extends access_modifier
{
    public string $salary = "jhghgh";

    public function __construct()
    {
        echo "child constructor\n";
    }

    function person1()
    {
//        echo "Name: " . $this->name . "\n";
//        echo "Profile: " . $this->profile . "\n";
        echo "Salary: " . $this->salary;
    }
}

$obj_cons = new child();
$obj_cons->person1();
die;

class new_class
{
    //public $name = "Vivek";
    //protected $profile = "android";
    public function Person2()
    {
        $obj = new access_modifier();
        $obj->name = "Vivek";
        $company = access_modifier::company;
        echo $company . "<==\n";
        $obj->person();
    }
}

//$obj = new child();
//$obj->person();
//$obj->person1();
$obj2 = new new_class();
$obj2->Person2();
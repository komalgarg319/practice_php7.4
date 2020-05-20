<?php


class MyParent
{

    private string $name;
    public string $age;

    public function __isset($name)
    {
        // TODO: Implement __isset() method.
    }
}

class MyChild extends MyParent
{
    public string $role;

    public function __get($name)
    {
        // TODO: Implement __get() method.
    }
}

$obj = new MyChild();
$obj->age = "10";

<?php


class Overloading
{
    private $product_name;
    public $product_price = 2000;
    protected $product_quantity = 4;
    private $product_data = array();

    public function __set($name, $value)
    {
        $this->product_data[$name] = $value;
    }

    public function __get($name)
    {
        return $this->product_data;
    }

    public function setHidden($val)
    {
        $this->product_quantity = $val;
    }

    public function getHidden()
    {
        return $this->product_quantity;
    }
    /*
     * set data array
     */
    public function setdata($key,$value){
        $this->product_data[$key] = $value;
    }
    public function getdata(){
        return $this->product_data;
    }

}
$obj = new Overloading();

//Value of product quantity
//echo "Before\n";
//echo $obj->getHidden()."\n";
//$obj->setHidden(10);
//echo "After \n";
//echo $obj->getHidden();

//value of product data
echo "Before\n";
print_r($obj->getdata());
echo "\n";
$obj->setdata("name","Komal");
$obj->setdata("salary",10);
echo "After \n";
print_r($obj->getdata());

//product data using __set and __set
//$obj->a = 1000;
//print_r($obj->a) ;



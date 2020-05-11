<?php
header('Content-type: text/plain');
abstract class A
{	
	abstract function read();
	abstract function write();
	function process(){
		$this->read();
		$this->write();
		$this->save();
	}
	public function save(){
		echo "Data saved\n";
	}
    function print_file(){
        echo "This Print file for".__CLASS__."\n";
    }
}
class B extends A{
	function read(){
		echo "Data read text\n";
	}
	function write(){
		echo "Data write text\n";
	}
	function print_file(){
	    echo "This Print file for ".__CLASS__."\n";
	    parent::print_file();
    }
	
}
class C extends A{
	function read(){
		echo "Data read pdf\n";
	}
	function write(){
		echo "Data write pdf\n";
	}
	
	
}
        $obj = new B();
$obj->print_file();die;
		$obj->process();
		$obj2 = new C(); 
		$obj2->process();

?>
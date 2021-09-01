<?php
// class GFG {


//     public function __call($name, $arguments) {

//         echo "Calling object method '$name' "
//             . implode(', ', $arguments). "\n";
//     }


//     public static function __callStatic($name, $arguments) {

//         echo "Calling static method '$name' "
//             . implode(', ', $arguments). "\n";
//     }
// }

// // Create new object
// $obj = new GFG;

// $obj->runTest('in object context',"efwyefywefgyw");

// GFG::runTest('in static context');

/**  Function Overloading  */
Class shape{
    public function __call($name, $arguments)
    {
        if($name == 'area'){
            switch(count($arguments)){
                case 1:
                    echo 3.14 * $arguments[0];
                    break;
                case 2:
                    echo $arguments[0]*$arguments[1];
                    break;
                default:
                    echo 'nothing';   
            }
        }
    }
}
$obj = new shape;
$obj->area(2,4);

/**  Function Overriding:  */
// This is parent class
class P {
      
    // Function geeks of parent class
    function geeks() {
        echo "Parent";
    }
}
  
// This is child class
class C extends P {
      
    // Overriding geeks method
    function geeks() {
        echo "\nChild";
    }
}
  
// Reference type of parent
$p = new P;
  
// Reference type of child
$c= new C;
  
// print Parent
$p->geeks();
  
// Print child
$c->geeks();

/** property overloading */

Class Pro{
    private $data = array();
    public function __set($name,$value){
        $this->data[$name] = $value;
    }
    public function __get($name){
        return $this->data[$name];
    }
    public function __isset($name){
        return isset($this->data[$name]);
    }
    public function __unset($name){
        unset($this->data[$name]);
    }
}
$objp = new Pro;
$objp->a = 4;
echo '<br/>'.$objp->a.'==';
echo isset($objp->a).'==';
unset($objp->a); 
echo isset($objp->a);

/** type hinting */
function xyz(int $x){
echo '<br/>'.$x;
}
xyz(90);
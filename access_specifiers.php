<?php
// Class ATEST{
//     protected $x = 'me variable';
//     const y = "I am constant";
//     public function abc(){
//         echo "it's me!"; 
//        echo  self::y;
//     }
// }
// Class B2 extends ATEST {
//     function accessX(){
//         echo $this->x;
//     }
// }
// $obj = new B2();
// $obj->abc();
// echo '=='.$obj->x;

 
    class demo  
    {  
        public function __construct()
        {
            
          
            echo "constructor1...";  
        }  
    }  
      
    class demo1 extends demo  
    {  
        public function __construct()  
        {  
           // echo parent::__construct();  
            echo "constructor2...";  
        }  
    }  
    $obj= new demo1();  
  


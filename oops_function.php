<?php
class Class1{
   private string $name = "komal";
   public int $salary = 10984897347;
   public function print(){
       echo "Print function of class ".__CLASS__."\n";
   }
   private function write(){
       echo "write function of class ".__CLASS__."\n";
   }
}
class Class2 extends Class1
{
    public string $profile = "Developer";

}
//print_r(get_class_vars("Class1"));

//$obj = new Class2();
//echo get_class($obj);


//print_r(get_object_vars($obj));

//echo class_exists("Class1");
//echo is_subclass_of("Class2","Class1");
//echo method_exists("Class2","write");

print_r(get_declared_classes());

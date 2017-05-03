<?php    



abstract class Person{
    
    protected $name = "no name person";
    
    
    protected function __construct($name){
        
        $this->name = $name;
        
        echo "Constructor Called";
        
    }
    
   
    
    protected function __destruct(){
        echo "Destructor Called";
    }
    
    abstract protected function getName();
}


class Employee extends Person{
    
    public $address = "no address";
    
    public function __construct($name){
        parent::__construct($name);
    }
    
    public function __destruct(){
        parent::__destruct();
    }
    
    public static function load($name,$address){
        $employee = new self($name);
        $employee->address = $address;
        return $employee;
        
    }
    
    
    public function getName(){
        return $this->name;
    }
    
}



$employee  = new Employee("humayoun");
echo "<br/>";
echo "employee  name is :". $employee->getName()."<br/>";

$empOther = Employee::load("humayoun","bogra");
echo "<br/>";
echo "employee  name is :". $empOther->getName()."<br/>";
echo "<br/>";
echo "employee  address is :". $empOther->address."<br/>";


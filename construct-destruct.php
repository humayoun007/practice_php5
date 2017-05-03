<?php    



class Person{
    
    public $name = "no name person";
    
    public function __construct($name){
        
        $this->name = $name;
        
        echo "Constructor Called";
        
    }
    
    
    public function __destruct(){
        echo "Destructor Called";
    }
}



$person = new Person("humayoun");
echo "<br/>";
echo "person name is :". $person->name."<br/>";

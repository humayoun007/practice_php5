<?php 


class User{
    public $name;
    public $email;
    
    public function getInfo(){
        return $this->name . " has a email address :".$this->email;
    }
}


$user = new User();

$user->name = "humayoun";
$user->email = "humayoun@yahoo.com";
echo $user->getInfo();
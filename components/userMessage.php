<?php 

class UserMessage{
    private $name;
    private $lastname;
    private $email;
    private $message;

    public function __construct($email, $name, $lastname, $message){
        $this->name=$name;
        $this->lastname=$lastname;
        $this->message=$message;
        $this->email=$email;
    }

    public function getEmail(){
        return $this->email;
    }
    
    public function getName(){
        return $this->name;
    }

    public function getLastname(){
        return $this->lastname;
    }

    public function getMessage(){
        return $this->message;
    }

}

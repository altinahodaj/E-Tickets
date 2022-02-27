<?php

include_once 'userMessage.php';
require_once 'messageMapper.php';

session_start();

if(isset($_POST['contact-submit'])){
    $contactUs = new ContactUs($_POST);
    $contactUs->insertData();
}
else{
    header("Location:../views/contactUs.php");
}

class ContactUs{
    private $email="";
    private $lastname="";
    private $name="";
    private $message="";


    function __construct($formData){
        $this->email=$formData['emailinput'];
        $this->name=$formData['nameinput'];
        $this->lastname=$formData['lastNameinput'];
        $this->message=$formData['input4'];
    }


    public function insertData(){
        $userMessage = new UserMessage($this->email, $this->name, $this->lastname, $this->message);
        $mapper = new MessageMapper();
        $mapper->insertMessage($userMessage);
        header("Location:../views/contactUs.php");
    }
}
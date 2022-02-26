<?php

class News{
    private $name;
    private $image;
    private $pfd;

    public function __construct($name, $image, $pfd){
        $this->name=$name;
        $this->image=$image;
        $this->pfd=$pfd;
    }

    public function getName(){
        return $this->name;
    }

    public function getImage(){
        return $this->image;
    }

    public function getPFD(){
        return $this->pfd;
    }
}
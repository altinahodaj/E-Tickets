<?php 

class Product{
    private $name;
    private $category;
    private $image;
    private $price;

    public function __construct($name, $category, $image, $price){
        $this->name=$name;
        $this->category=$category;
        $this->image=$image;
        $this->price=$price;
    }
    
    public function getName(){
        return $this->name;
    }

    public function getCategory(){
        return $this->category;
    }

    public function getImage(){
        return $this->image;
    }

    public function getPrice(){
        return $this->price;
    }

}

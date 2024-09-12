<?php

class Prodotto{

    private string $title;
    private string $image;
    private float $price; 

    public function __construct($title, $image, $price){
        $this->title = $title;
        $this->image = $image;
        $this->price = $price;
    }

    public function getTitle(){
        return $this->title;
    }
    public function getImage(){
        return $this->image;
    }
    
    public function getPrice(){
        return $this->price;
    }
    
}


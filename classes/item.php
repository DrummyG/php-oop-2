<?php

include_once __DIR__.'/user.php';
var_dump($check);

class Item{
    public $name;
    public $price;
    protected $stock;
    public $img;

    function __construct($_name, $_price, $_stock, $_img){
        $this->name = $_name;
        $this->price = $_price;
        $this->stock = $_stock;
        $this->img = $_img;
    }

    public function getSconto($check){
        if($check == true){
            $this->price = $this->price - ($this->price * 20 / 100);
        }
        echo 'a';
    }
}
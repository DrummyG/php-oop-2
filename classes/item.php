<?php

include_once __DIR__.'/user.php';

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
}
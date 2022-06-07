<?php
include_once __DIR__.'/item.php';

class Type extends Item{
    public $tipo;
    public $animale;

    function __construct($_name, $_price, $_stock, $_img, $_tipo, $_animale){
        parent::__construct($_name, $_price, $_stock, $_img);
        $this->tipo = $_tipo;
        $this->animale = $_animale;
        
    }
}

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
};

$types = [
    [
        'nome' => 'Osso di gomma',
        'prezzo' => 20.99,
        'stock' => 50,
        'img' => 'https://www.ilpelosauro.it/Repository/ossa%20gomma%20dura.jpg',
        'tipo' => 'giocattolo',
        'animale' => 'cane'
    ],
    [
        'nome' => 'Osso di gomma',
        'prezzo' => 20.99,
        'stock' => 50,
        'img' => 'https://www.ilpelosauro.it/Repository/ossa%20gomma%20dura.jpg',
        'tipo' => 'giocattolo',
        'animale' => 'cane'
    ],
];

function priceStatus(){
    foreach($types as $key => $value){
        $item = new Type($value['nome'], $value['prezzo'], $value['stock'], $value['img'], $value['tipo'], $value['animale']);
        $item->getSconto();
    }
}

priceStatus();

<?php 
include_once __DIR__.'/classes/type.php';
include_once __DIR__.'/classes/user.php';
var_dump($check);
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


function priceStatus($types, $check){
    foreach($types as $key => $value){
        $item = new Type($value['nome'], $value['prezzo'], $value['stock'], $value['img'], $value['tipo'], $value['animale']);
        $item->getSconto($check);
    }
}

priceStatus($types, $check);
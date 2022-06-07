<?php
include_once __DIR__.'/user.php';
include_once '../index.php';

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $client = new User($_POST['nome'], $_POST['cognome'], $_POST['email']);
    $client->getCheck();
}
<?php
include_once '../server.php';
$check = false;

$errore = '';

class User{
    protected $name;
    protected $surname;
    protected $email;
    protected $login;

    public function __construct($_name, $_surname, $_email){
        if(strpos($_email, '@') && strpos($_email, '.')){
            $this->name = $_name;
            $this->surname = $_surname;
            $this->email = $_email;
            $this->login = true;
        } else{
            // catch (Exception $e) {
            //     echo 'email non valida'
            // }
            $errore = 'mail non valida';
        }
    }

    public function getCheck(){
        if($this->login == true){
            $check = true;
            priceStatus($types, $check);
        };
    }
}




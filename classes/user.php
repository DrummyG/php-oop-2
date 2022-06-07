<?php
include_once __DIR__.'/type.php';
$check = false;
var_dump($types);


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
            throw new Exception('Is not a mail');
        }
    }

    public function getCheck(){
        if($this->login == true){
            $check = true;
            foreach($types as $key => $value){
                $value->getSconto();
            }
        };
    }
}




<?php

class Pessoa {
    public $nome;
    public $idade;

    public function Falar() {
        echo $this->nome." de ".$this->idade." anos acabou de falar <br>";
    }
}

$rodrigo = new Pessoa();
var_dump($rodrigo);


$rodrigo->nome = "Rodrigo Santos";
$rodrigo->idade = 25;
$rodrigo->Falar();
echo $rodrigo->nome;

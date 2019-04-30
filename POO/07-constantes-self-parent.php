<?php

class Pessoa {
    const nome = "Rodrigo";
    public function exibirNome(){
        echo self::nome;
    }
}

$pessoa = new Pessoa();
$pessoa->exibirNome();

echo "<hr>";

class Rodrigo extends Pessoa {
    const nome = "Oliveira";

    public function exibirNome(){
        echo parent::nome;
        echo self::nome;
    }
}

$rodrigo = new Rodrigo();
$rodrigo->exibirNome();
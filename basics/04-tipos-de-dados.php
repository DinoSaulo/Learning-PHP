<?php
/********** Tipos Escalares **********/

//string
$nome = "Olá mundo";
var_dump($nome);
if(is_string($nome)):
    echo "É uma string";
else:
    echo "Não é uma string";
endif;

echo "<hr>";

//int
$idade = 10;
var_dump($idade);
if(is_int($idade)):
    echo "É um inteiro";
else:
    echo "Não é um inteiro";
endif;

echo "<hr>";

//float
$altura = 1.70;
var_dump($altura);
if(is_float($altura)):
    echo "É um float";
else:
    echo "Não é um float";
endif;

echo "<hr>";

//boolean
$admin = false;
var_dump($admin);
if(is_bool($admin)):
    echo "É um booleano";
else:
    echo "Não é um booleano";
endif;

echo "<hr>";

/********** Tipos Compostos **********/

//Array
$carros = array("Tucson","Gol","Chevete","Careira GT");
var_dump($carros);
if(is_array($carros)):
    echo "É um array";
else:
    echo "Não é um array";
endif;

$variado = array("Tatu",10, 10.777, true);
var_dump($variado);
if(is_array($variado)):
    echo "É um array";
else:
    echo "Não é um array";
endif;

// Object
class Cliente {
    public $nome;
    public function atribuirNome($nome){
        $this->nome = $nome;
    }
}

echo "<hr>";

$cliente = new Cliente();
$cliente->atribuirNome("Rodrigo");
var_dump($cliente);
if(is_object($cliente)):
    echo "É um objeto";
else:
    echo "Não é um objeto";
endif;

echo "<hr>";

/********** Tipos Especiais **********/

$cidade = NULL;
var_dump($cidade);
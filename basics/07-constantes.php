<?php
// Constantes
define("NOME", "José Carlos"); // identificador sempre com letras MAIUSCULAS
define("IDADE", 24);
define("ALTURA", 1.80);
define("SOLTEIRO", true);

define("TIMES", ['Sport', 'Santa Cruz', 'Nautico']);

echo 'Meu nome é ' .NOME. ', tenho ' .IDADE. ' anos e minha altura é ' .ALTURA. 'Mts';

echo "<hr>";

echo TIMES[1];

echo "<hr>";

function exibeNome() {
    echo NOME;
}

exibeNome();
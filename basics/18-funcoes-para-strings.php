<?php

$nome = "Saulo Alexandre";

$nomeMaiusculo = strtoupper($nome);

echo $nomeMaiusculo;

echo "<hr>";

$nome2 = "SAULO ALEXANDRE";

$nomeMinusculo = strtolower($nome2);

echo $nomeMinusculo;

echo "<hr>";

$mensagem = "Olá mundinho";
echo substr($mensagem, 4, 7);

echo "<hr>";

$objeto = "Oi";
$novoObjeto = str_pad($objeto, 7, "*3");
echo $novoObjeto;

echo "<hr>";

$novoObjeto = str_pad($objeto, 7, "*3", STR_PAD_LEFT);
echo $novoObjeto;

echo "<hr>";

$novoObjeto = str_pad($objeto, 7, "*3", STR_PAD_BOTH);
echo $novoObjeto;

echo "<hr>";

$string = str_repeat("Sucesso!", 5);
echo $string;

echo "<hr>";

$mensagem = "Olá mundo!";
echo strlen($mensagem);

echo "<hr>";

$texto = "Eu amo comer lasanha!";
$novoTexto = str_replace("lasanha", "Feijoada", $texto);

echo $novoTexto;

echo "<hr>";

echo strpos($texto, "comer");

echo "<hr>";

$db = 1234.56;

$preco = number_format($db, 2, ",", ".");
echo "O valor do produto é R$ $preco";

echo "<hr>";

//função round arrdonda valores
echo round(3.49);

echo "<hr>";

// funcao teto
echo ceil(8.1);

echo "<hr>";

//funcao chão
echo floor(8.99);
echo "<hr>";

echo rand(1,9);
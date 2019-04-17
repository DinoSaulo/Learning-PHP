<?php

$nomes = array("Rodrigo", "Felipe", "Maria");

if(is_array($nomes)):
    echo "é um array";
else:
    echo "não é um array";
endif;

echo "<hr>";

if(in_array("Rodrigo", $nomes)):
    echo "Existe no array";
else:
    echo "não existe no array";
endif;

echo "<hr>";

$nomes2 = array("Primo" => "Lucas", "Vizinho" => "Rafael", "Mãe" => "Joana");

$keys = array_keys($nomes2);
print_r($keys);

echo "<hr>";

$values = array_values($nomes2);
print_r($values);

echo "<hr>";

$carros = array("Camaro", "Uno", "Gol");
$motos = array("Pop100", "CB1000", "Fazer");

$veiculos = array_merge($carros, $motos); // junta os dois arrays

print_r($veiculos);

echo "<hr>";

$carros2 = array("Camaro", "Uno", "Gol");
print_r($carros2);
array_pop($carros2); //desempilha um elemento
echo "<br>";
print_r($carros2);

array_shift($carros2); //remove o primeiro elemento
echo "<br>";
print_r($carros2);

echo "<br>";

// adicionando três elementos ao array
$frutas = array("Uva", "Laranja", "Maçã");
print_r($frutas);
echo "<br>";
array_unshift($frutas, "Manga", "Acerola", "Morango");
print_r($frutas);

echo "<hr>";

// combinando keys com valores
$keys = array("Pai", "Mãe", "Irmão");
$values = array("Lucas", "Joana", "Lula");

$times3 = array_combine($keys, $values);
print_r($times3);

echo "<hr>";

//somando todos os valores de um array
$soma = array(1, 2, 3, 4);
$total = array_sum($soma);
echo $total;

echo "<hr>";

// fazendo um split 
$data = "30/02/2018";
$novaData = explode('/', $data);

print_r($novaData);

echo "<hr>";

// faz o contrário do implode
$nomes = array("Rodrigo", "ama", "comer", "Pizza");
$string = implode(" ", $nomes);

echo $string;


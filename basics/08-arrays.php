<?php

$carros = array(1=>"Fusquinha", "Saveiro", "Gol Quadradão", "Kombi");
$carros[] = "Amarok";
$carros[10] = "Camaro";

echo $carros[10];

echo "<hr>";

$motos = array();
$motos[] = "Yamaha";
$motos[] = "Honda";
$motos[5] = "Yamaha";
echo $motos[5];

echo "<hr>";

$clientes = ["Rodrigo", "Felipe", "Bia"];
print_r($clientes);

echo "<hr>";

// Count

echo count($clientes);

echo "<hr>";

foreach($motos as $valor){
    echo $valor. "<br>";
}

echo "<hr>";

//Arrays associativos
$pessoa = array("nome"=> "Rodrigo", "idade" => 23, "Altura" => 1.80);
$pessoa["cidade"] = "Abreu e Lima";
echo $pessoa["nome"];

echo "<br>";

foreach($pessoa as $indice => $valor){
    echo $indice. ":" .$valor. "<br>";
}

echo "<hr>";

// Arrays multidimensionais

$carros2 = array(
    "caros" => array("Carrera GT", "Cayman S", "Galardo"),
    "medios" => array("Amarok", "Hilux", "Prius"),
    "baratos" => array("fusca", "Gol", "Palio")
);

echo $carros2["caros"][1];

echo "<br>";

foreach($carros2["baratos"] as $indice => $valor) {
    echo $indice. " : " .$valor. "<br>";
}
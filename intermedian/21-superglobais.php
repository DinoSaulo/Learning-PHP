<?php

// O Glogals retorna um array com todas a variaveis globai de qualquer lugar do código

$a = 10;
$b = 15;

function soma() {
    echo $GLOBALS['a'] + $GLOBALS['b'];
}

soma();

echo "<br>";
// $_server um array que contém vários índices

echo $_SERVER['PHP_SELF']."<br>"; // Nome do arquivo
echo $_SERVER['SERVER_NAME']."<br>"; // nome do servidor
echo $_SERVER['SCRIPT_FILENAME']."<br>"; //onde está o arquivo
echo $_SERVER['DOCUMENT_ROOT']."<br>"; // diretório do arquivo
echo $_SERVER['SERVER_PORT']."<br>"; // porta
echo $_SERVER['REMOTE_ADDR']."<br>"; // ip

echo "<hr>";



<?php

// if
$numero = 8;

if ($numero == 10):
    echo "É igual a 10";
elseif($numero <= 9):
    echo "É menor ou igual a 9";
else:
    echo "É diferente de 10";
endif;

echo "<hr>";

// operador ternário

$media = 6;

echo ($media >= 7) ? "Aprovado" : "Reprovado";

// switch case

$cor = "azul";

switch($cor):
    case "vermelho":
        echo "sua cor preferida é vermelho";
        break;
    case "azul":
        echo "sua cor preferida é azul";
        break;
    case "verde":
        echo "sua cor preferida é verde";
        break;
    default:
        echo "sua cor favorita não é nenhuma";

endswitch;
<?php


$idade = 25;
$nome = "Rodrigo";

if(($idade == 25) && ($nome == "Rodrigo")):
    echo "eh verdadeiro";
else:
    echo "eh falso";
endif;

echo "<hr>";

if(($idade == 25) and ($nome == "Rodrigo")):
    echo "eh verdadeiro";
else:
    echo "eh falso";
endif;

echo "<hr>";

// and

if(($idade == 26) || ($nome == "Rodrigo")):
    echo "eh verdadeiro";
else:
    echo "eh falso";
endif;

echo "<hr>";

if(($idade == 26) or ($nome == "Rodrigo")):
    echo "eh verdadeiro";
else:
    echo "eh falso";
endif;

echo "<hr>";

// xor
if(($idade == 25) xor ($nome == "Rodrigo")):
    echo "eh verdadeiro";
else:
    echo "eh falso";
endif;

echo "<hr>";

// negative
if(!($idade == 25)):
    echo "eh verdadeiro";
else:
    echo "eh falso";
endif;
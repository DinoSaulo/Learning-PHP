<?php

function exibirNome($nome) {
    echo "Meu nome é " .$nome;
}

exibirNome("Saulo Barros");

echo "<br>";

function calcularMedia($nome, $n1, $n2, $n3, $n4){
    $media = ($n1+ $n2 + $n3 + $n4) / 4;
    if ($media >= 7):
        echo "$nome foi aprovao com a $media.<br>";
    else:
        echo "$nome foi reprovado <br>";
    endif;
    
}

calcularMedia("Bob",5, 7, 9, 10);
calcularMedia("João", 7, 2, 6, 4);

<?php

$string = "255g";
$padrao = "/^[a-z0-9]+$/i";

$string2 = "contato@gmail.com";
$padrao2 = "/^[a-z0-9.\-\_]+@[a-z0-9.\-\_]+\.(com|br|com.br)$/i";

$string3 = "28/09/2019";
$padrao3 = "/^[0-9]{2}\/[0-9]{2}\/[0-9]{4}$/";

if(preg_match($padrao3, $string3)):
    echo "Válido";
    echo "<hr>";
    echo $string3;
else:
    echo "Inválido";
    echo "<hr>";
endif;
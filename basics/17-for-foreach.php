<?php

for($contador = 0; $contador <= 10; $contador++):
    echo "O contador é $contador <br>";
endfor;

echo "<hr>";

for ($contador2 = 0; $contador2 <= 10; $contador2++):
    echo "9 X $contador2 = ".($contador2*9)."<br>";
endfor;

$cores = array("Verde","Vermelho", "Rosa");

echo "<hr>";

foreach($cores as $indice => $valor):
    echo $indice. " - " .$valor."<br>";
endforeach;
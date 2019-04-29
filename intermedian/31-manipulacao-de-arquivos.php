<?php

$arquivo = 'arquivo.txt';
$contudo = "Conteudo de teste\r\n";

$arquivoAberto = fopen($arquivo, 'a');
fwrite($arquivoAberto, $contudo);


echo "<hr>";

$tamanhoArquivo = filesize($arquivo);
$arquivoAberto = fopen($arquivo, 'r');
while(!feof($arquivoAberto)):
    $linha = fgets($arquivoAberto, $tamanhoArquivo);
    echo $linha."<br>";
endwhile;

fclose($arquivoAberto);

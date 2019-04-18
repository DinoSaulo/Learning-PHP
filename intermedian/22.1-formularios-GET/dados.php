<?php

$nome = $_GET['nome'];
$email = $_GET['email'];

echo "Seu nome é $nome, e seu e-mail é $email. <br>";

var_dump($_GET);

echo "<hr>";
echo $_GET['idade']."<br>".$_GET['sobrenome'];

var_dump($_GET);
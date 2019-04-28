<?php
$senha = '123456';

// Criptografia base64
$novaSenha = base64_encode($senha);
echo "Base64: " .$novaSenha."<br>";
echo "Sua senha é: ".base64_decode($novaSenha);
echo "<hr>";

// criptografia md5
echo "Md5: ". md5($senha);
echo "<hr>";

// criptografia sha1
echo "Sha1: ". sha1($senha);
echo "<hr>";

// ------------------- Criptografia mais segura -------------------

$options = [
    'cost' => 10,
];

$senhaSegura = password_hash($senha, PASSWORD_DEFAULT, $options);
echo $senhaSegura;

echo "<hr>";

$senhaSegura = password_hash($senha, PASSWORD_DEFAULT);
echo $senhaSegura;
echo '<br>';

$senha_db = '$2y$10$.peOiyuBdGsOHrTgN21pSOUD0ykRyPd1jvABYy6pN0SK9VzgBadum';

if(password_verify($senha, $senha_db)):
    echo "Senha válida";
else:
    echo "Senha inválida";
endif;



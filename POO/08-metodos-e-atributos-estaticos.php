<?php

class Login {

    public static $user;

    public static function verificaLogin() {
        echo "O usuário ".self::$user." está logado!<br>";
    }

    public function sairSistema() {
        echo "O usuário deslogou<br>";
    }
}

Login::$user = "admin";
Login::verificaLogin();

$login2 = new Login();
$login2->sairSistema();
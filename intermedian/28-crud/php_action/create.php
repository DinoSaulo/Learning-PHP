<?php

// Sessão
session_start();

// Conexão
require_once 'db_connect.php';

if(isset($_POST['btn-cadastrar'])):

    $nome = mysqli_escape_string($connect, $_POST['nome']);
    $sobrenome = mysqli_escape_string($connect, $_POST['sobrenome']);
    $email = mysqli_escape_string($connect, $_POST['email']);
    $idade = mysqli_escape_string($connect, $_POST['idade']);

    // filtros sanitize
    $nomeFilter = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
    $sobrenomeFilter = filter_input(INPUT_POST, 'sobrenome', FILTER_SANITIZE_SPECIAL_CHARS);
    $emailFilter = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $idadeFilter = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);

    $sql = "INSERT INTO clientes (nome, sobrenome, email, idade) VALUES ('$nomeFilter', '$sobrenomeFilter', '$emailFilter', '$idadeFilter')";

    if(mysqli_query($connect, $sql)):
        $_SESSION['mensagem'] = "Cadastrado com sucesso!";
        header('Location: ../index.php');
    else:
        $_SESSION['mensagem'] = "Erro ao cadastrar.";
        header('Location: ../index.php');
    endif;
endif;
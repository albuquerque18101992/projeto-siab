<?php

session_start();
include_once("conexao.php");

if ((isset($_POST['usuario'])) && (isset($_POST['senha']))) {
    $usuario = mysqli_real_escape_string($conn, $_POST[usuario]); //Escapar de caracteres especiais .

    $senha = mysqli_real_escape_string($conn, $_POST['senha']);
    //$senha = md5 ($senha);

    if (($senha == "123") && ($usuario == "paulo.albuquerque")) {
        header("Location: ..\projeto_siab\siab\cadastro_inicial.php");
    } else {
        $_SESSION['loginErro'] = "Usuário ou senha inválidos";
        header("Location: index.php");
    }
} else {
    $_SESSION['loginErro'] = "Usuario ou senha invalido";
    header("Location: index.php");
}

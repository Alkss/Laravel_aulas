<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 25/12/18
 * Time: 16:12
 */

include("conecta.php");
include("banco-usuario.php");
include("logica-usuario.php");

$usuario = buscaUsuario($conexao, $_POST['email'], $_POST['senha']);
if ($usuario != null) {
    logaUsuario($_POST['email']);
    $_SESSION['success'] = "Usuário logado com sucesso.";
    header('location:index.php');
} else {
    $_SESSION['danger'] = "Login ou senha inválidos";
    header('location:index.php');
}
die;


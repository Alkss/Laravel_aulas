<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 25/12/18
 * Time: 16:58
 */

session_start();

function verificaUsuario()
{
    if (!usuarioEstaLogado()) {
        $_SESSION['danger'] = "Você não tem acesso a essa funcionalidade";
        header('location:index.php?falhaDeSeguranca=true');
        die();
    }
}

function usuarioEstaLogado()
{
    return isset($_SESSION['usuario_logado']);
}

function usuarioLogado()
{
    return $_SESSION['usuario_logado'];
}

function logaUsuario($email)
{
    $_SESSION['usuario_logado'] = $email;
}

function deslogar()
{
    unset($_SESSION['usuario_logado']);
    session_destroy();
}
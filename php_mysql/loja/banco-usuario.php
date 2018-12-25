<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 25/12/18
 * Time: 16:13
 */

function buscaUsuario($conexao, $email, $senha)
{
    $senhaMD5 = md5($senha);
    $query = "SELECT * FROM usuarios WHERE email='{$email}' and senha='{$senhaMD5}'";
    $resultado = mysqli_query($conexao, $query);
    $usuario = mysqli_fetch_assoc($resultado);
    return $usuario;
}
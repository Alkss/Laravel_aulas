<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 25/12/18
 * Time: 16:12
 */

include("conecta.php");
include("banco-usuario.php");


$usuario = buscaUsuario($conexao, $_POST['email'], $_POST['senha']);
if ($usuario != null) {
    header('location:index.php?login=1');
} else {
    header('location:index.php?login=0');
}
die;


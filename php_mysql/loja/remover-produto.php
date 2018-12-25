<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 24/12/18
 * Time: 01:01
 */
include("conecta.php");
include("banco-produto.php");
include("logica-usuario.php");

$id = $_POST['id'];
removeProduto($conexao, $id);
$_SESSION['success'] = "Produto removido com sucesso";
header("location: produto-lista.php");
die();
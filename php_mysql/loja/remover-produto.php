<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 24/12/18
 * Time: 01:01
 */
include("conecta.php");
include("banco-produto.php");

$id = $_POST['id'];
removeProduto($conexao, $id);
header("location: produto-lista.php?removido=true");
die();
<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 12/01/19
 * Time: 19:09
 */
require_once('classes/Categoria.php');

$categoria = new Categoria();
$nome = $_POST['nome'];
$categoria->nome = $nome;
$categoria->inserir();
header('location: categorias.php');
die();
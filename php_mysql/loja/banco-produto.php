<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 24/12/18
 * Time: 00:54
 */
function listaProdutos($conexao)
{
    $produtos = array();
    $resultado = mysqli_query($conexao, "SELECT * FROM produtos");
    
    while ($produto = mysqli_fetch_assoc($resultado)) {
        array_push($produtos, $produto);
    }
    return $produtos;
}

function insereProduto($conexao, $nome, $preco)
{
    $query = "INSERT INTO produtos (nome, preco) VALUES('{$nome}', {$preco})";
    return mysqli_query($conexao, $query);
}
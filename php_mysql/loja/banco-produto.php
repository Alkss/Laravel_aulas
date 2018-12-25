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
    $resultado = mysqli_query($conexao, "SELECT p.*, c.nome as categoria_nome FROM produtos as p JOIN categorias as c on c.id=p.categoria_id");
    
    while ($produto = mysqli_fetch_assoc($resultado)) {
        array_push($produtos, $produto);
    }
    return $produtos;
}

function insereProduto($conexao, $nome, $preco, $descricao, $categoria_id, $usado)
{
    $query = "INSERT INTO produtos (nome, preco, descricao, categoria_id, usado) VALUES('{$nome}', {$preco}, '{$descricao}',{$categoria_id}, {$usado})";
    return mysqli_query($conexao, $query);
}

function removeProduto($conexao, $id)
{
    $query = "DELETE FROM produtos WHERE id={$id}";
    return mysqli_query($conexao, $query);
}

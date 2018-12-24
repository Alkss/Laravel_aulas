<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 23/12/18
 * Time: 23:58
 */
include("header.php");

function insereProduto($conexao, $nome, $preco)
{
    $query = "INSERT INTO produtos (nome, preco) VALUES('{$nome}', {$preco})";
    return mysqli_query($conexao, $query);
}


$nome_produto = $_GET['nome'];
$preco_produto = $_GET['preco'];
$conexao = mysqli_connect('localhost', 'root', 'root', 'loja');

if (insereProduto($conexao, $nome_produto, $preco_produto)) {
    ?>
    <p class="alert-sucess">Produto <?= $nome_produto ?>, custando <?= $preco_produto ?> adicionado com sucesso!</p>
    <?php
} else {
    $error = mysqli_error($conexao);
    ?>
    <p class="alert-danger">Deu erro: <?= $error ?></p>
    <?php
};
include("footer.php");
?>


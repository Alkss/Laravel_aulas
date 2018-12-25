<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 25/12/18
 * Time: 01:34
 */
include("header.php");
include("banco-produto.php");


$id = $_POST['id'];
$nome_produto = $_POST['nome'];
$preco_produto = $_POST['preco'];
$descricao = $_POST['descricao'];
$categoria_id = $_POST['categoria_id'];

if (isset($_POST['usado'])) {
    $usado = 'true';
} else {
    $usado = 'false';
}

include("conecta.php");
if (alteraProduto($conexao, $id, $nome_produto, $preco_produto, $descricao, $categoria_id, $usado)) {
    ?>
    <p class="alert-sucess">Produto <?= $nome_produto ?> alterado com sucesso!</p>
    <?php
} else {
    $error = mysqli_error($conexao);
    ?>
    <p class="alert-danger">Deu erro: <?= $error ?></p>
    <?php
};
include("footer.php");
?>
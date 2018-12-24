<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 23/12/18
 * Time: 23:58
 */
include("header.php");
include("banco-produto.php");


$nome_produto = $_GET['nome'];
$preco_produto = $_GET['preco'];
include("conecta.php");
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


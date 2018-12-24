<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 24/12/18
 * Time: 00:39
 */
include("header.php");
include("conecta.php");
include("banco-produto.php");

if (isset($_GET['removido']) && $_GET['removido'] == "true") {
    ?>
    <p class="alert alert-success"> Produto apagado com sucesso!</p>
    <?php
}
?>

    <table class="table table-striped table-bordered">
        <?php
        $produtos = listaProdutos($conexao);
        foreach ($produtos as $produto) {
            ?>
            <tr>
                <td><?= $produto['nome'] ?></td>
                <td><?= $produto['preco'] ?></td>
                <td><?= $produto['descricao'] ?></td>
                <td>
                    <form action="remover-produto.php?>" method="post">
                        <input type="hidden" name="id" value="<?= $produto['id'] ?>">
                        <button class="btn btn-danger">remover</button>
                    </form>
                </td>
            </tr>
            <?php
        }
        ?>
    </table>

<?php
include("footer.php");
<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 24/12/18
 * Time: 00:39
 */
require_once("header.php");
require_once("banco-produto.php");


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
                <td><?= $produto['categoria_nome'] ?></td>
                <td>
                    <form action="remover-produto.php?>" method="post">
                        <input type="hidden" name="id" value="<?= $produto['id'] ?>">
                        <button class="btn btn-danger">remover</button>
                    </form>
                </td>
                <td>
                    <a href="produto-altera-formulario.php?id=<?= $produto['id'] ?>" class="btn btn-primary">Alterar</a>
                </td>
            </tr>
            <?php
        }
        ?>
    </table>

<?php
include("footer.php");
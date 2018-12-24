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
?>
    <table class="table table-striped table-bordered">
        <?php
        $produtos = listaProdutos($conexao);
        foreach ($produtos as $produto) {
            ?>
            <tr>
                <td><?= $produto['nome'] ?></td>
                <td><?= $produto['preco'] ?></td>
            </tr>
            <?php
        }
        ?>
    </table>

<?php
include("footer.php");
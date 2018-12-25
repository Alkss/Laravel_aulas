<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 25/12/18
 * Time: 01:20
 */

include("header.php");
include("conecta.php");
include("banco-categoria.php");
include("banco-produto.php");


$id = $_GET['id'];
$produto = buscaProduto($conexao, $id);
$categorias = listaCategoria($conexao);

$usado = $produto['usado'] ? "checked='checked'" : "";

$categorias = listaCategoria($conexao);
?>
    <form action="altera-produto.php" method="post">
        <table class="table">
            <input type="hidden" name="id" value="<?= $produto['id'] ?>"
            
            
            <?php include("produto-formulario-base.php"); ?>

            <tr>
                <td><input class="btn btn-primary" type="submit" value="Confirmar">
                </td>
            </tr>
        </table>


    </form>

<?php
include("footer.php");
<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 24/12/18
 * Time: 00:03
 */
require_once("header.php");
require_once("banco-categoria.php");
require_once("logica-usuario.php");

verificaUsuario();

$produto = array("nome" => "", "preco" => "", "descricao" => "", "categoria_id" => "1");
$usado = "";
$categorias = listaCategoria($conexao);
?>
    <form action="adiciona-produto.php" method="post">
        <table class="table">
            <?php include("produto-formulario-base.php"); ?>
            <tr>
                <td><input class="btn btn-primary" type="submit" value="Confirmar">
                </td>
            </tr>
        </table>


    </form>

<?php
include("footer.php");
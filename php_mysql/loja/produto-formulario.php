<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 24/12/18
 * Time: 00:03
 */
include("header.php");
?>
    <form action="adiciona-produto.php" method="post">
        <table class="table">
            <tr>
                <td><label>Nome:</label></td>
                <td><input class="form-control" type="text" id="nome" name="nome"></td>
            </tr>
            <tr>
                <td><label>Preço:</label></td>
                <td><input class="form-control" type="number" id="preco" name="preco"></td>
            </tr>
            <tr>
                <td><label>Descrição:</label></td>
                <td><textarea id="descricao" name="descricao" class="form-control"></textarea></td>
            </tr>
            <tr>
                <td><input class="btn btn-primary" type="submit" value="Confirmar">
                </td>
            </tr>
        </table>


    </form>

<?php
include("footer.php");
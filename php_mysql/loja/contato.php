<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 25/12/18
 * Time: 18:15
 */
require_once("header.php");
?>

<form action="envia-contato.php" method="post">
    <table class="table">
        <tr>
            <td>Nome</td>
            <td><input type="text" name="nome" class="form-control"></td>
        </tr>
        <tr>
            <td>E-mail</td>
            <td><input type="email" name="email" class="form-control"></td>
        </tr>
        <tr>
            <td>Mensagem</td>
            <td><textarea name="mensagem" class="form-control"></textarea></td>
        </tr>
        <tr>
            <td>
                <button class="btn btn-primary">Enviar</button>
            </td>
        </tr>
    </table>
</form>

<?php
require_once("footer.php");
?>

<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 24/12/18
 * Time: 00:03
 */
include("header.php");
?>
    <form action="adiciona-produto.php" method="get">
        <label>Nome:</label>
        <input type="text" id="nome" name="nome">

        <label>Preço:</label>
        <input type="number" id="preco" name="preco">

        <input type="submit" value="Confirmar">

    </form>

<?php
include("footer.php");
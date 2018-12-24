<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 23/12/18
 * Time: 23:58
 */
include("header.php");
$nome_produto =  $_GET['nome'];
$preco_produto =  $_GET['preco'];
?>

<p class="alert-sucess">Produto <?=$nome_produto?>, custando <?=$preco_produto?> adicionado com sucesso!</p>

<?php
include("footer.php");
?>


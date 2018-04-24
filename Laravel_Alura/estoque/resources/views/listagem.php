<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 24/04/18
 * Time: 18:18
 */

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<table>
    <?php
    foreach ($produtos as $produto) {
        ?>
        <tr>
            <td>Nome:: <?= $produto->nme_usuario ?></td>
            <td>Valor:: <?= $produto->idt_usuario ?></td>
        </tr>
        <?php
    }
    ?>
</table>
</body>
</html>
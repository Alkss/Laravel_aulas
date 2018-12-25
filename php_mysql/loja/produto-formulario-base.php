<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 25/12/18
 * Time: 17:47
 */
?>
<tr>
    <td><label>Nome:</label></td>
    <td><input class="form-control" type="text" id="nome" name="nome" value="<?= $produto['nome'] ?>"></td>
</tr>
<tr>
    <td><label>Preço:</label></td>
    <td><input class="form-control" type="number" id="preco" name="preco" value="<?= $produto['preco'] ?>">
    </td>
</tr>
<tr>
    <td><label>Descrição:</label></td>
    <td><textarea id="descricao" name="descricao"
                  class="form-control"><?= $produto['descricao'] ?></textarea></td>
</tr>
<tr>
    <td><input type="checkbox" name="usado" value="true" <?= $usado ?>> Usado</td>
</tr>
<tr>
    <td><label>Categoria</label></td>
    <td>
        <select class="form-control" name="categoria_id">
            <?php
            foreach ($categorias as $categoria) {
                if ($produto['categoria_id'] == $categoria['id']) {
                    ?>
                    <option selected="selected"
                            value="<?= $categoria['id'] ?>"><?= $categoria['nome'] ?></option>
                    <?php
                } else {
                    ?>
                    <option value="<?= $categoria['id'] ?>"><?= $categoria['nome'] ?></option>
                    <?php
                }
            }
            ?>
        </select>
    </td>
</tr>
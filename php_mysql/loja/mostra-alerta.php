<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 25/12/18
 * Time: 17:36
 */
session_start();
function mostraAlerta($tipo)
{
    if (isset($_SESSION[$tipo])) {
        ?>
        <p class="alert alert-<?= $tipo ?>"><?= $_SESSION[$tipo] ?>!</p>
        <?php
        unset($_SESSION[$tipo]);
    }
}
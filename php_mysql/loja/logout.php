<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 25/12/18
 * Time: 17:15
 */

require_once("logica-usuario.php");

deslogar();
$_SESSION['success'] = "Deslogado com sucesso";
header('location:index.php');
die;
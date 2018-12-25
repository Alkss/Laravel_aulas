<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 25/12/18
 * Time: 17:15
 */

include("logica-usuario.php");

deslogar();
header('location:index.php?logout=true');
die;
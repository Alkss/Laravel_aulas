<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 24/12/18
 * Time: 01:43
 */

function listaCategoria($conexão)
{
    $categorias = array();
    $query = "SELECT * FROM categorias";
    $resultado = mysqli_query($conexão, $query);
    while ($categoria = mysqli_fetch_assoc($resultado)) {
        array_push($categorias, $categoria);
    }
    
    return $categorias;
}
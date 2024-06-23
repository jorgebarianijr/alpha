<?php
namespace Alpha\Classes;

use Alpha\Models\Categoria;

class CategoriaController{

    public static function getAllCategoria(){
        $Categoria = new Categoria();
        $listaCategoria = $Categoria->getAll();
        return $listaCategoria;
    }
}
<?php

use Alpha\Classes\CategoriaController;
use Alpha\Classes\ProdutoController;


require_once 'vendor/autoload.php';
require_once 'config.php';

if(isset($_POST['add'])){
    ProdutoController::addNewProduto();
}elseif(isset($_POST['update'])){
    ProdutoController::updateProduto();
}elseif(isset($_POST['delete'])){
    ProdutoController::deleteProduto();
}elseif(isset($_POST['s'])){
    $listaProdutos = ProdutoController::findProduto($_POST['s']);
    $listaCategorias = CategoriaController::getAllCategoria();
}else{
    $listaProdutos = ProdutoController::getAllProduto();
    $listaCategorias = CategoriaController::getAllCategoria();
}

require_once 'views/header.php';
require_once 'views/listagem.php';
require_once 'views/modal.php';
require_once 'views/footer.php';


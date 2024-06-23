<?php
require "src/Classes/CategoriaController.php";
require "src/Classes/ProdutoController.php";
require "config.php";

use Alpha\Classes\CategoriaController;
use Alpha\Classes\ProdutoController;
use PHPUnit\Framework\TestCase;


class TestesClasses extends TestCase{

    public function test_existeDadosProdutos(){
        $this->assertArrayHasKey(0,ProdutoController::getAllProduto());
    }

    public function test_existeDadosCategorias(){
        $this->assertArrayHasKey(0, CategoriaController::getAllCategoria());
    }
}
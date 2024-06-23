<?php
namespace Alpha\Classes;

use Alpha\Models\Categoria;
use Alpha\Models\Produto;

class ProdutoController{

    public static function addNewProduto(){
        global $base_url;
        //prepara os dados para adicionar um novo produto;

        //adiciona produto
        $Produto = new Produto();
        $result = $Produto->add($_POST);

        //redireciona
        if($result['error']==true){
            header("Location: $base_url/?msn_type=error&msn=".$result['msn']); 
        }else{
            header("Location: $base_url/?msn_type=info&msn=Sucesso ao inserir registro"); 
        }
    }

    public static function updateProduto(){
        global $base_url;
        //prepara os dados para fazer update do produto

        //update produto
        $Produto = new Produto();
        $result = $Produto->update($_POST);

        //redireciona
        if($result['error']==true){
            header("Location: $base_url/?msn_type=error&msn=".$result['msn']); 
        }else{
            header("Location: $base_url/?msn_type=info&msn=Sucesso ao alterar registro"); 
        }
    }

    public static function deleteProduto(){
        global $base_url;
        //prepara os dados para fazer update do produto

        //update produto
        $Produto = new Produto();
        $result = $Produto->delete($_POST);

        //redireciona
        if($result['error']==true){
            header("Location: $base_url/?msn_type=error&msn=".$result['msn']); 
        }else{
            header("Location: $base_url/?msn_type=info&msn=Sucesso ao alterar registro"); 
        }
    }

    public static function findProduto($pesquisa){
        //recupera os dados a partir de uma pesquisa
        $Produto = new Produto();
        $Categoria = new Categoria();
        $listaProduto = $Produto->find($pesquisa);
        $lista = [];
        foreach ($listaProduto as $produto) {
            $Cat = $Categoria->getById($produto['id_categoria']);
            $lista[] = [
                'id_produto' => $produto['id_produto'],
                'id_categoria' => $Cat[0]['id_categoria'],
                'nome_categoria' => $Cat[0]['nome_categoria'],
                'codigo' => $produto['codigo'],
                'descricao' => $produto['descricao'],
                'preco_unitario' => $produto['preco_unitario']
            ];
        }
        return $lista;
    }

    public static function getAllProduto(){
        //recupera todos os registros
        $Produto = new Produto();
        $Categoria = new Categoria();
        $listaProduto = $Produto->getAll();
        $lista = [];
        foreach ($listaProduto as $produto) {
            $Cat = $Categoria->getById($produto['id_categoria']);
            $lista[] = [
                'id_produto' => $produto['id_produto'],
                'id_categoria' => $Cat[0]['id_categoria'],
                'nome_categoria' => $Cat[0]['nome_categoria'],
                'codigo' => $produto['codigo'],
                'descricao' => $produto['descricao'],
                'preco_unitario' => $produto['preco_unitario']
            ];
        }
        return $lista;
    }

}
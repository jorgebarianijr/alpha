<?php

namespace Alpha\Models;

use PDO;
use PDOException;

class Produto
{

    public function add($dados)
    {
        $conn = DbAlpha::conectaDB();
        try {
            $sql = "INSERT INTO ap_produto (id_categoria, codigo, descricao, preco_unitario)
                    VALUES ('" . $dados["id_categoria"] . "', '" . $dados["codigo"] . "', '" . $dados["descricao"] . "', '" . $dados["preco_unitario"] . "')";
            $conn->exec($sql);
            return ['error' => false];
        } catch (PDOException $e) {
            return ['error' => true, 'msn' => $e->getMessage()];
        }
    }

    public function update($dados)
    {
        $conn = DbAlpha::conectaDB();
        try {
            $sql = "UPDATE ap_produto SET id_categoria=".$dados['id_categoria'].", codigo = '".$dados['codigo']."', descricao = '".$dados['descricao']."', preco_unitario='".$dados['preco_unitario']."' WHERE id_produto=".$dados['id_produto'];
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            return ['error' => false];
        } catch (PDOException $e) {
            return ['error' => true, 'msn' => $e->getMessage()];
        }
    }

    public function delete($dados){
        $conn = DbAlpha::conectaDB();
        try {
            $sql = "DELETE FROM ap_produto WHERE id_produto=".$dados['id_produto'];
            $conn->exec($sql);
            return ['error' => false];
        } catch (PDOException $e) {
            return ['error' => true, 'msn' => $e->getMessage()];
        }
    }

    public function getAll()
    {
        $conn = DbAlpha::conectaDB();
        try {
            $stmt = $conn->prepare("SELECT * FROM ap_produto ORDER BY codigo");
            $stmt->execute();
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $result = $stmt->fetchAll();
            return $result;
        } catch (PDOException $e) {
            echo "<br>" . $e->getMessage();
        }
    }

    public function find($dados)
    {
        $conn = DbAlpha::conectaDB();
        try {
            $stmt = $conn->prepare("SELECT * FROM 
                    ap_categoria AS c,
                    ap_produto AS p
                    WHERE 
                    p.id_categoria = c.id_categoria AND (
                    c.nome_categoria LIKE ('%%$dados%%') 
                    OR p.codigo LIKE ('%%$dados%%') 
                    OR p.descricao LIKE ('%%$dados%%') 
                    OR p.preco_unitario LIKE ('%%$dados%%')
                    ) ORDER BY p.codigo");
            $stmt->execute();
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $result = $stmt->fetchAll();
            return $result;
        } catch (PDOException $e) {
            echo "<br>" . $e->getMessage();
        }
    }
}

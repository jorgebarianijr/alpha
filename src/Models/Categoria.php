<?php

namespace Alpha\Models;

use PDO;
use PDOException;

class Categoria
{

    public function getAll()
    {
        $conn = DbAlpha::conectaDB();
        try {
            $stmt = $conn->prepare("SELECT * FROM ap_categoria ORDER BY nome_categoria");
            $stmt->execute();
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $result = $stmt->fetchAll();
            return $result;
        } catch (PDOException $e) {
            echo "<br>" . $e->getMessage();
        }
    }

    public function getById($idCategoria){
        $conn = DbAlpha::conectaDB();
        try {
            $stmt = $conn->prepare("SELECT * FROM ap_categoria WHERE id_categoria = $idCategoria");
            $stmt->execute();
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $result = $stmt->fetchAll();
            return $result;
        } catch (PDOException $e) {
            echo "<br>" . $e->getMessage();
        }
    }
}

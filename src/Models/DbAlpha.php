<?php

namespace Alpha\Models;

use PDO;
use PDOException;

class DbAlpha
{
    public static function conectaDB() //função responsável por fazer aconexão com o DB
    {
        global $dbHost;
        global $dbName;
        global $dbUser;
        global $dbPassword;
        try {
            $conn = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPassword);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
}

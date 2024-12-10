<?php

namespace dao;

use PDO;
use PDOException;

class GenericDAO
{
    //Responsabilidade -> Conectar no Banco de Dados
    public function conectaDB(): ?PDO {
        $servername = "localhost";
        $username = "root";
        $password = "senhaDoBD";
        $dbname = "hidroponia";


        try {
            $conn = new PDO("mysql:host=$servername", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $stmt = $conn->query("CREATE DATABASE IF NOT EXISTS $dbname");
            $stmt->execute();

            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $conn;
        } catch (PDOException $e) {
            echo "Falha na conexão com o banco de dados: " . $e->getMessage();
            return null;
        }
    }

    //Responsabilidade -> Fechar conexão com o BD
    public function encerraConexao(PDO $conn):void{
        $conn = null;
    }

}
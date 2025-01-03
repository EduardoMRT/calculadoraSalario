<?php

namespace dao;

class UsuarioDAO
{
    /**
     * @throws \Exception
     */
    public function createTableUsuario():?bool
    {
        try{
            $sql = "CREATE TABLE IF NOT EXISTS usuario(
                idUsuario INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                idPessoa INT(6) NOT NULL,
                senha VARCHAR(256) NOT NULL
                )";
            $genericDao = new GenericDAO();
            $conn = $genericDao->conectaDB();
            if($conn-exec($sql)){
                return true;
            }else{
                return false;
            }
        }catch (\PDOException $e){
            throw ($e);
        }
    }

}
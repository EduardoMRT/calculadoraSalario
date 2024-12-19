<?php

use dao\UsuarioDAO;

if($_SERVER['REQUEST_METHOD'] === "POST") {

    if($_GET['action'] === 'fazerLogin'){
        $usuarioDAO = new UsuarioDAO();
        $usuarioDAO->createTableUsuario();
    }


}
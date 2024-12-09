<?php

if($_SERVER['REQUEST_METHOD'] === "POST") {

    if($_GET['action'] === 'fazerLogin'){
        echo "<script>window.alert('Você ainda sabe brincar com PHP')</script>";
    }

}
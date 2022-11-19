<?php 

    $hostname = "localhost";
    $bancodedados = "clientes";
    $usuario = "root";
    $senha = "";


    $mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados);

    if ($mysqli -> connect_errno) {
        echo "falha ao conectar ao banco de dados";
    }
    
    else {
        echo "conectado ao banco de dados";
    }

?>
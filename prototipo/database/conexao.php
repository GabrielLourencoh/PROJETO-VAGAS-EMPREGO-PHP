<?php
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "MaisVagasBrasil";
    $conn = mysqli_connect($servidor, $usuario, $senha, $banco);

    if (!$conn) {
        die("Conexão falhou: " . mysqli_connect_error());
    } 
?>
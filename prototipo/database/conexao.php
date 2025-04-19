<?php
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "bd_maisvagasbrasil";
    $conn = mysqli_connect($servidor, $usuario, $senha, $banco);
    
    $conn->set_charset("utf8mb4"); // PERMITINDO CARACTERES ESPECIAIS NO FRONT END;
    if (!$conn) {
        die("Conexão falhou: " . mysqli_connect_error());
    } 
?>
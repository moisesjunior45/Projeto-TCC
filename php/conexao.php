<?php
    $servidor = "localhost";  // Endereço local
    $dbname = "cadastro";  // Nome do banco
    $dbusuario = "root"; // usuário do banco
    $dbsenha = ""; // senha usuário do banco
    $conn =mysqli_connect($servidor, $dbusuario, $dbsenha, $dbname);

    if (!$conn) {
            die("Conexão falhou: ". mysqli_connect_error());
    }
?>
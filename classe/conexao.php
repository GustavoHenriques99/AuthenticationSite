<?php
//--Arquico de conexão com o banco de dados

// Ativa relatório de erros do MySQLi
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try {
    
    $hostname = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "sistema_login";

    $mysqli = new mysqli($hostname, $usuario, $senha, $banco);

    // Define padrão de caracteres
    $mysqli->set_charset("utf8mb4");

} catch (mysqli_sql_exception $e) {
    die("Erro na conexão com o banco de dados: " . $e->getMessage());
}
?>

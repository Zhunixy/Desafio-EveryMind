<?php

// Conexão no BANCO
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "empresa";

$conexao = mysqli_connect($servidor, $usuario, $senha, $banco) or die;

// Verificar a conexão
if (!$conexao) {
    die("Falha na conexão: " . mysqli_connect_error());
}

?>
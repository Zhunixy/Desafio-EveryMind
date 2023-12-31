<?php

include 'conexao.php';

$codigo = $_GET['codigo'];
$consulta = "DELETE FROM produtos WHERE codigo = $codigo";

mysqli_query($conexao, $consulta);

header('Location: visualizar_produto.php');

?>

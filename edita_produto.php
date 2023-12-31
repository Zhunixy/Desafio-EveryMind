<?php

include 'conexao.php';

$codigo = $_POST['codigo'];
$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$preco = $_POST['preco'];

$consulta = "UPDATE produtos SET
nome = '$nome',
descricao = '$descricao',
preco = $preco
WHERE codigo = $codigo";

mysqli_query($conexao, $consulta);

header('location: visualizar_produto.php');
?>
<?php

include 'conexao.php';

$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$preco = $_POST['preco'];

$query = "INSERT INTO produtos(nome, descricao, preco) VALUES ('$nome', '$descricao', $preco)";

mysqli_query($conexao, $query);

header('Location: visualizar_produto.php');

?>
<!doctype html>
<html lang="pt-BR">
<head>
    <title>Produtos</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/produto.css">
</head>
<body>

<?php
if (!isset($_GET['edita'])){
?>
    <form method="POST" action="adiciona_produto.php">

    <h3>Cadastramento Dos Produtos</h3></br>
        
        <label>Nome:</label>
        <input type="text" name="nome" placeholder="Digite O Nome"> </br></br>

        <label>Descrição</label>
        <input type="text" name="descricao" placeholder="Digite A Descrião"> </br></br>

        <label>Preço</label>
        <input type="number" name="preco" placeholder="Digite O Preço"> </br></br>

        <input type="submit" value="Cadastrar">
        <button><a href="index.php">Voltar</a></button>
    </form>

    <?php }else{ ?>
<?php include 'conexao.php';            
    $consulta = "SELECT * FROM produtos";
    $consulta2 = mysqli_query($conexao, $consulta);

    while($linha = mysqli_fetch_array($consulta2)){ ?>
    <?php if($linha['codigo'] == $_GET['edita']){ ?>

    <form method="POST" action="edita_produto.php">

<h3>Editar produto</h3></br>

    <input type="hidden" name="codigo" value="<?php echo $linha['codigo']; ?>" />
    <label>Nome:</label>
    <input type="text" name="nome" value="<?php echo $linha['nome'];?>"> </br></br>

    <label>Descrição</label>
    <input type="text" name="descricao" value="<?php echo $linha['descricao'];?>"> </br></br>

    <label>Preço</label>
    <input type="text" name="preco" value="<?php echo $linha['preco'];?>"> </br></br>

    <input type="submit" value="Editar"> </br></br>
    </form>

    <?php } ?>  <!--FECHA CHAVE DO IF-->
            <?php } ?> <!--FECHA CHAVE DO WHILE-->
        <?php } ?> <!--FECHA CHAVE DO ELSE-->

    </body>
</hmtl>
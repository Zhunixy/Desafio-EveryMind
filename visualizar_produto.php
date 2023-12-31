<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualizar Alunos</title>
    <link rel="stylesheet" href="css/visualizar.css">

    <style>
        body {
            width: 50%;
        }
    </style>
</head>

<body>

<?php include 'conexao.php'; ?>

    <table style="border: 2px solid #ccc">
        <thead>
            <tr>
                <th>Nome do Produto</th>
                <th>Descrição</th>
                <th>Preço</th>
                <th>Editar</th>
                <th>Deletar</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include 'conexao.php';
            $consulta = "SELECT * FROM produtos";
            $consulta_produto = mysqli_query($conexao, $consulta);

            while ($linha = mysqli_fetch_array($consulta_produto)) {
                echo '<tr><td>' . $linha['nome'] . '</td>';
                echo '<td>' . $linha['descricao'] . '</td>';
                echo '<td>' . $linha['preco'] . '</td>';
                ?>
                <td>
                    <a href="produto.php?edita=<?php echo $linha['codigo']; ?>">
                        <input type="submit" value="EDITAR" />
                    </a>
                </td>

                <td>
                    <a href="deleta_produto.php?codigo=<?php echo $linha['codigo']; ?>">
                        <input type="submit" value="DELETAR" />
                    </a>
                </td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>

    <button class="btn"><a href="produto.php"> Voltar</a></button>
</body>

</html>
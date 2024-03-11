<?php
    include 'conexao.php';
    $nroproduto = $_POST['nroproduto'];
    $nomeproduto = $_POST['nomeproduto'];
    $categoria = $_POST['categoria'];
    $quantidade = $_POST['quantidade'];
    $fornecedor = $_POST['fornecedor'];
    //echo $sql = "INSERT INTO `estoque`(`nroproduto`, `nomeproduto`, `categoria`, `quantidade`, `fornecedor`) VALUES ($nroproduto, '$nomeproduto','$categoria', $quantidade,'$fornecedor')";
    $sql = "INSERT INTO `estoque`(`nroproduto`, `nomeproduto`, `categoria`, `quantidade`, `fornecedor`) VALUES ($nroproduto, '$nomeproduto','$categoria', $quantidade,'$fornecedor')";
    $inserir = mysqli_query($conexao,$sql);
?>
<!--CSS-->
<link rel="stylesheet" href="/css/estilo.css">
<html>
    <header>
        <nav class="navbar">
            <h2>Gestão de estoque</h2>
            <ul class="nav">
                <li>
                    <a href="index.php">Página Inicial</a>
                </li>
            </ul>
        </nav>
    </header>
    <div class="container">
        <center>
            <h2>Produto adicionado com sucesso!</h2>
        <center>
            <div style="padding-top: 20px">
        <center>
            <button type="button" class="btn-cadastrar">
                <a href="adicionar_produto.php" role="button">Cadastrar novo item</a>
            </button>
        </center>
    </div>
</html>
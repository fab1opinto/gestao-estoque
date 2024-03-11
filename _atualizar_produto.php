<?php
    include 'conexao.php';
    $id = $_POST['id'];
    //$nroproduto = $_POST['nroproduto'];
    $nomeproduto = $_POST['nomeproduto'];
    $categoria = $_POST['categoria'];
    $quantidade = $_POST['quantidade'];
    $fornecedor = $_POST['fornecedor'];
    $sql = "UPDATE `estoque` SET `nomeproduto`='$nomeproduto',`categoria`='$categoria',`quantidade`=$quantidade,`fornecedor`='$fornecedor' WHERE id_estoque = $id";
    $atualizar = mysqli_query($conexao, $sql);
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
            <div style="margin-top: 20px">
                <h1>Atualizado com Sucesso</h1>
            <br />
            <button type="button" class="btn-cadastro">
                <a href="listar_produtos.php">Voltar</a>
            </button>
            </div>
        </center>
    </div>
</html>
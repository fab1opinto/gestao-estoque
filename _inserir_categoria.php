<?php
    include 'conexao.php';
    $categoria = $_POST['categoria'];
    $sql = "INSERT INTO `categoria`(`categoria`) VALUES ('$categoria')";
    $inserir = mysqli_query($conexao, $sql);
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
                <h2>Adicionado com Sucesso</h2>
            <br />
            <button type="button" class="btn-cadastrar">
                <a href="adicionar_categoria.php" class="btn btn-warning" style="color:#fff">Voltar</a>
            </button>
            </div>
        </center>
    </div>
</html>
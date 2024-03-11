<?php
    include 'conexao.php';
    $id = $_GET['id'];
    $sql = "DELETE FROM `categoria` WHERE id_categoria = $id";
    $deletar = mysqli_query($conexao, $sql);
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
                <h2>Deletado com Sucesso</h1>
            <br />
            <button type="button" class="btn-cadastro">
                <a href="listar_categoria.php">Voltar</a>
            </button>
            </div>
        </center>
    </div>
</html>
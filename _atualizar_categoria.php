<?php
    include 'conexao.php';
    $id = $_POST['id'];
    //$nroproduto = $_POST['nroproduto'];
    $categoria = $_POST['categoria'];
    $sql = "UPDATE `categoria` SET `categoria`='$categoria' WHERE id_categoria = $id";
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
                <h2>Atualizado com Sucesso</h2>
            <br />
            <button type="button" class="btn-cadastro">
                <a href="listar_categoria.php">Voltar</a>
            </button>
            </div>
        </center>
    </div>
</html>
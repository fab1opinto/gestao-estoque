<?php
    include 'conexao.php';
    $id = $_GET['id'];
?>

<!--CSS-->
<link rel="stylesheet" href="/css/editar_categoria.css">
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
        <h2>Formulário de Edição</h2>
        <form method="POST" action="_atualizar_categoria.php">
            <?php
            $sql = "SELECT * FROM `categoria` WHERE id_categoria = $id";
            $buscar = mysqli_query($conexao, $sql);
            while($array = mysqli_fetch_array($buscar)) {
                    $id_categoria = $array['id_categoria'];
                    $categoria = $array['categoria'];   
            ?>
            <div class="form-group">
                <label>Nome Categoria</label>
                <input type="text" class="form-control" name="categoria" id="" value="<?php echo $categoria?>">
                <input type="text" class="form-control" name="id" id="" value="<?php echo $id_categoria?>" style="display: none">
            </div>
            <div class="cadastro">
                <button type="submit" class="btn-cadastro">Atualizar</button>
            </div>
            <?php } ?>
        </form>
    </div>
</html>



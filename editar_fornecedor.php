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
        <form method="POST" action="_atualizar_fornecedor.php">
            <?php
            $sql = "SELECT * FROM `fornecedor` WHERE id_forn = $id";
            $buscar = mysqli_query($conexao, $sql);
            while($array = mysqli_fetch_array($buscar)) {
                    $id_forn = $array['id_forn'];
                    $nome_forn = $array['nome_forn'];   
            ?>
            <div class="form-group">
                <label>Nome Fornecedor</label>
                <input type="text" class="form-control" name="nome_forn" id="" value="<?php echo $nome_forn?>">
                <input type="text" class="form-control" name="id_forn" id="" value="<?php echo $id_forn?>" style="display: none">
            </div>
            <div class="cadastro">
                <button type="submit" class="btn-cadastro">Atualizar</button>
            </div>
            <?php } ?>
        </form>
    </div>
</html>



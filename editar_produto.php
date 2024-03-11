<?php
    include 'conexao.php';
    $id = $_GET['id'];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestão Estoque</title>
    <!--CSS-->
    <link rel="stylesheet" href="/css/editar_produto.css">
<body>
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
    <main>
        <div class="container">
            <h2>Formulário de Cadastro</h2>
            <form method="POST" action="_atualizar_produto.php">
                <?php
                $sql = "SELECT * FROM `estoque` WHERE id_estoque = $id";
                $buscar = mysqli_query($conexao, $sql);
                while($array = mysqli_fetch_array($buscar)) {
                        $id_estoque = $array['id_estoque'];
                        $nroproduto = $array['nroproduto'];
                        $nomeproduto = $array['nomeproduto'];
                        $categoria = $array['categoria'];
                        $quantidade = $array['quantidade'];
                        $fornecedor = $array['fornecedor'];
                ?>
                <div class="form-group">
                    <label>Número do Produto</label>
                    <input type="number" class="form-control" name="nroproduto" id="" value="<?php echo $nroproduto?>" disabled>
                    <input type="number" class="form-control" name="id" id="" value="<?php echo $id?>" style="display: none">
                </div>
                <div class="form-group">
                    <label>Nome do Produto</label>
                    <input type="text" class="form-control" name="nomeproduto" id="" value="<?php echo $nomeproduto?>">
                </div>
                <div class="form-group">
                    <label>Categoria</label>
                    <select class="form-control" name="categoria">
                    <?php
                        include 'conexao.php';
                        $sql = "SELECT * FROM categoria order by categoria ASC";
                        $buscar = mysqli_query($conexao, $sql);
                        while ($array = mysqli_fetch_array($buscar)) {
                            $id_categoria = $array['id_categoria'];
                            $nome_categoria = $array['categoria'];
                        ?>
                        <option><?php echo $nome_categoria ?></option>
                    <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Quantidade</label>
                    <input type="number" class="form-control" name="quantidade" id="" value="<?php echo $quantidade ?>">
                </div>
                <div class="form-group">
                    <label>Fornecedor</label>
                    <select class="form-control" name="fornecedor">
                    <?php
                        include 'conexao.php';
                        $sql2 = "SELECT * FROM fornecedor";
                        $buscar2 = mysqli_query($conexao, $sql2);
                        while ($array2 = mysqli_fetch_array($buscar2)) {
                            $id_fornecedor = $array2['id_forn'];
                            $nome_fornecedor = $array2['nome_forn'];
                        ?>
                        <option><?php echo $nome_fornecedor ?></option>
                    <?php } ?>
                    </select>
                </div>
                <div class="cadastro">
                    <button type="submit" class="btn-cadastro">Atualizar</button>
                </div>
                <?php } ?>
            </form>
        </div>
        <!--<div class="container" id="tamanho-container">
            <h4>Formulário de Cadastro</h4>
            <form method="POST" action="_atualizar_produto.php">
                <?php
                $sql = "SELECT * FROM `estoque` WHERE id_estoque = $id";
                $buscar = mysqli_query($conexao, $sql);
                while($array = mysqli_fetch_array($buscar)) {
                        $id_estoque = $array['id_estoque'];
                        $nroproduto = $array['nroproduto'];
                        $nomeproduto = $array['nomeproduto'];
                        $categoria = $array['categoria'];
                        $quantidade = $array['quantidade'];
                        $fornecedor = $array['fornecedor'];
                ?>
                <div class="form-group">
                    <label>Número do Produto</label>
                    <input type="number" class="form-control" name="nroproduto" id="" value="<?php echo $nroproduto?>" disabled>
                    <input type="number" class="form-control" name="id" id="" value="<?php echo $id?>" style="display: none">
                </div>

                <div class="form-group">
                    <label>Nome do Produto</label>
                    <input type="text" class="form-control" name="nomeproduto" id="" value="<?php echo $nomeproduto?>">
                </div>

                <div class="form-group">
                    <label>Categoria</label>
                    <select class="form-control" name="categoria">
                        <option>Periféricos</option>
                        <option>Hardware</option>
                        <option>Software</option>
                        <option>Celulares</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Quantidade</label>
                    <input type="number" class="form-control" name="quantidade" id="" value="<?php echo $quantidade ?>">
                </div>

                <div class="form-group">
                    <label>Fornecedor</label>
                    <select class="form-control" name="fornecedor">
                        <option>Fornecedor A</option>
                        <option>Fornecedor B</option>
                        <option>Fornecedor C</option>
                    </select>
                </div>

                <div class="cadastro">
                    <button type="submit" class="btn btn-success">Atualizar</button>
                </div>
                <?php } ?>
            </form>
        </div>-->
    </main>
</body>
</html>


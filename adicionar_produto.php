<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Produto</title>
    <!--CSS-->
    <link rel="stylesheet" href="/css/adicionar_produto.css">
</head>
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
            <div class="topo">
                <p>Formulário de Cadastro</p>
            </div>
            <form method="POST" action="_inserir_produto.php" class="">
                <div class="form-class">
                    <label>Número do Produto</label>
                    <input type="number" class="form-control" name="nroproduto" id="" required placeholder="Insira o número do produto">
                </div>
                <div class="form-class">
                    <label>Nome do Produto</label>
                    <input type="text" class="form-control" name="nomeproduto" id="" required placeholder="Insira o nome do produto">
                </div>
                <div class="form-class">
                    <label>Categoria</label>
                    <select class="form-control" name="categoria" required>
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
                <div class="form-class">
                    <label>Quantidade</label>
                    <input type="number" class="form-control" name="quantidade" id="" required placeholder="Insira a quantidade de produto" autocomplete="off">
                </div>
                <div class="form-class">
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
                    <button type="submit" class="btn-cadastro">Cadastrar</button>
                </div>
            </form>
        </div>
    </main>
</body>
</html>


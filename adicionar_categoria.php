<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Categoria</title>
    <!--CSS-->
    <link rel="stylesheet" href="/css/estilo.css">
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
            <p>Cadastro de Categoria</p>
            <form action="_inserir_categoria.php" method="POST">
                <label>Categoria</label>
                <div class="form-group">
                    <input type="text" name="categoria" class="form-control" placeholder="Digite o nome da categoria" autocomplete="off">
                </div>
                <div class="botao">
                    <button type="submit" class="btn-cadastro">Cadastrar</button>
                </div>
            </form>
        </div>
    </main>
</body>
</html>


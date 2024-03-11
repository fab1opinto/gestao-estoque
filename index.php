<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestão de Estoque</title>
    <!--CSS-->
    <link rel="stylesheet" href="/css/index.css" >
    <!--Box Icons-->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <header>
        <nav class="navbar">
            <h2>Gestão de estoque</h2>
        </nav>
    </header>
    <main>
        <div class="container">
            <div class="imagem">
                <img src="./imagens/controle.png" class="img"/>
            </div>
            <div class="opcoes">
                <div class="links">
                    <div class="icon">
                        <i class='bx bxs-save'></i>
                    </div>
                    <div class="link-area">
                        <p>Opção para adicionar produtos em nosso estoque</p>
                        <button type="button" class="btn-add">
                            <a href="adicionar_produto.php">Cadastrar Produtos</a>
                        </button>
                    </div>
                </div>
                <div class="links">
                    <div class="icon">
                        <i class='bx bxs-save'></i>
                    </div>
                    <div class="link-area">
                        <p>Opção para adicionar categoria de produtos em nosso estoque</p>
                        <button type="button" class="btn-add">
                            <a href="adicionar_categoria.php">Cadastrar Categorias</a>
                        </button>
                    </div>
                </div>
                <div class="links">
                    <div class="icon">
                        <i class='bx bxs-save'></i>
                    </div>
                    <div class="link-area">
                        <p>Opção para adicionar fornecedores em nosso estoque</p>
                        <button type="button" class="btn-add">
                            <a href="adicionar_fornecedor.php">Cadastrar Fornecedores</a>
                        </button>
                    </div>
                </div>
                <div class="links">
                    <div class="icon">
                        <i class='bx bx-edit-alt'></i>
                    </div>
                    <div class="link-area">
                        <p>Visualizar, Editar e Excluir os Produtos em nosso estoque</p>
                        <button type="button" class="btn-add">
                            <a href="listar_produtos.php">Listar Produtos</a>
                        </button>
                    </div>
                </div>
                <div class="links">
                    <div class="icon">
                        <i class='bx bx-edit-alt'></i>
                    </div>
                    <div class="link-area">
                        <p>Opção para listar categorias de produtos em nosso estoque</p>
                        <button type="button" class="btn-add">
                            <a href="listar_categoria.php">Listar Categorias</a>
                        </button>
                    </div>
                    <div class="link-area">
                        <p>Opção para listar fornecedores de produtos em nosso estoque</p>
                        <button type="button" class="btn-add">
                            <a href="listar_fornecedor.php">Listar Fornecedores</a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>


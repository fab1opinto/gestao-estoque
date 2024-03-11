<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Produtos</title>
    <!--CSS-->
    <link rel="stylesheet" href="/css/listar_produtos.css">
    <!--FontAwesome-->
    <script src="https://kit.fontawesome.com/8e60cd9016.js" crossorigin="anonymous"></script>
    <!--FontAwesome - CDN-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
      <p>Lista de Produtos</p>
      <table>
        <thead>
          <tr>
            <td>Número Produto</td>
            <td>Nome Produto</td>
            <td>Categoria</td>
            <td>Quantidade</td>
            <td>Fornecedor</td>
            <td>Ação</td>
          </tr>
        </thead>
          <?php
          include 'conexao.php';
          $sql = "SELECT * FROM `estoque`";
          $busca = mysqli_query($conexao, $sql);
          while ($array = mysqli_fetch_array($busca)) {
              $id_estoque = $array['id_estoque'];
              $nroproduto = $array['nroproduto'];
              $nomeproduto = $array['nomeproduto'];
              $categoria = $array['categoria'];
              $quantidade = $array['quantidade'];
              $fornecedor = $array['fornecedor'];
          ?>
          <tr>
            <td><?php echo $nroproduto ?></td>
            <td><?php echo $nomeproduto ?></td>
            <td><?php echo $categoria ?></td>
            <td><?php echo $quantidade ?></td>
            <td><?php echo $fornecedor ?></td>
            <td>
              <button type="button" class="btn-amarelo">
                <a href="editar_produto.php?id=<?php echo $id_estoque ?>" role="button"><i class="far fa-edit"></i>&nbsp;Editar</a>
              </button>
              <button type="button" class="btn-vermelho">
                <a href="deletar_produto.php?id=<?php echo $id_estoque ?>" role="button"><i class="far fa-trash-alt"></i>&nbsp;Excluir</a>
              </button>
            </td>
            <?php } ?>
        </tr>
      </table>
    </div>
  </main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
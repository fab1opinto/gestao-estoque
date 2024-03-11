<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Fornecedores</title>
    <!--CSS-->
    <link rel="stylesheet" href="/css/listar_categoria.css">
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
      <p>Lista de Fornecedores</p>
      <table>
        <thead>
          <tr>
            <td>Nome Fornecedor</td>
            <td>Ação</td>
          </tr>
        </thead>
          <?php
            include 'conexao.php';
            $sql = "SELECT * FROM `fornecedor`";
            $busca = mysqli_query($conexao, $sql);
            while ($array = mysqli_fetch_array($busca)) {
                $id_forn = $array['id_forn'];
                $nome_forn = $array['nome_forn'];        
          ?>
          <tr>
            <td><?php echo $fornecedor ?></td>
            <td>
              <button type="button" class="btn-amarelo">
                <a href="editar_fornecedor.php?id=<?php echo $id_categoria ?>" role="button"><i class="far fa-edit"></i>&nbsp;Editar</a>
              </button>
              <button type="button" class="btn-vermelho">
                <a href="deletar_fornecedor.php?id=<?php echo $id_categoria ?>" role="button"><i class="far fa-trash-alt"></i>&nbsp;Excluir</a>
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
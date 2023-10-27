<?php
  session_start();
  include_once('conexao.php');

  $sql = "SELECT * FROM usuario ORDER BY id_usuario DESC";

  $result = $conectar->query($sql);

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>Usuarios - Sistema de Vendas</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/checkout/">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">
  </head>
  <body class="text-center">
  <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#">Sistema de Vendas</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3" href="logout.php">Sair</a>
    </div>
  </div>
</header>
  <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">      
          <li class="nav-item">
            <a class="nav-link" href="pedidos.php">
              <span data-feather="file" class="align-text-bottom"></span>
              Pedidos
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="produtos.php">
              <span data-feather="shopping-cart" class="align-text-bottom"></span>
              Produtos
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="clientes.php">
              <span data-feather="users" class="align-text-bottom"></span>
              Clientes
            </a>
          </li>
		  <li class="nav-item">
            <a class="nav-link" href="usuarios.php">
              <span data-feather="users" class="align-text-bottom"></span>
              Usuários
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="relatorio.php">
              <span data-feather="bar-chart-2" class="align-text-bottom"></span>
              Relatórios
            </a>
          </li>         
        </ul>      
      </div>
    </nav>
    
    <main class="form-signin w-100 m-auto">
  <form action="salvarusuario.php" method="POST">
    <img class="mb-4" src="img/bootstrap-logo.svg" alt="" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal">Cadastrar Usuario</h1>

    <div class="form-floating">
      <input type="nome" name="nome" class="form-control" id="floatinguser" required placeholder="Nome">
      <label for="floatinguser">Nome</label>
    </div>
    <div class="form-floating">
      <input type="email" name="email" class="form-control" id="floatingInput" required placeholder="name@example.com">
      <label for="floatingInput">Email</label>
    </div>
    <div class="form-floating">
      <input type="password" name="senha"class="form-control" id="floatingPassword" required placeholder="Senha">
      <label for="floatingPassword">Senha</label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" nome="submit" type="submit">Cadastrar</button>
  </form>
  <table class="table">
      <thead>
        <tr>
          <th scope="col">Nome</th>
          <th scope="col">Email</th>
        </tr>
      </thead>
      <tbody>
        <?php
          while($cliente_user = mysqli_fetch_assoc($result)){
            echo "<tr>";
            echo "<td>" .$cliente_user['nome']. "</td>";
            echo "<td>" .$cliente_user['email']. "</td>";
            
          }
        ?>
      </tbody>
    </table>

    <p class="mt-5 mb-3 text-muted">&copy; Modificado por Jose Mario - 2023</p>
  </form>
</main>  

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>


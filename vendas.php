<?php
include_once('conexao.php') ;
session_start();
$sql = "SELECT * FROM produtos";
$resultado = $conectar->query($sql);
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>Sistema de Vendas</title>

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
<main class="form-signin w-100 m-auto">
  <form action="cadastrarprod.php" method="POST">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Produto</th>
          <th scope="col">Preço</th>
        </tr>
      </thead>
      <tbody>
        <?php
          while($user_data = mysqli_fetch_assoc($resultado)){
            echo "<tr>";
            echo "<td>" .$user_data['produto']. "</td>";
            echo "<td>" .$user_data['preco']. "</td>";
            echo "<td>
                <a class='btn btn-sm btn-primary' href='comprar.php?id=$user_data[id]; ?>'>Comprar</a>
            </td>";
            echo "</tr>";
          }
        ?>
      </tbody>
    </table>

    <p class="mt-5 mb-3 text-muted">&copy; Modificado por Jose Mario & Renata Pilonetto - 2023</p>
  </form>
</main>  

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

  </body>
</html>
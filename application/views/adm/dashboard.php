<?php

defined('BASEPATH') or exit('No direct script access allowed');
if (empty($usuario->userdata['nome_completo'])) {
  header('Location: ../../');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Adm Dashboard</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <style>
    li,
    thead {
      font-weight: bold;
    }

    strong,
    footer {
      font-family: "serif";
    }

    table {
      margin-top: 30px;
    }
  </style>
</head>

<body class="blue-grey darken-4">
  <div class="navbar-fixed">
    <nav class="black">
      <div class="container">
        <div class="nav-wrapper">
          <a href="#" class="blue-text brand-logo">
            <i class="material-icons">business</i><strong>'Abū Zabī: </strong>
            <small><em><?php echo $usuario->userdata['nome_completo'] ?></em></small>
          </a>
          <a href="#" data-target="mobile" class="sidenav-trigger">
            <i class="material-icons">menu</i>
          </a>
          <ul class="right hide-on-med-and-down">
            <li>
              <a href="sair" class="blue waves-effect waves-light btn">sair</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>

  <ul id="mobile" class="sidenav">
    <li>
      <a href="sair" class="blue waves-effect waves-light btn">sair</a>
    </li>
  </ul>
  </div>

  <div class="row">
    <form action="#" method="GET" class="col s12">
      <div class="row">
        <!-- PROXIMA TAREFA FAZER PESQUISA DE CLIENTES -->
        <div class="input-field col s3"></div>
      </div>
    </form>
  </div>

  <table class="white-text responsive-table">
    <thead>
      <tr>
        <td>Nome Completo</td>
        <td>Nome Usuário</td>
        <td>Email</td>
        <td>Celular</td>
        <td>Data Nascimento</td>
        <td>Endereço</td>
        <td>N° Casa</td>
        <td>Bairro</td>
        <td>Cidade</td>
        <td>Estado</td>
        <td>CPF</td>
        <td>Plano</td>
        <td>Editar</td>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($alunos as $i) { ?>
        <tr>
          <td><?php echo $i->nome_completo ?></td>
          <td><?php echo $i->nome_usuario ?></td>
          <td><?php echo $i->email ?></td>
          <td><?php echo $i->celular ?></td>
          <td><?php echo $i->data_nascimento ?></td>
          <td><?php echo $i->endereco ?></td>
          <td><?php echo $i->numero_casa ?></td>
          <td><?php echo $i->bairro ?></td>
          <td><?php echo $i->cidade ?></td>
          <td><?php echo $i->estado ?></td>
          <td><?php echo $i->cpf ?></td>
          <td><?php echo $i->titulo ?></td>
          <!-- função editar e depois excluir cliente -->
          <td><a href="/<?php echo $i->id ?>"><i class="material-icons">edit</i></a></td>
        </tr>
      <?php } ?>
    </tbody>
  </table>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>

</html>
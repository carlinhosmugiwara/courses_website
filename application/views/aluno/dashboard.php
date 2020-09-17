<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<?php $base_url = 'http://localhost/curso_bitcoin/' ?>
<?php if (empty($usuario->userdata['estado'])) header('Location: ../../'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <style>
    body {
      background: url('<?php echo $base_url ?>assets/business_wallpaper.jpg') no-repeat center center fixed;
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
      display: flex;
      min-height: 100vh;
      flex-direction: column;
    }

    li {
      font-weight: bold;
    }

    .main {
      flex: 1 0 auto;
    }

    strong,
    footer {
      font-family: "serif";
    }

    nav {
      background-color: rgba(0, 0, 0, 0.8);
    }

    .bloco {
      margin-top: 20px;
      margin-bottom: 20px;
      display: inline-flex;
    }

    .preco {
      display: flex;
      flex-direction: row;
      justify-content: center;
      align-items: center;
      margin-bottom: 10px;
    }

    .esquerda {
      margin-left: 100px;
    }

    .card-panel {
      text-align: center;
      margin-right: 100px;
      width: 200px;
    }

    .card-title {
      font-weight: bold;
    }

    footer {
      margin-top: 100px;
    }
  </style>
</head>

<body>
  <div class="main">

    <div class="navbar-fixed">
      <nav>
        <div class="container">
          <div class="nav-wrapper">
            <a href="#" class="yellow-text text-accent-2 brand-logo">
              <i class="material-icons">business</i><strong>'Abū Zabī: </strong>
              <small><em><?php echo $usuario->userdata['nome_user'] ?></em></small>
            </a>
            <a href="#" data-target="mobile" class="sidenav-trigger">
              <i class="material-icons">menu</i>
            </a>
            <ul class="right hide-on-med-and-down">
              <li><a href="../aluno/minha_conta" class="yellow-text text-accent-2">
                  Minha conta</a></li>
              <li><a href="../aluno/tickets" class="yellow-text text-accent-2">Tickets</a></li>
              <li><a href="../aluno/financeiro" class="yellow-text text-accent-2">
                  Financeiro</a></li>
              <li><a href="../aluno/downloads" class="yellow-text text-accent-2">
                  Downloads</a></li>
              <li>
                <a href="sair" class="red darken-4 waves-effect waves-light btn">
                  sair</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>

    <ul id="mobile" class="sidenav">
      <li><a href="../aluno/minha_conta" class="blue-text">Minha conta</a></li>
      <li><a href="../aluno/tickets" class="blue-text">Tickets</a></li>
      <li><a href="../aluno/financeiro" class="blue-text">Financeiro</a></li>
      <li><a href="../aluno/downloads" class="blue-text">Downloads</a></li>
      <li>
        <a href="sair" class="blue waves-effect waves-light btn">sair</a>
      </li>
    </ul>
  </div>

  <div class="row">
    <div class="col s12 m4">
      <div class="bloco">
        <div class="esquerda"></div>
        <div class="card-panel cyan">
          <div class="card-content">
            <span class="card-title">Saldo corrente</span>
            <div class="black divider"></div>
            <p>
              <div class="preco">R$ <h5>0</h5>,00</div>
            </p>
            <p>Em breve<i class="material-icons">build</i></p>
          </div>
        </div>

        <div class="card-panel cyan">
          <div class="card-content">
            <span class="card-title">Disponível saque</span>
            <div class="black divider"></div>
            <p>
              <div class="preco">R$ <h5>0</h5>,00</div>
            </p>
            <p>Em breve<i class="material-icons">build</i></p>
          </div>
        </div>

        <div class="card-panel cyan">
          <div class="card-content">
            <span class="card-title">Status plano</span>
            <div class="black divider"></div>
            <p>
              <div class="preco">R$ <h5>0</h5>,00</div>
            </p>
            <p>Em breve<i class="material-icons">build</i></p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer class="grey darken-4 page-footer">
    <div class="container">
      <div class="row">
        <div class="col 16 s12">
          <i class="tiny material-icons">business</i>
          <em>"O que separa os bem-sucedidos dos outros é a persistência" - Lisa M. Amos</em>
        </div>
      </div>
    </div>

    <div class="footer-copyright">
      <div class="container">
        © 2019 'Abū Zabī
      </div>
    </div>
  </footer>

  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script>
    $(document).ready(function() {
      $('.sidenav').sidenav();
    });
  </script>

</body>

</html>
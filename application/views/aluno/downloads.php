<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Downloads</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <style>
    body {
      background-color: #d5d9e0;
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

    .lista {
      text-align: center;
    }

    .divider {
      margin-bottom: 20px;
    }

    footer {
      margin-top: 250px;
    }
  </style>

</head>

<body>
  <div class="main">

    <div class="navbar-fixed">
      <nav class="black">
        <div class="container">
          <div class="nav-wrapper">
            <a href="../aluno/dashboard" class="blue-text brand-logo">
              <i class="material-icons">business</i><strong>'Abū Zabī: </strong>
              <small><em><?php echo $usuario->userdata['nome_user'] ?></em></small>
            </a>
            <a href="#" data-target="mobile" class="sidenav-trigger">
              <i class="material-icons">menu</i>
            </a>
            <ul class="right hide-on-med-and-down">
              <li><a href="../aluno/minha_conta" class="blue-text">Minha conta</a></li>
              <li><a href="../aluno/tickets" class="blue-text">Tickets</a></li>
              <li><a href="../aluno/financeiro" class="blue-text">Financeiro</a></li>
              <li><a href="#" class="blue-text">Downloads</a></li>

              <li>
                <a href="sair" class="blue waves-effect waves-light btn">sair</a>
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
      <li><a href="#" class="blue-text">Downloads</a></li>
      <li><a href="../quem_somos" class="blue-text">Quem somos</a></li>
      <li>
        <a href="sair" class="blue waves-effect waves-light btn">sair</a>
      </li>
    </ul>
  </div>

  <div class="lista">
    <div class="grey divider"></div>
    <div class="row">
      <div class="col s6">Apresentação</div>
      <div class="col s6">
        <a href="../../index.php/downloads/apresentacao_slide">
          <i class="material-icons">file_download</i>
        </a>
      </div>
    </div>
    <div class="grey divider"></div>
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
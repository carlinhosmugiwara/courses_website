<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Planos</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <style>
    body {
      background-color: #d5d9e0;
      display: flex;
      min-height: 100vh;
      flex-direction: column;
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

    .main {
      flex: 1 0 auto;
    }

    strong,
    footer {
      font-family: "serif";
    }

    h6, li {
      font-weight: bold;
    }

    .card-panel {
      text-align: center;
      margin-right: 100px;
      width: 200px;
    }

    .esquerda {
      margin-left: 100px;
    }

    .navbar-fixed {
      margin-bottom: 30px;
    }

    footer {
      margin-top: 30px;
    }
  </style>

</head>

<body>
  <div class="main">
    <div class="navbar-fixed">
      <nav class="black">
        <div class="container">
          <div class="nav-wrapper">
            <a href="#" class="blue-text brand-logo">
              <i class="material-icons">business</i><strong>'Abū Zabī</strong>
            </a>
            <a href="#" data-target="mobile" class="sidenav-trigger">
              <i class="material-icons">menu</i>
            </a>
            <ul class="right hide-on-med-and-down">
              <li><a href="../" class="blue-text">Início</a></li>
              <li><a href="#" class="blue-text">Planos</a></li>
              <li><a href="../index.php/quem_somos" class="blue-text">Quem somos</a></li>
              <li>
                <a href="../index.php/aluno" class="blue waves-effect waves-light btn">Entrar</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>

    <ul id="mobile" class="sidenav">
      <li><a href="#" class="blue-text">Início</a></li>
      <li><a href="#" class="blue-text">Planos</a></li>
      <li><a href="index.php/quem_somos" class="blue-text">Quem somos</a></li>
      <li>
        <a href="index.php/aluno" class="blue waves-effect waves-light btn">Entrar</a>
      </li>
    </ul>

    <!-- PRIMEIRA COLUNA -->

    <div class="row">
      <div class="col s12 m4">
        <div class="bloco">
          <div class="esquerda"></div>
          <?php for ($i = 0; $i < 4; $i++) { ?>
            <div class="card-panel blue-grey lighten-2">
              <h6><?php echo $planos[$i]->titulo ?></h6>
              <div class="preco">R$ <h5><?php echo $planos[$i]->preco ?></h5>,00</div>
              <a href="../index.php/aluno/cadastro_plano/<?php echo $planos[$i]->id ?>" class="blue waves-effect waves-light btn">
                invista já!
              </a>
            </div>
          <?php } ?>
        </div>
      </div>
    </div>


    <!-- SEGUNDA COLUNA -->

    <div class="row">
      <div class="col s12 m4">
        <div class="bloco">
          <div class="esquerda"></div>
          <?php for ($i = 4; $i < 8; $i++) { ?>
            <div class="card-panel blue-grey lighten-2">
              <h6><?php echo $planos[$i]->titulo ?></h6>
              <div class="preco">R$ <h5><?php echo  $planos[$i]->preco ?></h5>,00</div>
              <a href="../index.php/aluno/cadastro_plano/<?php echo $planos[$i]->id ?>" class="blue waves-effect waves-light btn">
                invista já!
              </a>
            </div>
          <?php } ?>
        </div>
      </div>
    </div>


    <!-- TERCEIRA COLUNA -->

    <div class="row">
      <div class="col s12 m4">
        <div class="bloco">
          <div class="esquerda"></div>
          <div class="esquerda"></div>
          <div class="esquerda"></div>
          <div class="esquerda"></div>

          <?php for ($i = 8; $i < 10; $i++) { ?>
            <div class="card-panel blue-grey lighten-2">
              <h6><?php echo $planos[$i]->titulo ?></h6>
              <div class="preco">R$ <h5><?php echo  $planos[$i]->preco  ?></h5>,00</div>
              <a href="../index.php/aluno/cadastro_plano/<?php echo $planos[$i]->id ?>" class="blue waves-effect waves-light btn">
                invista já!
              </a>
            </div>
          <?php } ?>
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
<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<?php $base_url = 'http://localhost/curso_bitcoin/' ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Quem Somos</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <style>
    body {
      background: url('<?php echo $base_url ?>assets/nasa_lights.jpg') no-repeat center center fixed;
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
      display: flex;
      min-height: 100vh;
      flex-direction: column;
    }

    .main {
      flex: 1 0 auto;
    }

    strong,
    footer {
      font-family: "serif";
    }

    li {
      font-weight: bold;
    }

    footer {
      margin-top: 30px;
    }

    .navbar-fixed {
      margin-bottom: 30px;
    }

    .card-title {
      text-align: center;
    }

    .card {
      border: 10px;
      border-radius: 20px;
      margin-top: 25px;
    }

    img {
      width: 950px;
      border-radius: 20px;
      margin-top: 30px;
      margin-bottom: 30px;
    }
  </style>
</head>

<body>
  <div class="main">
    <div class="navbar-fixed">
      <nav class="grey darken-4">
        <div class="container">
          <div class="nav-wrapper">
            <a href="#" class="blue-text brand-logo">
              <i class="material-icons">business</i><strong>'Abū Zabī</strong>
            </a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
              <li><a href="../" class="blue-text">Início</a></li>
              <li><a href="../index.php/planos" class="blue-text">Planos</a></li>
              <li><a href="#" class="blue-text">Quem somos</a></li>
              <li><a href="../index.php/aluno" class="blue waves-effect waves-light btn">
                  Entrar</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </div>

    <div class="container">
      <img src="<?php echo $base_url ?>assets/quem_somos.png">
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
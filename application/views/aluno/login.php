<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<?php $base_url = 'http://localhost/curso_bitcoin/' ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <style>
    body {
      display: flex;
      min-height: 100vh;
      flex-direction: column;
      /*background-color: #000;*/
      /*background-image: url('assets/logo.jpeg');*/
      background-image: url('<?php echo $base_url ?>assets/WhatsApp Image 2019-10-15 at 20.43.51 (3).jpeg');
      background-repeat: round;
    }

    form {
      text-align: center;
      margin-top: 140px;
    }

    input {
      color: #fff
    }
  </style>
</head>

<body>
  <nav class="grey darken-4">
    <div class="container">
      <div class="nav-wrapper">
        <strong>'Abū Zabī</strong>
        <a href="#" class="brand-logo">
          <img src="<?php echo $base_url ?>assets/icons8-foguete-100.png">
        </a>
      </div>
    </div>
  </nav>

  <div class="row">
    <form class="col s12" action="../index.php/aluno/login" method="POST">
      <div class="col s12 m12">
        <div class="card grey darken-4">
          <div class="card-content white-text">
            <div class="row">
              <div class="input-field col s12">
                <input id="nome_usuario" type="text" name="nome_usuario">
                <label for="name" class="active">Seu Usuário</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input id="senha" type="password" name="senha"><br>
                <label for="senha" class="active">Senha</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <button class="btn waves-effect waves-light grey darken-4" type="submit">logar
                  <i class="material-icons right">send</i>
                </button>
                <a href="../index.php/aluno/cadastro" class="btn waves-effect waves-light grey darken-4">
                  cadastrar<i class="material-icons right">person_add</i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>

</html>
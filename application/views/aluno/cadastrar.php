<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <style>
    body {
      background-color: #000;
    }

    input {
      color: #fff;
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="card-panel teal lighten-2">
      <h4>Criar Conta</h4>
    </div>

    <form action="<?php echo (isset($planoSelecionado))? '../../aluno/cadastrar': '../aluno/cadastrar' ?>" method="POST" class="col s12">
      <div class="col s12 m12">
        <div class="card grey darken-4">
          <div class="card-content white-text">
            <div class="row">
              <div class="input-field col s12">
                <input id="nome_completo" name="nome_completo" type="text">
                <label class="active" for="nome_completo">Nome completo</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input id="nome_usuario" name="nome_usuario" type="text">
                <label class="active" for="nome_usuario">Nome do seu usuário</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input id="email" name="email" type="email">
                <label class="active" for="email">Email</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input type="password" name="senha" id="senha">
                <label class="active" for="senha">Senha</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s6">
                <input id="celular" name="celular" data-js="celular" type="text">
                <label class="active" for="celular">Celular</label>
              </div>
              <div class="input-field col s6">
                <input id="data_nascimento" name="data_nascimento" type="text" maxlength="10">
                <label class="active" for="data_nascimento">Data de Nascimento</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input id="endereco" name="endereco" type="text">
                <label class="active" for="endereco">Endereço</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s6">
                <input type="number" name="numero_casa" id="numero_casa">
                <label class="active" for="numero_casa">Número da casa</label>
              </div>
              <div class="input-field col s6">
                <input id="bairro" name="bairro" type="text">
                <label class="active" for="bairro">Bairro</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s6">
                <input id="cidade" name="cidade" type="text">
                <label class="active" for="cidade">Cidade</label>
              </div>
              <div class="input-field col s6">
                <input id="estado" name="estado" type="text">
                <label class="active" for="estado">Estado</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s6">
                <input id="cpf" name="cpf" type="text" maxlength="14">
                <label class="active" for="cpf">CPF</label>
              </div>
              <div class="input-field col s6">
                <select name="plano" id="plano">
                  <!-- VERIFICAÇÃO SE O PLANO FOI ESCOLHIDO PREVIAMENTE -->
                  <option value="<?php echo (isset($planoSelecionado)) ?  $planoSelecionado[0]->id : "" ?>" <?php if (!isset($planoSelecionado)) echo "disabled selected" ?>>
                    <?php echo (isset($planoSelecionado)) ?  $planoSelecionado[0]->titulo : "Selecione o plano" ?>
                  </option>
                  <?php foreach ($planos as $i) { ?>
                    <option value="<?php echo $i->id ?>"><?php echo $i->titulo ?></option>
                  <?php } ?>
                </select>
                <label for="plano">Plano</label>
              </div>
            </div>
            <div class="row">
              <button class="btn waves-effect waves-light" type="submit">Cadastrar
                <i class="material-icons right">send</i>
              </button>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>

  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script>
    $(document).ready(function() {
      $('select').formSelect();
    });

    const maskCelular = (value) => {
      return value
        .replace(/\D/g, '')
        .replace(/(\d{2})(\d)/, '($1) $2')
        .replace(/(\d{5})(\d{4})/, '$1 $2')
        .replace(/(\d{5}\ )(\d{4})\d+?$/, '$1$2')
    }

    const maskNascimento = (value) => {
      return value
        .replace(/\D/g, '')
        .replace(/(\d{2})(\d)/, '$1/$2')
        .replace(/(\d{2})(\d)/, '$1/$2')
    }

    const maskCpf = (value) => {
      return value
        .replace(/\D/g, '')
        .replace(/(\d{3})(\d)/, '$1.$2')
        .replace(/(\d{3})(\d)/, '$1.$2')
        .replace(/(\d{3})(\d)/, '$1-$2')
    }


    const inputCelular = document.getElementById('celular')
    const inputNascimento = document.getElementById('data_nascimento')
    const inputCpf = document.getElementById('cpf')

    inputCelular.addEventListener('input', (event) => {
      event.target.value = maskCelular(event.target.value)
    }, false)

    inputNascimento.addEventListener('input', (event) => {
      event.target.value = maskNascimento(event.target.value)
    }, false)

    inputCpf.addEventListener('input', (event) => {
      event.target.value = maskCpf(event.target.value)
    }, false)
  </script>
</body>

</html>
<?php
session_start();
?>

<!doctype html>
<html lang="pt-br">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="icon" href="C:\Users\albuq\Desktop\projeto_siab\img\familia.png">

  <title> Profissioanl </title>

  <style>
    #Rodape {
      background-color: black;
      text-decoration-color: white;
    }

    #SeObito {
      position: absolute;
      bottom: 0;
      width: 100%;
    }

    .profissao {
      padding: 20px;
      margin: 20px;
    }

    body {
      font-family: Tahoma, sans-serif;
      font-size: 1.2em;
      font-style: normal;
    }

    /* hr { outline: 1px solid blue; } */

    #titulo {
      outline: 1px solid rgb(25, 104, 178);
      background: #fff none repeat scroll 0 0;
      margin-left: 20px;
      border: 1px solid rgb(25, 104, 178);
      border-radius: 8px;
      padding: 5px
    }

    form {
      color: black;
    }

    .container {
      outline: 1px solid rgb(25, 104, 178);
      padding: 30px;
      background-color: #ccc;
    }

    .escolaridade {
      padding: 30px;
      margin: 20px;
      background-color: #ccc;
    }

    .panel {
      outline: 1px solid rgb(25, 104, 178);
    }

    .text-on-pannel {
      background: #fff none repeat scroll 0 0;
      height: auto;
      margin-left: 20px;
      padding: 3px 5px;
      position: absolute;
      margin-top: -47px;
      border: 1px solid rgb(25, 104, 178);
      border-radius: 8px;
    }

    .panel {
      margin-top: 27px !important;
    }

    .panel-body {
      padding-top: 30px !important;
    }

    .campo {
      width: 350px;
    }

    .btn-group-toggle {
      text-align: center;
    }
  </style>

</head>

<body>
  <br>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-4">
        <div class="text-center">
          <img alt="Bootstrap Image Preview" src='../img/esus.png' />
        </div>
      </div>
      <div class="col-md-4">
        <h1 class="text-center"> <strong class="text-uppercase"> Cadastro do Profissional </strong></h1>
      </div>
      <div class="col-md-4">
      </div>
    </div>
    <br>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="text-center" id="titulo"> CADASTRO DO PROFISSIONAL DE SAÚDE </h2>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-3">
          <form>
            <div class="row">
              <div class="col">
                <label for="CNS">CNS</label>
                <input type="text" class="form-control" placeholder="CNS">
              </div>
            </div>
          </form>
        </div>
        <div class="col-md-3">
          <form>
            <div class="row">
              <div class="col">
                <label for="CBO">CBO</label>
                <input type="text" class="form-control" placeholder="CBO">
              </div>
            </div>
          </form>
        </div>
        <div class="col-md-3">
          <form>
            <div class="row">
              <div class="col">
                <label for="CNES">CNES</label>
                <input type="text" class="form-control" placeholder="CNES">
              </div>
            </div>
          </form>
        </div>
        <div class="col-md-3">
          <form>
            <div class="row">
              <div class="col">
                <label for="INE">INE</label>
                <input type="text" class="form-control" placeholder="INE">
              </div>
            </div>
          </form>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-12">
          <form>
            <div class="row">
              <div class="col">
                <label for="CNS">NOME COMPLETO</label>
                <input type="text" class="form-control" placeholder="NOME COMPLETO">
              </div>
            </div>
          </form>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-4">
          <form>
            <div class="row">
              <div class="col">
                <label for="TELEFONE CELULAR">TELEFONE PARA CONTATO</label>
                <input type="text" class="form-control" placeholder="(XX)XXXX-XXXX" maxlength="15">
              </div>
            </div>
          </form>
        </div>
        <div class="col-md-4">
          <form>
            <div class="row">
              <div class="col">
                <label for="CRACHA"> CPF </label>
                <input type="text" class="form-control" placeholder="CPF">
              </div>
            </div>
          </form>
        </div>
        <div class="col-md-4">
          <form>
            <div class="row">
              <div class="col">
                <label for="CRACHA"> N° DO CRACHÁ </label>
                <input type="text" class="form-control" placeholder="CRACHÁ">
              </div>
            </div>
          </form>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-4">
          <form>
            <div class="form-group">
              <label for="exampleFormControlInput1">E-MAIL</label>
              <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
          </form>
        </div>
        <div class="col-md-4">
          <label for="CRACHA"> CARGO </label>
          <input type="text" class="form-control" placeholder="CARGO">
        </div>
        <div class="col-md-4">
          <label for="CRACHA"> UNIDADE </label>
          <input type="text" class="form-control" placeholder="UNIDADE">
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-4">
        </div>
        <div class="col-md-4">
          <div class="btn-group-toggle">
            <label class="btn btn-secondary active">
              <input type="checkbox" checked autocomplete="off"> SALVAR
            </label>
            <a class="btn btn-primary" href="C:\Users\albuq\Desktop\projeto_siab\siab\cadastro_inicial.html"
              role="button">INÍCIO</a>
          </div>
        </div>
        <div class="col-md-4">
        </div>
      </div>
    </div>
  </div>
  
  <br>
  <br>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
</body>

</html>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="icon" href="C:\Users\albuq\Desktop\projeto_siab\img\familia.png">

  <title> Desligamento </title>

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

    .container-fluid {
      background-color: white
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
          <img alt="ESUS" src="C:\Users\albuq\Desktop\projeto_siab\img\esus.png" />
        </div>
      </div>
      <div class="col-md-4">
        <h1 class="text-center"> <strong class="text-uppercase"> Cadastro Individual</strong></h1>
      </div>

      <div class="col-md-4">
      </div>
    </div>

    <br>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="text-center" id="titulo"> SAÍDA DO CIDADÃO DO CADASTRO </h2>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-12">
          <label> SE ÓBITO, INDIQUE: </label>
        </div>
      </div>


      <div class="row">
        <div class="col-md-6">
          <div class="row" id="SeObito">
            <div class="col-md-6">
              <input class="form-check-input" type="radio" name="SaidaDoCidadao">
              <label> MUDANÇA DE TERRITÓRIO </label>
            </div>
            <div class="col-md-6">
              <input class="form-check-input" type="radio" name="SaidaDoCidadao">
              <label> ÓBITO </label>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <label for="CNS"> DATA DO ÓBITO </label>
          <input type="date" class="form-control" placeholder="DATA">
        </div>
        <div class="col-md-3">
          <label for="CNS">NUMERO DA D.O: </label>
          <input type="text" class="form-control" placeholder="NUMERAÇÃO">
        </div>
      </div>

      <br>
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
              role="button">INICIO</a>
          </div>
        </div>

        <div class="col-md-4">

        </div>

      </div>

    </div>

  </div>
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
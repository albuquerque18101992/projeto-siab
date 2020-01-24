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
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="icon" href='../projeto_siab/img/familia.png'>

  <title>SIAB</title>

  <style>
    .btn {
      width: 100%;
      height: 15vh;
      background: white;
      background: rgb(25, 104, 178);
      color: #fff;
      border-radius: 25px;
      margin: 5px;
      font-size: 18px;
    }
  </style>

</head>

<body>

  <br>

  <div class="container-fluid">

    <div class="row">
      <div class="col-md-12">
        <img src='../img/logo_os.png' alt="OS-SantaCatarina" width="100%" height="300">
      </div>
    </div>

    <div class="row">
      <div class="col-md-3">
      </div>
      <div class="col-md-3">
        <a href='../siab/cadastro_paciente.php' target="_blank"> <input class="btn" type="submit" value="Cadastro Individual"> </a>
      </div>
      <div class="col-md-3">
        <a href='../siab/cadastro_domiciliar_territorial.php' target="_blank"> <input class="btn" type="submit" value=" Cadastro Domiciliar e Territorial"> </a>
      </div>
      <div class="col-md-3">
      </div>
    </div>

    <div class="row">
      <div class="col-md-4">
      </div>
      <div class="col-md-4">
        <a href='../siab/cadastro_profissionais.php' target="_blank">
          <input class="btn" type="submit" value=" Cadastro de Profissionais">
      </div>
      <div class="col-md-4">
      </div>
    </div>

  </div>

  <br>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
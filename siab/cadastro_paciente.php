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

  <title>Cadastro Individual</title>

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
          <img alt="ESUS" src='../img/esus.png' />
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
          <h2 class="text-center" id="titulo">IDENTIFICAÇÃO DO USUÁRIO/CIDADÃO</h2>
        </div>
      </div>

      <br>

      <div class="row">
        <div class="col-md-3">
          <form>
            <div class="row">
              <div class="col">
                <label for="CNS">CNS DO CIDADÃO</label>
                <input type="text" class="form-control" placeholder="CNS DO CIDADÃO">
              </div>
            </div>
          </form>
        </div>

        <div class="col-md-3">
          <label for="CIDADAO">CIDADÃO É RESPONSAVEL </label>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="ResponsavelFamiliar" id="inlineRadio1" value="SIM">
            <label class="form-check-label" for="inlineRadio1">SIM</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="ResponsavelFamiliar" id="inlineRadio2" value="NAO">
            <label class="form-check-label" for="inlineRadio2">NÃO</label>
          </div>
        </div>
        <div class="col-md-3">
          <form>
            <div class="row">
              <div class="col">
                <label for="CNS">CNS DO RESPONSAVEL</label>
                <input type="text" class="form-control" placeholder="CNS DO RESPONSAVEL">
              </div>
            </div>
          </form>
        </div>
        <div class="col-md-3">
          <form>
            <div class="row">
              <div class="col">
                <label for="CNS">MICROAREA</label>
                <input type="text" class="form-control" placeholder="MICROAREA">
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
        <div class="col-md-12">
          <form>
            <div class="row">
              <div class="col">
                <label for="CNS">NOME SOCIAL</label>
                <input type="text" class="form-control" placeholder="NOME SOCIAL">
              </div>
            </div>
          </form>
        </div>

        <div class="col-md-2">
          <form>

          </form>
        </div>

      </div>
      <br>
      <div class="row">
        <div class="col-md-4">
          <form>
            <div class="row">
              <div class="col">
                <label for="ETNIA">ETNIA</label>
                <input type="text" class="form-control" placeholder="ETNIA">
              </div>
            </div>
          </form>
        </div>

        <div class="col-md-4">
          <label for="COR">RAÇA/COR</label>
          <div class="row">
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="Raca" id="inlineRadio1" value="BRANCO">
              <label class="form-check-label" for="inlineRadio1">BRANCO</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="Raca" id="inlineRadio2" value="PRETA">
              <label class="form-check-label" for="inlineRadio2">PRETA</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="Raca" id="inlineRadio3" value="PARDA">
              <label class="form-check-label" for="inlineRadio2">PARDA</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="Raca" id="inlineRadio4" value="AMARELA">
              <label class="form-check-label" for="inlineRadio2">AMARELA</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="Raca" id="inlineRadio5" value="INDIGENA">
              <label class="form-check-label" for="inlineRadio2">INDIGENA</label>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <form>
            <div class="row">
              <div class="col">
                <label for="PIS">N° NIS(PIS/PASEP)</label>
                <input type="text" class="form-control" placeholder="PIS">
              </div>
            </div>
          </form>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-10">
          <form>
            <div class="row">
              <div class="col">
                <label for="MAE">NOME COMPLETO DA MÃE</label>
                <input type="text" class="form-control" placeholder="NOME COMPLETO DA MÃE">
              </div>
            </div>
          </form>
        </div>
        <div class="col-md-2">
          <div class="form-check">
            <label for="PARADEIRO">DESCONHECIDO</label>
            <div class="row-center">
              <input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option1">
            </div>
          </div>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-10">
          <form>
            <div class="row">
              <div class="col">
                <label for="PAI">NOME COMPLETO DO PAI</label>
                <input type="text" class="form-control" placeholder="NOME COMPLETO DO PAI">
              </div>
            </div>
          </form>
        </div>
        <div class="col-md-2">
          <div class="form-check">
            <label for="PARADEIRO">DESCONHECIDO</label>
            <div class="row-center">
              <input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option1">
            </div>
          </div>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-4">
          <form>
            <div class="row">
              <div class="col">
                <label for="PAIS">PAÍS DE NASCIMENTO</label>
                <input type="text" class="form-control" placeholder="PAÍS">
              </div>
            </div>
          </form>
        </div>
        <div class="col-md-4">
          <label for="CIDADAO">NACIONALIDADE</label>
          <div class="row">
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="Nacionalidade" id="inlineRadio6" value="BRASILEIRO">
              <label class="form-check-label" for="inlineRadio1">BRASILEIRO</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="Nacionalidade" id="inlineRadio7" value="NATURALIZADO">
              <label class="form-check-label" for="inlineRadio2">NATURALIZADO</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="Nacionalidade" id="inlineRadio8" value="ESTRANGEIRO">
              <label class="form-check-label" for="inlineRadio2">ESTRANGEIRO</label>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <form>
            <div class="row">
              <div class="col">
                <label for="NATURALIZACAO">DATA DE NATURALIZAÇÃO</label>
                <input type="date" class="form-control" placeholder="DATA DE NATURALIZAÇÃO">
              </div>
            </div>
          </form>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-6">
          <form>
            <div class="row">
              <div class="col">
                <label for="PORTARIA">PORTARIA DE NATURALIZAÇÃO</label>
                <input type="text" class="form-control" placeholder="PORTARIA DE NATURALIZAÇÃO">
              </div>
            </div>
          </form>
        </div>
        <div class="col-md-6">
          <form>
            <div class="form-group">
              <label for="exampleFormControlSelect1">ESTADO DE NASCIMENTO</label>
              <select class="form-control" id="exampleFormControlSelect1">
                <option>Acre - AC</option>
                <option>Alagoas - AL</option>
                <option>Amapá - AP</option>
                <option>Amazonas</option>
                <option>Bahia - BA</option>
                <option>Ceará - CA</option>
                <option>Distrito Federal- DF</option>
                <option>Espírito Santo - ES</option>
                <option>Goiás - GO</option>
                <option>Maranhão - MA</option>
                <option>Mato Grosso - MT</option>
                <option>Mato Grosso do Sul - MS</option>
                <option>Minas Gerais - MG</option>
                <option>Pará - PA</option>
                <option>Paraíba - PB</option>
                <option>Paraná - PR</option>
                <option>Pernambuco - PE</option>
                <option>Piauí - PI</option>
                <option>Rio de Janeiro - RJ</option>
                <option>Rio Grande do Norte - RN</option>
                <option>Rio Grande do Sul - RS</option>
                <option>Rondônia - RO</option>
                <option>Roraima - RR</option>
                <option>Santa Catarina - SC</option>
                <option>São Paulo - SP</option>
                <option>Sergipe - SE</option>
                <option>Tocantins - TO</option>
              </select>
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
                <label for="ENTRADA-BRASIL">DATA DE ENTRADA NO BRASIL</label>
                <input type="date" class="form-control" placeholder="DATA DE ENTRADA NO BRASIL">
              </div>
            </div>
          </form>
        </div>
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
                <label for="E-MAIL">E-MAIL</label>
                <input type="text" class="form-control" placeholder="E-MAIL">
              </div>
            </div>
          </form>
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
            <a class="btn btn-primary" href="C:\Users\albuq\Desktop\projeto_siab\siab\informacoes_sociodemograficas.html" role="button">AVANÇAR</a>
          </div>
        </div>

        <div class="col-md-4">

        </div>

      </div>


    </div>
  </div>

  <br><br>


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
<?php
session_start();
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="icon" href='../projeto_siab/img/familia.png'>

  <title>Cadastro Domiciliar</title>

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
      margin-left: 10px;
    }

    .campo {
      width: 350px;
    }

    .btn-group-toggle {
      text-align: center;
    }

    #tab {
      text-align: center;
      font-size: 15px;
    }
  </style>

</head>

<body>

  <div class="container-fluid">
    <br>
    <div class="row">
      <div class="col-md-4">
        <div class="text-center">
          <img alt="ESUS" src='../img/esus.png' />
        </div>
      </div>
      <div class="col-md-4">
        <h1 class="text-center"> <strong class="text-uppercase"> CADASTRO DOMICILIAR E TERRITORIAL </strong></h1>
      </div>

      <div class="col-md-4">
      </div>
    </div>
    <br>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="text-center" id="titulo"> CADASTRO DOMICILIAR E TERRITORIAL DO PACIENTE </h2>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-4">
          <label for="cep">CEP</label>
          <input type="text" class="form-control" placeholder="CEP">
        </div>
        <div class="col-md-6">
          <form>
            <div class="form-group">
              <label for="exampleFormControlSelect1">ESTADO</label>
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
        <div class="col-md-2">
          <label for="uf">UF</label>
          <input type="text" class="form-control" placeholder="UF">
        </div>
      </div>

      <div class="row">
        <div class="col-md-4">
          <label for="bairro">BAIRRO</label>
          <input type="text" class="form-control" placeholder="BAIRRO">
        </div>

        <div class="col-md-4">
          <label for="cep">TIPO DE LAGRADOURO</label>
          <input type="text" class="form-control" placeholder="TIPO LAGRADOURO">
        </div>

        <div class="col-md-4">
          <label for="cep">NOME DO LAGRADOURO</label>
          <input type="text" class="form-control" placeholder="NOME LAGRADOURO">
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-2">
          <label for="numero">N°</label>
          <input type="text" class="form-control" placeholder="N°">
        </div>

        <div class="col-md-4">
          <label for="complemento"> COMPLEMENTO </label>
          <input type="text" class="form-control" placeholder="COMPLEMENTO">
        </div>

        <div class="col-md-4">
          <label for="complemento"> PONTO DE REFERÊNCIA </label>
          <input type="text" class="form-control" placeholder="PONTO DE REFERÊNCIA">
        </div>

        <div class="col-md-2">
          <label for="numero">MICROÁREA</label>
          <input type="text" class="form-control" placeholder="MICROÁREA">
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-2">
          <label for="tipoimovel"> TIPO DE IMÓVEL</label>
          <input type="text" class="form-control" placeholder="IMÓVEL">
        </div>

        <div class="col-md-5">
          <label for="tipoimovel"> TELEFONE PARA CONTATO </label>
          <input type="text" class="form-control" placeholder="TELEFONE, RESIDÊNCIA: ()">
        </div>

        <div class="col-md-5">
          <label for="tipoimovel"> TELEFONE PARA CONTATO </label>
          <input type="text" class="form-control" placeholder="TELEFONE, CELULAR: ()">
        </div>
      </div>
      <br>
      <br>

      <div class="container">

        <h4 class="text-on-pannel text-primary"> <strong class="text-uppercase"> CONDIÇÕES DE MORADIA </strong></h4>

        <div class="panel-body">

          <div class="row">
            <div class="col-md-12">
              <h6 class="text-center" id="titulo"> LOCALIZAÇÃO </h6>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6">
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="PosseDeTerra" id="inlineRadio6">
                <label class="form-check-label" for="inlineRadio1">URBANA</label>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="PosseDeTerra" id="inlineRadio6">
                <label class="form-check-label" for="inlineRadio1">RURAL</label>
              </div>
            </div>
          </div>

          <br>

          <div class="row">
            <div class="col-md-12">
              <h6 class="text-center" id="titulo"> SITUAÇÃO DE MORADIA / POSSE DE TERRA </h6>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6">
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="PosseDeTerra" id="inlineRadio6">
                <label class="form-check-label" for="inlineRadio1">PRÓPRIA</label>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="PosseDeTerra" id="inlineRadio6">
                <label class="form-check-label" for="inlineRadio1">FINANCIADO</label>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="PosseDeTerra" id="inlineRadio6">
                <label class="form-check-label" for="inlineRadio1">ALUGADO</label>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="PosseDeTerra" id="inlineRadio6">
                <label class="form-check-label" for="inlineRadio1">ARRENDADO</label>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="PosseDeTerra" id="inlineRadio6">
                <label class="form-check-label" for="inlineRadio1">CEDIDO</label>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="PosseDeTerra" id="inlineRadio6">
                <label class="form-check-label" for="inlineRadio1">OCUPAÇÃO</label>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="PosseDeTerra" id="inlineRadio6">
                <label class="form-check-label" for="inlineRadio1">SITUAÇÃO DE RUA</label>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="PosseDeTerra" id="inlineRadio6">
                <label class="form-check-label" for="inlineRadio1">OUTROS</label>
              </div>
            </div>
          </div>

        </div>

        <br>

        <div class="row">
          <div class="col-md-12">
            <h6 class="text-center" id="titulo"> TIPO DE DOMICÍLIO </h6>
          </div>
        </div>

        <div class="row">
          <div class="col-md-3">
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="TipoDeDomicilio" id="inlineRadio6">
              <label class="form-check-label" for="inlineRadio1">CASA</label>
            </div>
          </div>

          <div class="col-md-3">
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="TipoDeDomicilio" id="inlineRadio6">
              <label class="form-check-label" for="inlineRadio1">APARTAMENTO</label>
            </div>
          </div>

          <div class="col-md-3">
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="TipoDeDomicilio" id="inlineRadio6">
              <label class="form-check-label" for="inlineRadio1">CÔMODO</label>
            </div>
          </div>

          <div class="col-md-3">
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="TipoDeDomicilio" id="inlineRadio6">
              <label class="form-check-label" for="inlineRadio1">OUTRO</label>
            </div>
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-md-6">
            <label for="moradores">NÚMERO DE MORADORES</label>
            <input type="number" class="form-control" placeholder="MORADORES">
          </div>

          <div class="col-md-6">
            <label for="comodos">NÚMERO DE CÔMODOS</label>
            <input type="number" class="form-control" placeholder="CÔMODOS">
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-md-12">
            <h6 class="text-center" id="titulo"> TIPO DE ACEESO AO DOMICÍLIO </h6>
          </div>
        </div>

        <div class="row">
          <div class="col-md-3">
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="PosseDeTerra" id="inlineRadio6">
              <label class="form-check-label" for="inlineRadio1">PAVIMENTADO</label>
            </div>
          </div>

          <div class="col-md-3">
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="PosseDeTerra" id="inlineRadio6">
              <label class="form-check-label" for="inlineRadio1">CHÃO BATIDO</label>
            </div>
          </div>

          <div class="col-md-3">
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="PosseDeTerra" id="inlineRadio6">
              <label class="form-check-label" for="inlineRadio1">FLUVIAL</label>
            </div>
          </div>

          <div class="col-md-3">
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="PosseDeTerra" id="inlineRadio6">
              <label class="form-check-label" for="inlineRadio1">OUTROS</label>
            </div>
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-md-8">
            <label for="DisponibilidadeDeEnergia"> DISPONIBILIDADE DE ENERGIA ELÉTRICA ? </label>
          </div>

          <div class="col-md-2">
            <input class="form-check-input" type="radio" name="EnergiaEletrica" id="inlineRadio6">
            <label class="form-check-label" for="inlineRadio1">SIM</label>
          </div>

          <div class="col-md-2">
            <input class="form-check-input" type="radio" name="EnergiaEletrica" id="inlineRadio6">
            <label class="form-check-label" for="inlineRadio1">NÃO</label>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-md-12">
            <h6 class="text-center" id="titulo"> EM CASO DE ÁREA DE PRODUÇÃO RURAL: CONDIÇÃO DE POSSE E USO DA TERRA
            </h6>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="ProducaoRural" id="inlineRadio6">
              <label class="form-check-label" for="inlineRadio1">PROPRIETÁRIO</label>
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="ProducaoRural" id="inlineRadio6">
              <label class="form-check-label" for="inlineRadio1">PARCEIRO MEEIRO</label>
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="ProducaoRural" id="inlineRadio6">
              <label class="form-check-label" for="inlineRadio1">ASSENTADO</label>
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="ProducaoRural" id="inlineRadio6">
              <label class="form-check-label" for="inlineRadio1">POSSEIRO</label>
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="ProducaoRural" id="inlineRadio6">
              <label class="form-check-label" for="inlineRadio1">ARRENDATÁRIO</label>
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="ProducaoRural" id="inlineRadio6">
              <label class="form-check-label" for="inlineRadio1">COMODATÁRIO</label>
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="ProducaoRural" id="inlineRadio6">
              <label class="form-check-label" for="inlineRadio1">BENEFICIÁRIO DO BANCO DA TERRA</label>
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="ProducaoRural" id="inlineRadio6">
              <label class="form-check-label" for="inlineRadio1">NÃO SE EXPLICA</label>
            </div>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-md-12">
            <h6 class="text-center" id="titulo"> MATERIAL PREDOMINANTE NA CONSTRUÇÃO DAS PAREDES EXTERNAS DE SEU
              DOMICÍLIO </h6>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="MaterialResidencial" id="inlineRadio6">
              <label class="form-check-label" for="inlineRadio1">ALVENARIA TIJOLO: COM REVESTIMENTO</label>
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="MaterialResidencial" id="inlineRadio6">
              <label class="form-check-label" for="inlineRadio1">ALVENARIA TIJOLO: SEM REVESTIMENTO</label>
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="MaterialResidencial" id="inlineRadio6">
              <label class="form-check-label" for="inlineRadio1">TAIPA: COM REVESTIMENTO</label>
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="MaterialResidencial" id="inlineRadio6">
              <label class="form-check-label" for="inlineRadio1">TAIPA: SEM REVESTIMENTO</label>
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="MaterialResidencial" id="inlineRadio6">
              <label class="form-check-label" for="inlineRadio1">MADEIRA APARELHADA</label>
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="MaterialResidencial" id="inlineRadio6">
              <label class="form-check-label" for="inlineRadio1">MATERIAL APROVEITADO</label>
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="MaterialResidencial" id="inlineRadio6">
              <label class="form-check-label" for="inlineRadio1">PALHA</label>
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="MaterialResidencial" id="inlineRadio6">
              <label class="form-check-label" for="inlineRadio1">OUTRO MATERIAL</label>
            </div>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-md-12">
            <h6 class="text-center" id="titulo">ABASTECIMENTO DE ÁGUA </h6>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="AbastecimentoDeAgua" id="inlineRadio6">
              <label class="form-check-label" for="inlineRadio1"> REDE ENCANADA ATÉ O DOMICÍLIO </label>
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="AbastecimentoDeAgua" id="inlineRadio6">
              <label class="form-check-label" for="inlineRadio1"> POÇO / NASCENTE NO DOMICÍLIO </label>
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="AbastecimentoDeAgua" id="inlineRadio6">
              <label class="form-check-label" for="inlineRadio1"> CISTERNA </label>
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="AbastecimentoDeAgua" id="inlineRadio6">
              <label class="form-check-label" for="inlineRadio1"> CARRO PIPA </label>
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="AbastecimentoDeAgua" id="inlineRadio6">
              <label class="form-check-label" for="inlineRadio1"> OUTRO </label>
            </div>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-md-12">
            <h6 class="text-center" id="titulo">ÁGUA PARA CONSUMO NO DOMICÍLIO</h6>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="ConsumoDeAguaDomicilio" id="inlineRadio6">
              <label class="form-check-label" for="inlineRadio1"> FILTRADA </label>
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="ConsumoDeAguaDomicilio" id="inlineRadio6">
              <label class="form-check-label" for="inlineRadio1"> FERVIDA </label>
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="ConsumoDeAguaDomicilio" id="inlineRadio6">
              <label class="form-check-label" for="inlineRadio1"> CLORADA </label>
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="ConsumoDeAguaDomicilio" id="inlineRadio6">
              <label class="form-check-label" for="inlineRadio1"> MINERAL </label>
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="ConsumoDeAguaDomicilio" id="inlineRadio6">
              <label class="form-check-label" for="inlineRadio1"> SEM TRATAMENTO </label>
            </div>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-md-12">
            <h6 class="text-center" id="titulo"> FORMA DE ESCOAMENTO DO BANHEIRO OU SANITÁRIO </h6>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="EscoamentoDeBanheiros" id="inlineRadio6">
              <label class="form-check-label" for="inlineRadio1"> REDE COLETORA DE ESGOTO OU PLUVIAL </label>
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="EscoamentoDeBanheiros" id="inlineRadio6">
              <label class="form-check-label" for="inlineRadio1"> FOSSA SÉPTICA </label>
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="EscoamentoDeBanheiros" id="inlineRadio6">
              <label class="form-check-label" for="inlineRadio1"> FOSSA RUDIMENTAR </label>
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="EscoamentoDeBanheiros" id="inlineRadio6">
              <label class="form-check-label" for="inlineRadio1"> DIRETO PARA UM RIO, LAGO OU MAR </label>
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="EscoamentoDeBanheiros" id="inlineRadio6">
              <label class="form-check-label" for="inlineRadio1">CÉU ABERTO</label>
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="EscoamentoDeBanheiros" id="inlineRadio6">
              <label class="form-check-label" for="inlineRadio1">OUTRA FORMA</label>
            </div>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-md-12">
            <h6 class="text-center" id="titulo"> DESTINO DO LIXO </h6>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="ColetaDeLixo" id="inlineRadio6">
              <label class="form-check-label" for="inlineRadio1"> COLETORA </label>
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="ColetaDeLixo" id="inlineRadio6">
              <label class="form-check-label" for="inlineRadio1"> QUEIMADO / ENTERRADO </label>
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="ColetaDeLixo" id="inlineRadio6">
              <label class="form-check-label" for="inlineRadio1"> CÉU ABERTO </label>
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="ColetaDeLixo" id="inlineRadio6">
              <label class="form-check-label" for="inlineRadio1"> OUTRO </label>
            </div>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-md-12">
            <h6 class="text-center" id="titulo"> ANIMAIS NO DOMICÍLIO ? </h6>
          </div>
        </div>

        <div class="row">
          <div class="col-md-3">
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" name="Pets" id="inlineRadio6">
              <label class="form-check-label" for="inlineRadio1"> GATO </label>
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" name="Pets" id="inlineRadio6">
              <label class="form-check-label" for="inlineRadio1"> CACHORRO </label>
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" name="Pets" id="inlineRadio6">
              <label class="form-check-label" for="inlineRadio1"> PÁSSARO </label>
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" name="Pets" id="inlineRadio6">
              <label class="form-check-label" for="inlineRadio1"> OUTROS </label>
            </div>
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-md-2">
            <label for="quantidade">QUANTOS:</label>
          </div>
          <div class="col-md-6">
            <input type="text" class="form-control" placeholder="QUANTIDADE">
          </div>
        </div>
        <br>
        <div class="row" id="tab">
          <div class="col-md-2">
            <label>Nº PRONTUÁRIO</label>
          </div>
          <div class="col-md-2">
            <label>CNS DO PACIENTE</label>
          </div>
          <div class="col-md-3">
            <label>DATA DE NASCIMENTO DO RESPONSÁVEL</label>
          </div>
          <div class="col-md-1">
            <label>RENDA FAMILIAS (SALÁRIO MÍNIMO)</label>
          </div>
          <div class="col-md-1">
            <label>Nº DE MEMBROS DA FAMILIA</label>
          </div>
          <div class="col-md-2">
            <label>RESIDE DESDE</label>
          </div>
          <div class="col-md-1">
            <label>SE MUDOU </label>
          </div>
        </div>

        <div class="row">
          <div class="col-md-2">
            <input type="text" maxlength="" class="form-control" placeholder="">
          </div>
          <div class="col-md-2">
            <input type="text" maxlength="15" class="form-control" placeholder="">
          </div>
          <div class="col-md-3">
            <input type="date" maxlength="" class="form-control" placeholder="">
          </div>
          <div class="col-md-1">
            <input type="text" maxlength="" class="form-control" placeholder="">
          </div>
          <div class="col-md-1">
            <input type="text" maxlength="" class="form-control" placeholder="">
          </div>
          <div class="col-md-2">
            <input type="date" maxlength="" class="form-control" placeholder="">
          </div>
          <div class="col-md-1">
            <input type="checkbox" maxlength="" class="form-control" name="MudouSe1" placeholder="">
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-md-2">
            <input type="text" maxlength="" class="form-control" placeholder="">
          </div>
          <div class="col-md-2">
            <input type="text" maxlength="15" class="form-control" placeholder="">
          </div>
          <div class="col-md-3">
            <input type="date" maxlength="" class="form-control" placeholder="">
          </div>
          <div class="col-md-1">
            <input type="text" maxlength="" class="form-control" placeholder="">
          </div>
          <div class="col-md-1">
            <input type="text" maxlength="" class="form-control" placeholder="">
          </div>
          <div class="col-md-2">
            <input type="date" maxlength="" class="form-control" placeholder="">
          </div>
          <div class="col-md-1">
            <input type="checkbox" maxlength="" class="form-control" name="MudouSe2" placeholder="">
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-md-2">
            <input type="text" maxlength="" class="form-control" placeholder="">
          </div>
          <div class="col-md-2">
            <input type="text" maxlength="15" class="form-control" placeholder="">
          </div>
          <div class="col-md-3">
            <input type="date" maxlength="" class="form-control" placeholder="">
          </div>
          <div class="col-md-1">
            <input type="text" maxlength="" class="form-control" placeholder="">
          </div>
          <div class="col-md-1">
            <input type="text" maxlength="" class="form-control" placeholder="">
          </div>
          <div class="col-md-2">
            <input type="date" maxlength="" class="form-control" placeholder="">
          </div>
          <div class="col-md-1">
            <input type="checkbox" maxlength="" class="form-control" name="MudouSe3" placeholder="">
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-md-2">
            <input type="text" maxlength="" class="form-control" placeholder="">
          </div>
          <div class="col-md-2">
            <input type="text" maxlength="15" class="form-control" placeholder="">
          </div>
          <div class="col-md-3">
            <input type="date" maxlength="" class="form-control" placeholder="">
          </div>
          <div class="col-md-1">
            <input type="text" maxlength="" class="form-control" placeholder="">
          </div>
          <div class="col-md-1">
            <input type="text" maxlength="" class="form-control" placeholder="">
          </div>
          <div class="col-md-2">
            <input type="date" maxlength="" class="form-control" placeholder="">
          </div>
          <div class="col-md-1">
            <input type="checkbox" maxlength="" class="form-control" name="MudouSe4" placeholder="">
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-md-2">
            <input type="text" maxlength="" class="form-control" placeholder="">
          </div>
          <div class="col-md-2">
            <input type="text" maxlength="15" class="form-control" placeholder="">
          </div>
          <div class="col-md-3">
            <input type="date" maxlength="" class="form-control" placeholder="">
          </div>
          <div class="col-md-1">
            <input type="text" maxlength="" class="form-control" placeholder="">
          </div>
          <div class="col-md-1">
            <input type="text" maxlength="" class="form-control" placeholder="">
          </div>
          <div class="col-md-2">
            <input type="date" maxlength="" class="form-control" placeholder="">
          </div>
          <div class="col-md-1">
            <input type="checkbox" maxlength="" class="form-control" name="MudouSe5" placeholder="">
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
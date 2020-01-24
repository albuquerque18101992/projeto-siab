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

  <title>Cidadão em Situação de Rua</title>

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
      <!-- container inicia situação de rua coluna esquerda -->
      <div class="row">
        <div class="col-md-12">
          <h2 class="text-center" id="titulo"> CIDADÃO EM SITUAÇÃO DE RUA </h2>
        </div>
      </div>

      <br>

      <div class="container">
        <div class="row">
          <div class="col-md-6">

            <div class="row">
              <!--LINHA ABRE (TEM DOENÇA RESPIRATORIA NO PULMÃO ?) ......-->
              <div class="col-md-12">
                <!--COLUNA ABRE (TEM DOENÇA RESPIRATORIA NO PULMÃO ?) ......-->
                <label> ESTA EM SITUAÇÃO DE RUA ? </label>
                <div class="row">
                  <div class="col-md-6">
                    <input class="form-check-input" type="radio" name="DoencaPulmao">
                    <label> SIM </label>
                  </div>
                  <div class="col-md-6">
                    <input class="form-check-input" type="radio" name="DoencaPulmao">
                    <label> NÃO </label>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-10">
                    <label> TEMPO EM SITUAÇÃO DE RUA ? </label>
                  </div>
                </div>
                <div class="row">

                  <div class="col-md-5">
                    <input class="form-check-input" type="radio" name="TempoDeSituacaoDeRua">
                    <label> 6 MESES </label>
                  </div>
                  <div class="col-md-5">
                    <input class="form-check-input" type="radio" name="TempoDeSituacaoDeRua">
                    <label> 6 A 12 MESES </label>
                  </div>
                  <div class="col-md-5">
                    <input class="form-check-input" type="radio" name="TempoDeSituacaoDeRua">
                    <label> 1 A 5 ANOS </label>
                  </div>
                  <div class="col-md-5">
                    <input class="form-check-input" type="radio" name="TempoDeSituacaoDeRua">
                    <label> MAIS DE 5 ANOS </label>
                  </div>

                </div>

                <br>
                <br>

                <div class="row">
                  <div class="col-md-12">
                    <div class="row">
                      <div class="col-md-8">
                        <label> RECEBE ALGUM BENEFICIO ? </label>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <input class="form-check-input" type="radio" name="Hanseniase">
                          <label> SIM </label>
                        </div>
                        <div class="col-md-6">
                          <input class="form-check-input" type="radio" name="Hanseniase">
                          <label> NÃO </label>
                        </div>
                      </div>
                    </div>



                    <div class="row">
                      <div class="col-md-8">
                        <label> POSSUI REFERÊNCIA FAMILIAR ? </label>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <input class="form-check-input" type="radio" name="Turbeculose">
                          <label> SIM </label>
                        </div>
                        <div class="col-md-6">
                          <input class="form-check-input" type="radio" name="Turbeculose">
                          <label> NÃO </label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>


                <br>
                <br>

                <div class="row">
                  <div class="col-md-10">
                    <label> QUANTAS VEZES SE ALIMENTA OU DIA ? </label>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-5">
                    <input class="form-check-input" type="radio" name="RepeticaoAlimentacao">
                    <label> 1 VEZ </label>
                  </div>
                  <div class="col-md-5">
                    <input class="form-check-input" type="radio" name="RepeticaoAlimentacao">
                    <label> 2 OU 3 VEZES </label>
                  </div>
                  <div class="col-md-5">
                    <input class="form-check-input" type="radio" name="RepeticaoAlimentacao">
                    <label> MAIS DE 3 VEZES </label>
                  </div>
                </div>
              </div>

            </div>

            <br>
            <br>

            <div class="row">
              <div class="col-md-10">
                <label> QUAL A ORIGEM DA ALIMENTAÇÃO ? </label>
              </div>
            </div>
            <div class="row">
              <div class="col-md-5">
                <input class="form-check-input" type="checkbox" name="OrigemAlimentacao">
                <label> RESTAURANTE POPULAR </label>
              </div>
              <div class="col-md-5">
                <input class="form-check-input" type="checkbox" name="OrigemAlimentacao">
                <label> DOAÇÃO RESTAURENTE </label>
              </div>
              <div class="col-md-5">
                <input class="form-check-input" type="checkbox" name="OrigemAlimentacao">
                <label> OUTROS </label>
              </div>
              <div class="col-md-5">
                <input class="form-check-input" type="checkbox" name="OrigemAlimentacao">
                <label> DOAÇÃO GRUPO RELIGIOSO </label>
              </div>
              <div class="col-md-5">
                <input class="form-check-input" type="checkbox" name="OrigemAlimentacao">
                <label> DOAÇÃO DE POPULAR </label>
              </div>
            </div>





          </div> <!-- div que fecha situação de rua coluna esquerda  -->

          <div class="col-md-6">

            <div class="row">
              <!--LINHA ABRE (é acompanhado por outra situação ?) ......-->

              <div class="col-md-12">

                <label> É ACOMPANHADO POR OUTRA INSTITUIÇÃO ? </label>
                <div class="row">
                  <div class="col-md-6">
                    <input class="form-check-input" type="radio" name="DoencaPulmao">
                    <label> SIM </label>
                  </div>
                  <div class="col-md-6">
                    <input class="form-check-input" type="radio" name="DoencaPulmao">
                    <label> NÃO </label>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-10">
                    <label> SE SIM, INDIQUE QUAL ? </label>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-10">
                    <textarea class="form-control text-center">  </textarea>
                  </div>
                </div>

                <br>
                <br>

                <label> VISITA ALGUM FAMILIAR COM FREQUÊNCIA ? </label>
                <div class="row">
                  <div class="col-md-6">
                    <input class="form-check-input" type="radio" name="DoencaPulmao">
                    <label> SIM </label>
                  </div>
                  <div class="col-md-6">
                    <input class="form-check-input" type="radio" name="DoencaPulmao">
                    <label> NÃO </label>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-10">
                    <label> SE SIM, QUAL O GRAU DE PARENTESCO ? </label>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-10">
                    <textarea class="form-control text-center">  </textarea>
                  </div>
                </div>

                <br>
                <br>

                <label> TEM ACESSO A HIGIENE PESSOAL ? </label>
                <div class="row">
                  <div class="col-md-6">
                    <input class="form-check-input" type="radio" name="DoencaPulmao">
                    <label> SIM </label>
                  </div>
                  <div class="col-md-6">
                    <input class="form-check-input" type="radio" name="DoencaPulmao">
                    <label> NÃO </label>
                  </div>
                </div>

                <br>

                <div class="row">
                  <div class="col-md-10">
                    <label> SE SIM, INDIQUE QUAL (IS) ? </label>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-5">
                    <input class="form-check-input" type="checkbox" name="AcessoAHigiene">
                    <label> BANHO </label>
                  </div>
                  <div class="col-md-5">
                    <input class="form-check-input" type="checkbox" name="AcessoAHigiene">
                    <label> ACESSO AO SANITÁRIO </label>
                  </div>
                  <div class="col-md-5">
                    <input class="form-check-input" type="checkbox" name="AcessoAHigiene">
                    <label> HIGIENE BUCAL </label>
                  </div>
                  <div class="col-md-5">
                    <input class="form-check-input" type="checkbox" name="AcessoAHigiene">
                    <label> OUTROS </label>
                  </div>
                </div>

              </div>

            </div>

          </div> <!-- div que fecha (é acompanhado por outra situação) coluna direita  -->

        </div>
        <!--container pai, engloba todo paginas-->

        <div class="row">

          <div class="col-md-4">

          </div>

          <div class="col-md-4">
            <div class="btn-group-toggle">
              <label class="btn btn-secondary active">
                <input type="checkbox" checked autocomplete="off"> SALVAR
              </label>
              <a class="btn btn-primary"
                href="C:\Users\albuq\Desktop\projeto_siab\siab\saida_do_cidadao_do_cadastro.html"
                role="button">AVANÇAR</a>
            </div>
          </div>

          <div class="col-md-4">

          </div>

        </div>

      </div>
    </div>
  </div>
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
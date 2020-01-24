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

  <title>Informações Sociodemográficas</title>

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

      <div class="row">
        <div class="col-md-12">
          <h2 class="text-center" id="titulo">INFORMAÇÕES SOCIODEMOGRÁFICAS</h2>
        </div>
      </div>

      <br>

      <div class="row">
        <div class="col-md-12">
          <label>RELAÇÃO DE PARENTESCO COM O RESPONSAVEL FAMILIAR</label>
        </div>
      </div>

      <br>

      <div class="row">
        <div class="col-md-8">
          <form>
            <div class="row">

              <div class="col-md-6">
                <input class="form-check-input" type="radio" name="RelacaoDeParentesco">
                <label> CONJUGUE/COMPANHEIRO(A) </label>
              </div>
              <div class="col-md-6">
                <input class="form-check-input" type="radio" name="RelacaoDeParentesco">
                <label> FILHO(A) </label>
              </div>
              <div class="col-md-6">
                <input class="form-check-input" type="radio" name="RelacaoDeParentesco">
                <label> ENTEADO(A) </label>
              </div>
              <div class="col-md-6">
                <input class="form-check-input" type="radio" name="RelacaoDeParentesco">
                <label> NETO(A)/BISNETO(A) </label>
              </div>
              <div class="col-md-6">
                <input class="form-check-input" type="radio" name="RelacaoDeParentesco">
                <label> PAI/MÃE </label>
              </div>
              <div class="col-md-6">
                <input class="form-check-input" type="radio" name="RelacaoDeParentesco">
                <label> SOGRO(A) </label>
              </div>
              <div class="col-md-6">
                <input class="form-check-input" type="radio" name="RelacaoDeParentesco">
                <label> IRMÃO/IRMÃ </label>
              </div>
              <div class="col-md-6">
                <input class="form-check-input" type="radio" name="RelacaoDeParentesco">
                <label> GENRO/NORA </label>
              </div>
              <div class="col-md-6">
                <input class="form-check-input" type="radio" name="RelacaoDeParentesco">
                <label> OUTROS PARENTES </label>
              </div>
              <div class="col-md-6">
                <input class="form-check-input" type="radio" name="RelacaoDeParentesco">
                <label> NÃO PARENTE </label>
              </div>

            </div>
          </form>
        </div>

        <div class="col-md-4">
          <div class="row">
            <div class="form-group text-center">
              <label class="campo">OCUPAÇÃO</label>
              <textarea class="form-control text-center">  </textarea>
            </div>
          </div>
        </div>

      </div>

      <br>

      <div class="row">
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-8">
              <label for="frenqueta-escola">FREQUENTA ESCOLA OU CRECHE</label>
            </div>
            <div class="col-md-2">
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="frequentou_escola" id="inlineRadio2" value="NULL">
                <label class="form-check-label" for="inlineRadio2">SIM</label>
              </div>
            </div>
            <div class="col-md-2">
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="frequentou_escola" id="inlineRadio2" value="NULL">
                <label class="form-check-label" for="inlineRadio2">NÃO</label>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="panel panel-primary">
        <div class="panel-body">
          <h4 class="text-on-pannel text-primary"> <strong class="text-uppercase">QUAL É O CURSO MAIS ELEVADO QUE
              FREQUENTA OU FREQUENTOU ?</strong></h4>
          <div class="row">
            <div class="escolaridade">
              <div class="row">
                <div class="col-md-4">
                  <table class="table table-borderless">
                    <tbody>
                      <tr>
                        <td><input class="form-check-input" type="radio" name="CursoMaisElevado">CRECHE</td>
                      </tr>
                      <tr>
                        <td><input class="form-check-input" type="radio" name="CursoMaisElevado">PRÉ-ESCOLA (EXCTO CA)
                        </td>
                      </tr>
                      <tr>
                        <td><input class="form-check-input" type="radio" name="CursoMaisElevado">CLASSE DE ALFABETIZAÇÃO
                          - CA</td>

                      </tr>
                      <tr>
                        <td><input class="form-check-input" type="radio" name="CursoMaisElevado">ENSINO FUNDAMENTAL 1ª a
                          4ª SERIE</td>
                      </tr>
                      <tr>
                        <td><input class="form-check-input" type="radio" name="CursoMaisElevado">ENSINO FUNDAMENTAL 5ª a
                          8ª SERIE</td>
                      </tr>
                      <tr>
                        <td><input class="form-check-input" type="radio" name="CursoMaisElevado">ENSINO FUNDAMENTAL
                          COMPLETO</td>
                      </tr>
                      <tr>
                        <td><input class="form-check-input" type="radio" name="CursoMaisElevado">ENSINO FUNDAMENTAL
                          ESPECIAL</td>
                      </tr>
                      <tr>
                        <td><input class="form-check-input" type="radio" name="CursoMaisElevado">ENSINO FUNDAMENTAL EJA
                          - SERIES INICIAIS (SUPLETIVO 1ª A 4ª)</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="col-md-4">
                  <table class="table table-borderless">
                    <tbody>
                      <tr>
                        <td><input class="form-check-input" type="radio" name="CursoMaisElevado">ENSINO FUNDAMENTAL EJA
                          - SERIES FINAIS (SUPLETIVO 5ª A 8ª)</td>
                      </tr>
                      <tr>
                        <td><input class="form-check-input" type="radio" name="CursoMaisElevado">ENSINO MÉDIO, MÉDIO 2ª
                          CICLO (CIENTIFICO TÉCNICO ETC.)</td>
                      </tr>
                      <tr>
                        <td><input class="form-check-input" type="radio" name="CursoMaisElevado">ENSIMO MÉDIO ESPECIAL
                        </td>

                      </tr>
                      <tr>
                        <td><input class="form-check-input" type="radio" name="CursoMaisElevado">ENSINO MÉDIO EJA
                          (SUPLETIVO)</td>
                      </tr>
                      <tr>
                        <td><input class="form-check-input" type="radio" name="CursoMaisElevado">SUPERIOR,
                          APERFEIÇOAMENTO, ESPECIALIZAÇÃO, MESTRADO, DOUTORADO</td>
                      </tr>
                      <tr>
                        <td><input class="form-check-input" type="radio" name="CursoMaisElevado">ALFABETIZAÇÃO PARA
                          ADULTOS (MOBRAL, ETC.)</td>
                      </tr>
                      <tr>
                        <td><input class="form-check-input" type="radio" name="CursoMaisElevado">NENHUM</td>
                      </tr>
                    </tbody>
                  </table>
                </div>

                <div class="col-md-4">
                  <div class="panel panel-primary">
                    <div class="panel-body">
                      <h6 class="text-on-pannel text-primary" id="MercadoTrabalho"><strong
                          class="text-uppercase">SITUAÇÃO NO MERCADO DE TRABALHO ?</strong></h6>

                      <div class="profissao">
                        <div class="form-check form-check">
                          <input class="form-check-input" type="radio" name="MercadoDeTrabalho" id="inlineRadio2"
                            value="NULL">
                          <label class="form-check-label" for="inlineRadio2">EMPREGADO</label>
                        </div>
                        <div class="form-check form-check">
                          <input class="form-check-input" type="radio" name="MercadoDeTrabalho" id="inlineRadio2"
                            value="NULL">
                          <label class="form-check-label" for="inlineRadio2">ASSALARIADO COM CARTEIRA DE
                            TRABALHO</label>
                        </div>
                        <div class="form-check form-check">
                          <input class="form-check-input" type="radio" name="MercadoDeTrabalho" id="inlineRadio2"
                            value="NULL">
                          <label class="form-check-label" for="inlineRadio2">ASSALARIADO SEM CARTEIRA DE
                            TRABALHO</label>
                        </div>
                        <div class="form-check form-check">
                          <input class="form-check-input" type="radio" name="MercadoDeTrabalho" id="inlineRadio2"
                            value="NULL">
                          <label class="form-check-label" for="inlineRadio2">ANTONOMO COM PREVIDENCIA SOCIAL</label>
                        </div>
                        <div class="form-check form-check">
                          <input class="form-check-input" type="radio" name="MercadoDeTrabalho" id="inlineRadio2"
                            value="NULL">
                          <label class="form-check-label" for="inlineRadio2">ANTONOMO SEM PREVIDENCIA SOCIAL</label>
                        </div>
                        <div class="form-check form-check">
                          <input class="form-check-input" type="radio" name="MercadoDeTrabalho" id="inlineRadio2"
                            value="NULL">
                          <label class="form-check-label" for="inlineRadio2">APOSENTADO/PENSIONISTA</label>
                        </div>
                        <div class="form-check form-check">
                          <input class="form-check-input" type="radio" name="MercadoDeTrabalho" id="inlineRadio2"
                            value="NULL">
                          <label class="form-check-label" for="inlineRadio2">DESEMPREGADO</label>
                        </div>
                        <div class="form-check form-check">
                          <input class="form-check-input" type="radio" name="MercadoDeTrabalho" id="inlineRadio2"
                            value="NULL">
                          <label class="form-check-label" for="inlineRadio2">NÃO TRABALHA</label>
                        </div>
                        <div class="form-check form-check">
                          <input class="form-check-input" type="radio" name="MercadoDeTrabalho" id="inlineRadio2"
                            value="NULL">
                          <label class="form-check-label" for="inlineRadio2">SERVIDOR PUBLICO/MILITAR</label>
                        </div>
                        <div class="form-check form-check">
                          <input class="form-check-input" type="radio" name="MercadoDeTrabalho" id="inlineRadio2"
                            value="NULL">
                          <label class="form-check-label" for="inlineRadio2">OUTROS</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <br>
            </div>
          </div>
        </div>
      </div>

      <br>

      <div class="row">
        <div class="col-md-12">
          CRIANÇAS DE 0 A 9 ANOS COM QUEM FICAM ?
        </div>
      </div>

      <br>

      <div class="container-fluid">
        <div class="row">
          <div class="col-md-2">
            <input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option1">
            <label>RESPONSAVEL</label>
          </div>
          <div class="col-md-2">
            <input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option1">
            <label>CRIANÇAS</label>
          </div>
          <div class="col-md-2">
            <input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option1">
            <label>ADOLESCENTE</label>
          </div>
          <div class="col-md-2">
            <input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option1">
            <label>SOZINHA</label>
          </div>
          <div class="col-md-2">
            <input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option1">
            <label>CRECHE</label>
          </div>
          <div class="col-md-2">
            <input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option1">
            <label>OUTROS</label>
          </div>
        </div>
      </div>

      <hr>

      <div class="row">
        <div class="col-md-4">
          <div class="row">
            <div class="col-md-8">
              <label> FREQUENTA CUIDADOR TRADICIONAL ? </label>
            </div>
            <div class="col-md-2">
              <input class="form-check-input" type="radio" name="CuidadorTradicional">
              <label> SIM </label>
            </div>
            <div class="col-md-2">
              <input class="form-check-input" type="radio" name="CuidadorTradicional">
              <label> NÃO </label>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="row">
            <div class="col-md-8">
              <label> PARTICIPA DE ALGUM GRUPO COMUNITÁRIO ? </label>
            </div>
            <div class="col-md-2">
              <input class="form-check-input" type="radio" name="GrupoComunitario">
              <label> SIM </label>
            </div>
            <div class="col-md-2">
              <input class="form-check-input" type="radio" name="GrupoComunitario">
              <label> NÃO </label>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="row">
            <div class="col-md-8">
              <label> POSSUI ALGUM PLANO DE SAÚDE PRIVADO ? </label>
            </div>
            <div class="col-md-2">
              <input class="form-check-input" type="radio" name="PlanoSaude">
              <label> SIM </label>
            </div>
            <div class="col-md-2">
              <input class="form-check-input" type="radio" name="PlanoSaude">
              <label> NÃO </label>
            </div>
          </div>
        </div>
      </div>

      <hr>

      <div class="row">
        <div class="col-md-8">
          <div class="row">
            <div class="col-md-8">
              <label> É MEMBRO DE POVO OU COMUNIDADE TRADICIONAL ? </label>
            </div>
            <div class="col-md-2">
              <input class="form-check-input" type="radio" name="PovoTradicional">
              <label> SIM </label>
            </div>
            <div class="col-md-2">
              <input class="form-check-input" type="radio" name="PovoTradicional">
              <label> NÃO </label>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <label> SE SIM, QUAL ? </label>
          <textarea class="form-control text-center">  </textarea>
        </div>
      </div>

      <hr>

      <div class="row">
        <div class="col-md-4">
          <label>DESEJA INFORMAR ORIENTAÇÃO SEXUAL ?</label>
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-6">
                <input class="form-check-input" type="radio" name="OrientacaoSexual">
                <label> SIM </label>
              </div>
              <div class="col-md-6">
                <input class="form-check-input" type="radio" name="OrientacaoSexual">
                <label> NÃO </label>
              </div>
            </div>

            <div class="row">
              <div class="container">
                <div class="col-md-12">
                  <label> SE SIM, QUAL ? </label>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <input class="form-check-input" type="radio" name="Sexo">
                    <label> HETEROSEXUAL </label>
                  </div>
                  <div class="col-md-6">
                    <input class="form-check-input" type="radio" name="Sexo">
                    <label> BISEXUAL </label>
                  </div>
                  <div class="col-md-6">
                    <input class="form-check-input" type="radio" name="Sexo">
                    <label> HOMOSEXUAL (GAY/LÉSBICA) </label>
                  </div>
                  <div class="col-md-6">
                    <input class="form-check-input" type="radio" name="Sexo">
                    <label> OUTRA </label>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <label> DESEJA INFORMAR IDENTIDADE DE GÊNERO ? </label>
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-6">
                <input class="form-check-input" type="radio" name="IdentdadeGenero">
                <label> SIM </label>
              </div>
              <div class="col-md-6">
                <input class="form-check-input" type="radio" name="IdentdadeGenero">
                <label> NÃO </label>
              </div>
            </div>
            <div class="row">
              <div class="container">
                <div class="col-md-12">
                  <label> SE SIM, QUAL ? </label>
                </div>

                <div class="row">
                  <div class="col-md-6">
                    <input class="form-check-input" type="radio" name="Genero">
                    <label> HOMEM TRANSEXUAL </label>
                  </div>
                  <div class="col-md-6">
                    <input class="form-check-input" type="radio" name="Genero">
                    <label> MULHER TRANSEXUAL </label>
                  </div>
                  <div class="col-md-6">
                    <input class="form-check-input" type="radio" name="Genero">
                    <label> TRAVESTI </label>
                  </div>
                  <div class="col-md-6">
                    <input class="form-check-input" type="radio" name="Genero">
                    <label> OUTRO </label>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <label>VOCÊ TEM ALGUM TIPO DE DEFICIÊNCIA ?</label>
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-6">
                <input class="form-check-input" type="radio" name="AlgumaDeficiencia">
                <label> SIM </label>
              </div>
              <div class="col-md-6">
                <input class="form-check-input" type="radio" name="AlgumaDeficiencia">
                <label> NÃO </label>
              </div>
            </div>
            <div class="row">
              <div class="container">
                <div class="col-md-12">
                  <label> SE SIM, QUAL ? </label>
                </div>

                <div class="row">
                  <div class="col-md-6">
                    <input class="form-check-input" type="radio" name="QualDeficiencia">
                    <label> AUDITIVA </label>
                  </div>
                  <div class="col-md-6">
                    <input class="form-check-input" type="radio" name="QualDeficiencia">
                    <label> VISUAL </label>
                  </div>
                  <div class="col-md-6">
                    <input class="form-check-input" type="radio" name="QualDeficiencia">
                    <label> INTELECTUAL </label>
                  </div>
                  <div class="col-md-6">
                    <input class="form-check-input" type="radio" name="QualDeficiencia">
                    <label> FISICA </label>
                  </div>
                  <div class="col-md-6">
                    <input class="form-check-input" type="radio" name="QualDeficiencia">
                    <label> OUTRA </label>
                  </div>
                </div>
              </div>
            </div>
          </div>
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
            <a class="btn btn-primary"
              href="C:\Users\albuq\Desktop\projeto_siab\siab\questionario_autoreferido_de_condicoes_saude.html"
              role="button">AVANÇAR</a>
          </div>
        </div>

        <div class="col-md-4">

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
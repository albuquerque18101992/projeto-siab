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

	<title> Questionario autoreferido de Condições/Situações de Saúde </title>

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
					<img alt="ESUS" src="C:\Users\albuq\Desktop\projeto_siab\img\esus.png"/>
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
					<h2 class="text-center" id="titulo"> QUESTIONÁRIO AUTOREFERIDO DE CONDIÇÕES/SITUAÇÕES DE SAÚDE </h2>
				</div>
			</div>

			<br>
			<br>
			<br>



			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h5 class="text-on-pannel text-primary"> <strong class="text-uppercase"> CONDIÇÕES/SITUAÇÕES DE
								SAÚDE GERAIS</h5></strong>
					</div>
				</div>

				<!--Daqui para baixo linha (esta gravida)-->
				<br>
				<div class="row">
					<div class="col-md-3">
						<label> ESTÁ GRAVIDA ? </label>
					</div>
					<div class="col-md-1">
						<input class="form-check-input" type="radio" name="EstaGestante">
						<label> SIM </label>
					</div>
					<div class="col-md-1">
						<input class="form-check-input" type="radio" name="EstaGestante">
						<label> NÃO </label>
					</div>
					<div class="col-md-7">
						<label> SE SIM, QUAL É A MATERNIDADE DE REFERÊNCIA ? </label>
						<input type="TEXT" class="form-control" placeholder="MATERNIDADE REFERÊNCIA">
					</div>
				</div>


				<!--As 12 colunas do campo (esta gravida)-->
				<br>
				<div class="row">
					<!--LINHA ABRE (SOBRE SEU PESO, VOCÊ SE CONSIDERA) .... -->
					<div class="col-md-6">
						<!--COLUNA ABRE (SOBRE SEU PESO, VOCE SE CONSIDERA) .....-->
						<label> SOBRE SEU PESO, VOCÊ SE CONSIDERA ? </label>
						<div class="row">
							<div class="col-md-3">
								<input class="form-check-input" type="radio" name="EstaGestante">
								<label> ABAIXO DO PESO </label>
							</div>
							<div class="col-md-3">
								<input class="form-check-input" type="radio" name="EstaGestante">
								<label> PESO ADEQUADO </label>
							</div>
							<div class="col-md-3">
								<input class="form-check-input" type="radio" name="EstaGestante">
								<label> ACIMA DO PESO </label>
							</div>
						</div>

						<br>
						<br>
						<br>
						<br>

						<div class="row">
							<div class="col-md-8">
								<label> ESTA FUMANTE </label>
							</div>
							<div class="row">
								<div class="col-md-6">
									<input class="form-check-input" type="radio" name="EstaFumante">
									<label> SIM </label>
								</div>
								<div class="col-md-6">
									<input class="form-check-input" type="radio" name="EstaFumante">
									<label> NÃO </label>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-8">
								<label> FAZ USO DE ÁLCOOL ? </label>
							</div>
							<div class="row">
								<div class="col-md-6">
									<input class="form-check-input" type="radio" name="UsaAlcool">
									<label> SIM </label>
								</div>
								<div class="col-md-6">
									<input class="form-check-input" type="radio" name="UsaAlcool">
									<label> NÃO </label>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-8">
								<label> FAZ USO DE OUTRAS DROGAS ? </label>
							</div>
							<div class="row">
								<div class="col-md-6">
									<input class="form-check-input" type="radio" name="UsaDrogas">
									<label> SIM </label>
								</div>
								<div class="col-md-6">
									<input class="form-check-input" type="radio" name="UsaDrogas">
									<label> NÃO </label>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-8">
								<label> TEM HIPERTENSÃO ARTERIAL ? </label>
							</div>
							<div class="row">
								<div class="col-md-6">
									<input class="form-check-input" type="radio" name="HipertensaoArterial">
									<label> SIM </label>
								</div>
								<div class="col-md-6">
									<input class="form-check-input" type="radio" name="HipertensaoArterial">
									<label> NÃO </label>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-8">
								<label> TEM DIABETES ? </label>
							</div>
							<div class="row">
								<div class="col-md-6">
									<input class="form-check-input" type="radio" name="Diabetes">
									<label> SIM </label>
								</div>
								<div class="col-md-6">
									<input class="form-check-input" type="radio" name="Diabetes">
									<label> NÃO </label>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-8">
								<label> TEVE AVC/DERRAME ? </label>
							</div>
							<div class="row">
								<div class="col-md-6">
									<input class="form-check-input" type="radio" name="AVC">
									<label> SIM </label>
								</div>
								<div class="col-md-6">
									<input class="form-check-input" type="radio" name="AVC">
									<label> NÃO </label>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-8">
								<label> TEVE INFARTO ? </label>
							</div>
							<div class="row">
								<div class="col-md-6">
									<input class="form-check-input" type="radio" name="TeveInfarto">
									<label> SIM </label>
								</div>
								<div class="col-md-6">
									<input class="form-check-input" type="radio" name="TeveInfarto">
									<label> NÃO </label>
								</div>
							</div>
						</div>

						<br>

						<div class="row">
							<div class="col-md-12">
								<label> TEM DOENÇA CARDÍACA/DO CORAÇÃO ? </label>
								<div class="row">
									<div class="col-md-6">
										<input class="form-check-input" type="radio" name="DoencaCardiaca">
										<label> SIM </label>
									</div>
									<div class="col-md-">
										<input class="form-check-input" type="radio" name="DoencaCardiaca">
										<label> NÃO </label>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-12">
								<label> SE SIM, INDIQUE QUAL (IS) </label>
							</div>
						</div>
						<div class="col-md-8">
							<input class="form-check-input position-relative" type="checkbox" value="RESPIRACAO">
							<label> INSUFICIENCIA-CARDÍACA </label>
						</div>
						<div class="col-md-8">
							<input class="form-check-input position-relative" type="checkbox" value="RESPIRACAO">
							<label> OUTRO </label>
						</div>
						<div class="col-md-8">
							<input class="form-check-input position-relative" type="checkbox" value="RESPIRACAO">
							<label> NÃO SABE </label>
						</div>

						<br>


						<div class="row">
							<div class="col-md-12">
								<label> TEM OU TEVE PROBLEMAS NOS RINS ? </label>
								<div class="row">
									<div class="col-md-6">
										<input class="form-check-input" type="radio" name="DoencaPulmao">
										<label> SIM </label>
									</div>
									<div class="col-md-">
										<input class="form-check-input" type="radio" name="DoencaPulmao">
										<label> NÃO </label>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-12">
								<label> SE SIM, INDIQUE QUAL (IS) </label>
							</div>
						</div>
						<div class="col-md-8">
							<input class="form-check-input position-relative" type="checkbox" value="RESPIRACAO">
							<label> INSUFICIENCIA-RENAL </label>
						</div>
						<div class="col-md-8">
							<input class="form-check-input position-relative" type="checkbox" value="RESPIRACAO">
							<label> OUTRO </label>
						</div>
						<div class="col-md-8">
							<input class="form-check-input position-relative" type="checkbox" value="RESPIRACAO">
							<label> NÃO SABE </label>
						</div>



					</div>
					<!--COLUNA FECHA (SOBRE SEU PESO, VOCE SE CONSIDERA) -->

					<div class="row">
						<!--LINHA ABRE (TEM DOENÇA RESPIRATORIA NO PULMÃO ?) ......-->
						<div class="col-md-12">
							<!--COLUNA ABRE (TEM DOENÇA RESPIRATORIA NO PULMÃO ?) ......-->
							<label> TEM DOENÇA RESPIRATÓRIA/NO PULMÃO ? </label>
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
									<label> SE SIM, INDIQUE QUAL (IS) ? </label>
								</div>
							</div>
							<div class="row">

								<div class="col-md-5">
									<input class="form-check-input position-relative" type="checkbox"
										value="RESPIRACAO">
									<label> ASMA </label>
								</div>
								<div class="col-md-5">
									<input class="form-check-input position-relative" type="checkbox"
										value="RESPIRACAO">
									<label> DPOC/ENFISEMA </label>
								</div>
								<div class="col-md-5">
									<input class="form-check-input position-relative" type="checkbox"
										value="RESPIRACAO">
									<label> OUTRAS </label>
								</div>
								<div class="col-md-5">
									<input class="form-check-input position-relative" type="checkbox"
										value="RESPIRACAO">
									<label> NÃO SABE </label>
								</div>
							</div>

							<br>

							<div class="row">
								<div class="col-md-12">
									<div class="row">
										<div class="col-md-8">
											<label> ESTÁ COM HANSENÍASE ? </label>
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
											<label> ETSÁ COM TURBECULOSE ? </label>
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

									<div class="row">
										<div class="col-md-8">
											<label> TEM OU TEVE CÂNCER ? </label>
										</div>
										<div class="row">
											<div class="col-md-6">
												<input class="form-check-input" type="radio" name="Cancer">
												<label> SIM </label>
											</div>
											<div class="col-md-6">
												<input class="form-check-input" type="radio" name="Cancer">
												<label> NÃO </label>
											</div>
										</div>
									</div>
								</div>
							</div>


							<br>
							<br>

							<div class="row">
								<div class="col-md-12">
									<label> TEVE ALGUMA INTERNAÇÃO NOS ÚLTIMOS 12 MESES ? </label>
								</div>
							</div>

							<div class="row">
								<div class="col-md-2">

								</div>
								<div class="col-md-4">
									<input class="form-check-input" type="radio" name="DozeMeses">
									<label> SIM </label>
								</div>
								<div class="col-md-4">
									<input class="form-check-input" type="radio" name="DozeMeses">
									<label> NÃO </label>
								</div>
								<div class="col-md-2">

								</div>
							</div>

							<div class="col-md-12">
								<div class="row">
									<div class="form-group text-center">
										<label class="campo"> SE SIM POR QUAL CAUSA ? </label>
										<textarea class="form-control text-center">  </textarea>
									</div>
								</div>
							</div>

							<br>

							<div class="row">
								<div class="col-md-8">
									<label> ALGUM PROBLEMA DE SAÚDE MENTAL ? </label>
								</div>
								<div class="row">
									<div class="col-md-6">
										<input class="form-check-input" type="radio" name="SaudeMental">
										<label> SIM </label>
									</div>
									<div class="col-md-6">
										<input class="form-check-input" type="radio" name="SaudeMental">
										<label> NÃO </label>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-md-8">
									<label> ESTÁ ACAMADO ? </label>
								</div>
								<div class="row">
									<div class="col-md-6">
										<input class="form-check-input" type="radio" name="Acamado">
										<label> SIM </label>
									</div>
									<div class="col-md-6">
										<input class="form-check-input" type="radio" name="Acamado">
										<label> NÃO </label>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-md-8">
									<label> ESTÁ DOMICILIADO ? </label>
								</div>
								<div class="row">
									<div class="col-md-6">
										<input class="form-check-input" type="radio" name="Domiciliado">
										<label> SIM </label>
									</div>
									<div class="col-md-6">
										<input class="form-check-input" type="radio" name="Domiciliado">
										<label> NÃO </label>
									</div>
								</div>
							</div>

							<br>


							<div class="row">
								<div class="col-md-12">
									<label> USA PLANTAS MEDICINAIS ? </label>
								</div>
							</div>

							<div class="row">
								<div class="col-md-2">

								</div>
								<div class="col-md-4">
									<input class="form-check-input" type="radio" name="Cancer">
									<label> SIM </label>
								</div>
								<div class="col-md-4">
									<input class="form-check-input" type="radio" name="Cancer">
									<label> NÃO </label>
								</div>
								<div class="col-md-2">

								</div>
							</div>

							<div class="col-md-12">
								<div class="row">
									<div class="form-group text-center">
										<label class="campo"> SE SIM, INDIQUE QUAL ? </label>
										<textarea class="form-control text-center">  </textarea>
									</div>
								</div>
							</div>

							<br>


							<div class="row">
								<div class="col-md-8">
									<label> USA OUTRAS PRÁTICAS COMPLEMENTARES ? </label>
								</div>
								<div class="row">
									<div class="col-md-6">
										<input class="form-check-input" type="radio" name="Complementares">
										<label> SIM </label>
									</div>
									<div class="col-md-6">
										<input class="form-check-input" type="radio" name="Complementares">
										<label> NÃO </label>
									</div>
								</div>
							</div>



						</div>

					</div>
					<!--LINHA FECHA (TEM DOENÇA RESPIRATORIA NO PULMÃO ?) ......-->

				</div>
				<!--LINHA FECHA (SOBRE SEU PESO, VOCÊ SE CONSIDERA) ......-->

				<hr>

				<div class="row">
					<div class="col-md-12">
						<label> OUTRAS CONDIÇÕES DE SAÚDE ? </label>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<label> 1 - QUAL ? </label>
						<textarea class="form-control text-center">  </textarea>
					</div>

					<div class="col-md-4">
						<label> 2 - QUAL ? </label>
						<textarea class="form-control text-center">  </textarea>
					</div>

					<div class="col-md-4">
						<label> 3 - QUAL ? </label>
						<textarea class="form-control text-center">  </textarea>
					</div>
				</div>


			</div>
			<!--container01-->

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
							href="C:\Users\albuq\Desktop\projeto_siab\siab\cidadao_em_situacao_de_rua.html"
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
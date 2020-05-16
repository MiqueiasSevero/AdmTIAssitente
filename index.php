<?php
	session_start(); 
?>
<!DOCTYPE html>
<html>
	<header>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
			<link rel="stylesheet" href="css/style.css">	
			<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
			<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
			<link href="https://unpkg.com/material-components-web@v4.0.0/dist/material-components-web.min.css" rel="stylesheet">
  			<script src="https://unpkg.com/material-components-web@v4.0.0/dist/material-components-web.min.js"></script>
			<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  

	</header>
	<body>



		
		<div class="container">

				<div class="row">
					<div class="col-md-4 col-lg-4 col-sm-6 my-auto ml-auto mr-auto">
						
						<?php 
							if (isset($_SESSION['msg'])){
								echo '<div class="alert alert-danger my-5" role="alert">
									'. $_SESSION['msg']. ' 
									<button class="close" data-dismiss="alert" aria-label="Close">
										<spam aria-hidden="true">&times;</spam>
									</button>
									</div>';
																	 
								unset($_SESSION['msg']);
							}
						?>
						<div class="card text-center my-5">
							<div class="card-header bg-info text-white border border-secondary rounded">
								<div class="ml-auto mr-auto">
								<i class="material-icons w-100">computer</i>
									<h5 class="card-title">IT - Services</h5>
								</div>
							</div>
							<div class="card-body flex border border-secondary rounded">
								<form method="POST" action="objetos/validaLogin.php">
									<div class="row form-group text-center">
										<label class="col-sm-12 col-md-12 lead">Usuário ou Email:</label>
										<i id="imgIconLogin" class="ml-2 mr-2 my-auto material-icons">person</i>
										<input class="col-10 form-control my-auto" type="text" name="usuarioLogin" id="usuarioLogin" placeholder="Digite usuário ou email">
									
									</div>
									<div class="row form-group text-center">
										<label class="col-sm-12 col-md-12 lead">Senha:</label>
										<i id="imgIconLogin" class="ml-2 mr-2 my-auto material-icons">lock</i>
										<input class="col-10 form-control my-auto" type="password" name="senhaLogin" id="senhaLogin" placeholder="Digite a senha">
									
									</div>
									<div class="row form-group text-md-left text-sm-center">
										
										<input class="col-lg-6 col-md-6 col-sm-8 col-10 form-control my-auto btn btn-outline-primary ml-auto mr-auto" type="submit" id="botaoEntrarLogin" name="botaoEntrarLogin" value="Entrar">
									
									</div>


								</form>

							</div>
							<div class="card-footer border border-secondary rounded">

									<h5 class="card-title">Não está cadastrado? Click abaixo!</h5>
									<input class="col-lg-6 col-md-6 col-sm-8 col-10 form-control my-auto btn btn-outline-info ml-auto mr-auto"  data-toggle="modal" data-target="#modalCadastro" type="button" id="botaoEntrarLogin" value="Cadastre-se">

							</div>
						</div>
					</div>
				</div>
		</div>		






	

			<!-- Modal -->
			<div class="modal fade" id="modalCadastro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
					<div class="modal-header bg-info text-white">
						<h5 class="modal-title" id="exampleModalLongTitle">Cadastro - Usuário</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
							<form method="POST" action="objetos/validaCadastro.php">
								<div class="form-row">
									<div class="form-group col-md-8">
										<label for="nomeCadastro">Nome:</label>
										<input class="form-control" id="nomeCadastro" name="nomeCadastro"type="text" placeholder="Nome...">
									</div>

								</div>
								<div class="form-row">
									<div class="form-group col-md-8">
										<label for="ultimoSobrenomeCadastro">Último Sobrenome:</label>
										<input class="form-control" id="nomeCadastro" name="sobreNomeCadastro" type="text" placeholder="Último Sobrenome...">
									</div>

								</div>
								<div class="form-row">
									<div class="form-group col-md-8">
										<label for="emailCadastro">Email:</label>
										<input class="form-control" id="emailCadastro" name="emailCadastro" type="email" placeholder="Email...">
									</div>

								</div>
								<div class="form-row">
									<div class="form-group col-md-8">
										<label for="senhaCadastro">Senha:</label>
										<input class="form-control" id="senhaCadastro" name="senhaCadastro" type="password" placeholder="Senha...">
									</div>

								</div>
								<div class="form-row">
									<div class="form-group col-md-8">
										<label for="confirmaSenhaCadastro">Confirma senha:</label>
										<input class="form-control" id="confirmaSenhaCadastro" name="confirmaSenhaCadastro" type="password" placeholder="Confirma senha...">
									</div>

								</div>
							
							</form>
						
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-outline-info" data-dismiss="modal">Fechar</button>
						<button type="submit" name="botaoCadastrarUsuario" class="btn btn-outline-primary">Enviar</button>
					</div>
					</div>
				</div>
			</div>			


		</body>

</html>		
		
		<script src="//cdnjs.cloudflare.com/ajax/libs/validate.js/0.13.1/validate.min.js"></script>
		<script src="./js/venda.js" type="text/javascript">	</script>
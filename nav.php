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
            <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	</header>
	<body>
		
	
		<nav class="navbar  navbar-expand-lg navbar-dark bg-info">

        <div class="container">
            
            <a class="navbar-brand h1 mb-0" href="#"><i class="material-icons auto my-auto">computer</i></a>
            <!--mb =  magin botton-->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSite">

                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="corpoGeral.php?dir=paginas&file=geradorBarras">Gerador de C. Barras</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="corpoGeral.php?dir=paginas&file=auditoria">Calcular Auditoria</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="corpoGeral.php?dir=paginas&file=pesaveis">Código de Balança</a>
                    </li>
                  
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">

                        <a class="nav-link dropdown-toggle text-center text-uppercase" id="navDrop" href="#" data-toggle="dropdown">
						   <?php 
								if(!empty($_SESSION['id'])){
								echo "Olá,  ". $_SESSION['nome'] . "!";
								}else{
									$_SESSION['msg'] = "Faça login para acessar!";
    								header("Location: index.php");

								}

						 		 
						   ?>
                        </a>
                        <div class="dropdown-menu border-info">
						<a class="dropdown-item btn btn-outline-info" href="objetos/sair.php">Sair</a>
                            
                        </div>
                    </li>
                </ul>
                <form class="form-inline">
                    <input class="form-control ml-4 mr-2" type="search" praceholder="Buscar...">
                    <button class="btn btn-outline-dark" type="submit">Buscar</button>
                </form>

            </div>
        </div>
    </nav>

 
		
	</body>

</html>
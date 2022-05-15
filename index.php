<?php 
/*
 * Sistemas de Gestão para Oficinas Mecânicas
 * edineymartinstorres@gmail.com
 * Agosto/2021
 */
 ?>

 <!DOCTYPE html>
<html>
<head>
  <title>Sistemas Gestão | Oficina</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
  <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
  <link rel="icon" href="img/favicon.ico" type="image/x-icon">
<link href="css/style.css" rel="stylesheet">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" type="text/css" href="css/login/util.css">
<link rel="stylesheet" type="text/css" href="css/login/main.css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>
<section class="login-block">
    <div class="container">
	<div class="row">
		<div class="col-md-4 login-sec">
		   	<h2 class="text-center">Acesso Restrito</h2>
		    <form class="login-form" method="post" action="autenticar.php">
  <div class="form-group">
    <label for="exampleInputEmail1">Usuário</label>
    <input type="text" name="usuario" class="form-control" placeholder="Usuário" required>
    </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Senha</label>
    <input type="password" name="senha" class="form-control" placeholder="" required>
  </div>
    <div class="form-check">
    <label class="form-check-label">
      <input type="checkbox" class="form-check-input">
      <small>Lembrar-Me</small>
	</label>

	<button type="submit" class="btn btn-success btn-sm float-right mr-2">Entrar</button>
	
  </div>
  </form>
	</div>
		<div class="col-md-8 login100-form-title" style="background-image: url(img/banners/03.png)">

			</div>
		</div>
	</section>
</body>
</html>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta http-equiv="cache-control" content="max-age=0" />
	<meta http-equiv="cache-control" content="no-cache" />
	<meta http-equiv="expires" content="0" />
	<meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
	<meta http-equiv="pragma" content="no-cache" />
	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/css/bootstrap.min.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/css/template.css" type="text/css" />
	<title>CONDUAPP | LOGIN</title>
	<link rel="shortcut icon" href="<?php echo BASE_URL; ?>/assets/img/favicon.png" />
</head>

<body>
	<div class="wrapper">
	<?php echo $_SESSION['usuario']; ?>
		<div class="container">

			<div class="content-field">
				<div class="login-img">
					<img src="<?php echo BASE_URL; ?>/assets/img/applogo_white_cel.jfif" class="img-fluid mx-auto d-block" />
				</div>
				<!-- <form method="POST" > -->
			 <form method="POST" action="<?php echo BASE_URL; ?>login/clienteLogar/" ><div class="row m-top css"> 
			 	<div class="row m-top">
					<div class="col-12">
						<label class="form-custom"><input type="radio" name="optradio" value="P1"> SOU PASSAGEIRO - 1</label>

						<label class="form-custom"><input type="radio" name="optradio" value="M2"  checked> SOU MOTORISTA - 2</label>
						<!-- <input type="password" class="form-custom" id="login_pass" name="login_pass"  /> -->
					</div>
				</div>

					<div class="col-12">
						<label for="login_user">Usuário</label>
						<input type="text" class="form-custom" id="login_user" name="login_user"  autofocus />
					</div>
				</div>


				<div class="row">
					<div class="col-12">
						<label for="login_pass">Senha</label>
						<input type="password" class="form-custom" id="login_pass" name="login_pass"  />
					</div>
				</div>
				<?php if(!empty($error)): ?>
					<div class="alert alert-danger alert-dismissible fade show m-top" role="alert">
						<strong>ERRO!</strong>
						<?php echo $error; ?>
						<button type="button" class="close" data-dismiss="alert">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
				<?php endif; ?>
				

				<div class="row m-top">
					<div class="col-12">
						<button type="submit" class="btn-block btn-black">ENTRAR</button>
						<!-- <button type="submit" class="btn-block btn-black" name="btn_login">ENTRAR</button> -->
					</div>
				</div>

				<div class="row">
					<div class="col-xs-12 col-sm-6">
						<a href="<?php echo BASE_URL; ?>login/novocadastro/" class="btn-block btn-outline-black m-top">CADASTRE-SE</a>
					</div>

					<!-- <div class="col-xs-12 col-sm-6">
						<button class="btn-block btn-outline-black m-top">CADASTRE-SE</button>
					</div>
 -->
					<!-- <div class="col-xs-12 col-sm-6">
						<a href="<?php echo BASE_URL; ?>cadastroCliente/" class="btn-block btn-outline-black m-top">ESQUECI MINHA SENHA</a>
					</div>
 -->
 				<div class="col-xs-12 col-sm-6">
						<button class="btn-block btn-outline-black m-top">ESQUECI MINHA SENHA</button>
					</div>

 				</div>
			</form>
			</div>

		</div>
		
		<div class="push"></div>
	</div>

	
	<!-- <footer class="login-footer">
		<p class="text-center">&copy; 2019 - <a href="http://facebook.com/mazal.ti" target="_blank">Mazal TI</a>. Todos os direitos reservados. v1.00</p>
	</footer>
	

	<script type="text/javascript" src="../assets/js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="../assets/js/bootstrap.bundle.min.js"></script>
	<script type="text/javascript" src="../assets/js/jquery.mask.min.js"></script>
	<script type="text/javascript" src="../assets/js/script_mask.js"></script>
	<script type="text/javascript" src="../assets/js/script.js"></script> -->
</body>
</html>
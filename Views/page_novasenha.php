<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css" type="text/css" />
	<link rel="stylesheet" href="../assets/css/template.css" type="text/css" />
	<title>CONDUAPP | NOVA SENHA</title>
	<link rel="shortcut icon" href="../assets/img/favicon.png" />
</head>

<body>
	<div class="wrapper">

		<div class="container">

			<div class="content-field">
				<div class="login-img">
					<img src="../assets/img/applogo_white_cel.jfif" class="img-fluid mx-auto d-block" />
				</div>

				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 m-top">
						<label for="novaSenha">Nova Senha</label>
						<input type="password" class="form-custom" id="novaSenha" name="novaSenha" required autofocus />
					</div>
					
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 m-top">
						<label for="ConfNovaSenha">Confirmar Nova Senha</label>
						<input type="password" class="form-custom" id="ConfNovaSenha" name="ConfNovaSenha" required autofocus />
					</div>
				</div>
				
				<div class="alert alert-success alert-dismissible fade show m-top" role="alert">
					<strong>SUCESSO!</strong>
					Senha alterada com sucesso.
					<button class="close" data-dismiss="alert">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				
				<div class="alert alert-danger alert-dismissible fade show m-top" role="alert">
					<strong>ERRO!</strong>
					Não foi possível alterar sua senha.
					<button class="close" data-dismiss="alert">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 m-top">
						<button class="btn-black btn-block">ALTERAR SENHA</button>
					</div>
					
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 m-top">
						<button class="btn-outline-black btn-block">VOLTAR</button>
					</div>
				</div>


			</div>

		</div>
		
		<div class="push"></div>
	</div>
	
	<footer class="login-footer">
		<p class="text-center">&copy; 2019 - <a href="http://facebook.com/mazal.ti" target="_blank">Mazal TI</a>. Todos os direitos reservados. v1.00</p>
	</footer>
	

	<script type="text/javascript" src="../assets/js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="../assets/js/bootstrap.bundle.min.js"></script>
	<script type="text/javascript" src="../assets/js/jquery.mask.min.js"></script>
	<script type="text/javascript" src="../assets/js/script_mask.js"></script>
	<script type="text/javascript" src="../assets/js/script.js"></script>
</body>
</html>
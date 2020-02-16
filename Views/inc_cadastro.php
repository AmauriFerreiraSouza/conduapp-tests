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
		<div class="container">
			<div class="content-field">
				<div class="login-img">
					<img src="<?php echo BASE_URL; ?>/assets/img/applogo_white_cel.jfif" class="img-fluid mx-auto d-block" />
				</div>
				<form method="POST" action="<?php echo BASE_URL; ?>login/">
				<!-- <form method="POST"> -->
					<div class="row m-top">
							<div class="col-12">
								<label for="cad_nome">Nome *</label>
								<input type="email" class="form-custom" id="cad_nome" name="cadnome"  autofocus />
							</div>
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 m-top">
						<label for="cad_cpf">CPF *</label>
						<input type="text" class="form-custom" id="cad_cpf" name="cadcpf"  />
					</div>
					
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 m-top">
						<label for="driver_confemail">Telefone Contato *</label>
						<input type="text" class="form-custom" id="driver_confemail" name="driver_confemail"  />
					</div>

					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 m-top">
						<label for="driver_email">E-mail *</label>
						<input type="text" class="form-custom" id="driver_email" name="driver_email"  />
					</div>
					
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 m-top">
						<label for="driver_confemail">Confirmar E-mail *</label>
						<input type="text" class="form-custom" id="driver_confemail" name="driver_confemail"  />
					</div>
					
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 m-top">
						<label for="driver_pass">Senha *</label>
						<input type="password" class="form-custom" id="driver_pass" name="driver_pass"  />
					</div>
					
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 m-top">
						<label for="driver_confpass">Confirmar Senha *</label>
						<input type="password" class="form-custom" id="driver_confpass" name="driver_confpass"  />
					</div>

					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 m-top">
						<button type="submit" class="btn-black btn-block" name="btnProsseguir">CADASTRE-SE</button>
					</div>
					
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 m-top">
						<button type="submit" class="btn-outline-black btn-block" name="btnVoltar" onclick="cadastro_back()">VOLTAR</button>
					</div>
				</form>
			</div>
		</div>
	<div class="push"></div>
	<footer class="login-footer">
		<p class="text-center">&copy; 2019 - <a href="http://facebook.com/mazal.ti" target="_blank">Mazal TI</a>. Todos os direitos reservados. v1.00</p>
	</footer>

	</div>
	<script>
		function cadastro_back(){
			window.location.href = BASE_URL+'/login';
		}
	</script>

</body>
</html>
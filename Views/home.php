<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/css/bootstrap.min.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/css/template.css" type="text/css" />
	<title>PAINEL | CONDUAPP ONLINE</title>
	<link rel="shortcut icon" href="<?php echo BASE_URL; ?>/assets/img/favicon.png" />
</head>

<body>
	<div class="wrapper">
		<div class="container">
			<div class="content-field">
				<div class="login-img">
					<img src="<?php echo BASE_URL; ?>/assets/img/applogo_white_cel.jfif" class="img-fluid mx-auto d-block" />
				</div>
				
				<p class="text-justify">Olá, em que categoria você se encaixa?</p>
				
				<div class="row">
					<div class="col-12">
						<button class="btn-outline-black btn-block" name="btn_passenger" autofocus > <a href="<?php echo BASE_URL;?>/home/buscaMotorista">SOU PASSAGEIRO</button>
					</div>
				</div>
<?php   print_r($_SESSION['usuario']);?>
				<div class="row m-top">
					<!-- <div class="col-12">
						<button class="btn-outline-black btn-block" name="btn_driver">SOU MOTORISTA</button>
					</div> -->
					
					<div class="col-12">
						<button class="btn-outline-black btn-block" name="btn_driver"><a href="<?php echo BASE_URL;?>home/telaIncCadastro">SOU MOTORISTA</a></button>
					</div>
				</div>

			</div>
		</div>
		
		<div class="push"></div>
	</div>

</body>
</html>
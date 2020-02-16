<!doctype html>
<html lang="pt-br">
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
	<title>PAINEL | CONDUAPP ONLINE</title>
	<link rel="shortcut icon" href="<?php echo BASE_URL; ?>/assets/img/favicon.png" />
</head>

<body>
	<div class="wrapper">
		
		<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #000;">

			<a class="navbar-brand" href="">
				<img src="<?php echo BASE_URL; ?>/assets/img/logo-horizontal-white.png" class="img-fluid" />
			</a>

			<button class="navbar-toggler" data-toggle="collapse" data-target="#navbarMenu">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="navbar-collapse collapse" id="navbarMenu">

				<div class="navbar-nav">
					<a href="" class="nav-item nav-link">Baixar Arquivos</a>
					<a href="http://conduapponline.com.br/contato/" class="nav-item nav-link" target="_blank">Fale Conosco</a>
					<a href="http://conduapponline.com.br/" class="nav-item nav-link" target="_blank">Página na Web</a>
					<a href="<?php echo BASE_URL;?>login/logout" class="nav-item nav-link">Sair do Sistema</a>
				</div>

			</div>

		</nav>
		<main role="main" class="container-fluid">
				<?php $this->loadViewInTemplate($viewName, $viewData); ?>
		</main>

		
		<div class="push"></div>
	</div>
	
	<footer class="login-footer">
		<p class="text-center">&copy;<?php echo INFO['YEAR'] ?> - <a href="http://facebook.com/mazal.ti" target="_blank">Mazal TI</a>. Todos os direitos reservados. <?php echo 'VERSÃO: '.INFO['VERSION']; ?></p>
	</footer>
	<script type="text/javascript" src="<?php echo BASE_URL; ?>/assets/js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="<?php echo BASE_URL; ?>/assets/js/bootstrap.bundle.min.js"></script>
	<script type="text/javascript">var BASE_URL='<?php echo BASE_URL;?>'</script>
	<script type="text/javascript" src="<?php echo BASE_URL; ?>/assets/js/jquery.mask.min.js"></script>
	<script type="text/javascript" src="<?php echo BASE_URL; ?>/assets/js/script_mask.js"></script>
	<script type="text/javascript" src="<?php echo BASE_URL; ?>/assets/js/script.js"></script>
</body>
</html>
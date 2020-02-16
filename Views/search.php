<div class="container">
	<div class="content-field">
		<div class="login-img">
			<img src="<?php echo BASE_URL;?>/assets/img/applogo_white_cel.jfif" class="img-fluid mx-auto d-block" />
		</div>
		
		<div class="row">
			<div class="col-12">
				<label for="search-driver">Busque o motorista pela placa do veículo</label>
				<input type="search" id="search-driver" class="form-custom placa" placeholder="Ex.: AAA-2019" />
			</div>
		</div>
		
		<div class="alert alert-warning alert-dismissible fade show m-top" role="alert">
			<strong>AVISO!</strong>
			Veículo não cadastrado.
			<button class="close" data-dismiss="alert">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>

		<div class="row">
			<div class="col-xs-12 col-sm-6">
				<button type="submit" class="btn-black btn-block m-top">PESQUISAR</button>
			</div>

			<div class="col-xs-12 col-sm-6">
				<button class="btn-outline-black btn-block m-top" onclick="nameclass();">VOLTAR</button>
			</div>
		</div>
	</div>
</div>
<script>
		function nameclass(){
			window.location.href = BASE_URL+'login';
		}
</script>
<div class="container">
	<div class="content-field">
		<div class="avatar-main">
			<img src="../assets/img/user_default.jpg" class="img-fluid mx-auto d-block" />
		</div>
		
		<div class="h5 text-center m-top">Olá, <strong>Azevedo</strong></div>
		
		<div class="alert alert-warning alert-dismissible fade show m-top" role="alert">
			<strong>AVISO!</strong>
			Para liberar o pagamento do <strong>boleto</strong>, você precisa atingir o limite minímo de <strong>75% de acerto</strong> na <strong>Prova do Conduapp</strong>.
			<button class="close" data-dismiss="alert">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>
		<table class="table-custom text-uppercase text-center">
			<tr>
				<th>STATUS</th>
				<th>PROVA</th>
			</tr>
			<tr>
				<td>
					<div class="text-success">ATIVO</div>
				</td>
				<td>
					<div class="text-danger">74%</div>
				</td>
			</tr>
		</table>
		
		<div class="row">
			<div class="col-xs-12 col-sm-6 m-top">
				<a href="../assets/docs/apostila_conduapp.pdf" download>
					<button class="btn-black btn-block">BAIXAR APOSTILA</button>
				</a>
			</div>
			
			<div class="col-xs-12 col-sm-6 m-top">
				<button class="btn-black btn-block" disabled>GERAR BOLETO</button>
			</div>
			
			<div class="col-xs-12 col-sm-6 m-top">
				<button class="btn-black btn-block"><a href="<?php BASE_URL; ?>home/telaIncCadastro" >MEU CADASTRO</a></button>
			</div>

			<div class="col-xs-12 col-sm-6 m-top">
				<button class="btn-black btn-block"><a href="<?php BASE_URL; ?>home/telaCadastroCsv"> CADASTRO DO CONDUAPP</a></button>
			</div>
			<div class="col-xs-12 col-sm-6 m-top">
				<button class="btn-black btn-block"><a href="<?php BASE_URL; ?>home/telaIncCadastro">INFORMAÇÃO CONDUAPP</a></button>
			</div>

			<div class="col-xs-12 col-sm-6 m-top">
				<button class="btn-black btn-block"><a href="<?php BASE_URL; ?>home/telaProvaCsv"> PROVA DO CONDUAPP</a></button>
			</div>
			
			<div class="col-xs-12 col-sm-6 m-top">
				<button class="btn-outline-black btn-block">SAIR</button>
			</div>
		</div>
	</div>
</div>
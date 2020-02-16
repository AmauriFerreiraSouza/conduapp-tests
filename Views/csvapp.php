<div class="container">
	<div class="content-field">
		<div class="login-img">
			<img src="../assets/img/applogo_white_cel.jfif" class="img-fluid mx-auto d-block" />
		</div>

		<div class="h5 text-center text-uppercase">
			<strong>DADOS DO VEÍCULO PARA EMISSÃO DO "CSVAPP"</strong>
			
			<span class="badge badge-info badge-pill popover-exemplo" data-toggle="popover" title="CSVAPP: o que é?" data-content="'CSVAPP' é o Certificado de Segurança do Veículo de Aplicativo." data-placement="top">?</span>
		</div>

		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 m-top">
				<label for="csvapp_mdl">Modelo *</label>
				<input type="text" class="form-custom" id="csvapp_mdl" name="csvapp_mdl" required />
			</div>
			
			<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 m-top">
				<label for="csvapp_marca">Marca *</label>
				<input type="text" class="form-custom" id="csvapp_marca" name="csvapp_marca" required />
			</div>
			
			<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 m-top">
				<label for="csvapp_placa">Placa *</label>
				<input type="text" class="form-custom placa" id="csvapp_placa" name="csvapp_placa" required />
			</div>
			
			<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 m-top">
				<label for="csvapp_meslic">Licenciamento *</label>
				
				<span class="badge badge-info badge-pill popover-exemplo" data-toggle="popover" title="Mês de Licenciamento do Veículo" data-content="Informe o mês de licenciamento do veículo, o seu CSVAPP é anual e vence no mesmo mês do licenciamento." data-placement="top">?</span>
				
				<select class="form-custom" id="csvapp_meslic" required>
					<option select value="JAN">Janeiro</option>
					<option select value="FEV">Fevereiro</option>
					<option select value="MAR">Março</option>
					<option select value="ABR">Abril</option>
					<option select value="MAI">Maio</option>
					<option select value="JUN">Junho</option>
					<option select value="JUL">Julho</option>
					<option select value="AGO">Agosto</option>
					<option select value="SET">Setembro</option>
					<option select value="OUT">Outubro</option>
					<option select value="NOV">Novembro</option>
					<option select value="DEZ">Dezembro</option>
				</select>
			</div>
			
			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 m-top">
				<label for="csvapp_crlv">Licenciamento/CRLV *</label>
				
				<span class="badge badge-info badge-pill popover-exemplo" data-toggle="popover" title="CRLV: o que é?" data-content="'CRLV' é o Certificado de Registro e Licenciamento de Veículo no Município de São Paulo, popularmente conhecido como o 'Documento do Carro'." data-placement="top">?</span>
				
				<input type="file" class="form-control-file" id="csvapp_crlv" name="csvapp_crlv" required />
			</div>
			
			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 m-top">
				<label for="csvapp_insp">Declaração de Inspeção *</label>
				
				<span class="badge badge-info badge-pill popover-exemplo" data-toggle="popover" title="Declaração de Inspeção" data-content="" data-placement="top">?</span>
				
				<input type="file" class="form-control-file" id="csvapp_insp" name="csvapp_insp" required />
			</div>
			
			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 m-top">
				<label for="csvapp_terceiros">Veículo de Terceiros</label>
				
				<span class="badge badge-info badge-pill popover-exemplo" data-toggle="popover" title="O veículo está em nome de terceiros?" data-content="Apresentar declaração, firmada pelo proprietário, de autorização para utilização do veículo na exploração de atividade econômica privada de transporte individual remunerado de passageiros de utilidade pública, caso o condutor não seja o dono do veículo." data-placement="top">?</span>
				
				<input type="file" class="form-control-file" id="csvapp_terceiros" name="csvapp_terceiros" />
			</div>

		</div>
		
		<div class="h5 text-center text-uppercase m-top">
			<strong>ENVIAR FOTOS DO VEÍCULO</strong>
		</div>
		
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 m-top">
				<label for="csvapp_adesivo">Adesivo/OTTCs *</label>
				
				<span class="badge badge-info badge-pill popover-exemplo" data-toggle="popover" title="Adesivos/OTTCs" data-content="Enviar foto do para-brisa do veículos, exibindo os adesivos identificando para quais aplicativos o motorista presta serviços, e os identificadores de que as inspeções veiculares foram feitas (OTTCs)." data-placement="top">?</span>
				
				<input type="file" class="form-control-file" id="csvapp_adesivo" name="csvapp_adesivo" required />
			</div>
			
			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 m-top">
				<label for="csvapp_ftveic">Foto do Veículo *</label>
				<input type="file" class="form-control-file" id="csvapp_ftveic" name="csvapp_ftveic" required />
			</div>
			
			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 m-top">
				<label for="csvapp_ftvel">Foto do Velocímetro *</label>
				<input type="file" class="form-control-file" id="csvapp_ftvel" name="csvapp_ftvel" required />
			</div>
			
			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 m-top">
				<label for="csvapp_ftplacadiant">Foto da Placa Dianteira *</label>
				<input type="file" class="form-control-file" id="csvapp_ftplacadiant" name="csvapp_ftplacadiant" required />
			</div>
			
			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 m-top">
				<label for="csvapp_ftplacatras">Foto da Placa Traseira *</label>
				
				<span class="badge badge-info badge-pill popover-exemplo" data-toggle="popover" title="Foto da Placa Traseira" data-content="Enviar foto da placa traseira com o porta-malas aberto." data-placement="top">?</span>
				
				<input type="file" class="form-control-file" id="csvapp_ftplacatras" name="csvapp_ftplacatras" required />
			</div>
			
			<div class="col-12 m-top">
				<div class="custom-control custom-checkbox">
					<input type="checkbox" class="custom-control-input" id="chkGNV" name="chkGNV">
					<label class="custom-control-label" for="chkGNV">Veículo movido a GNV (Gás Natural Veícular).</label>
				</div>
			</div>
			
			<div class="w-100"></div>
			
			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 m-top">
				<label for="csvapp_ftgnvcilindro">Foto do Cilindro</label>
				
				<input type="file" class="form-control-file" id="csvapp_ftgnvcilindro" name="csvapp_ftgnvcilindro" />
			</div>
			
			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 m-top">
				<label for="csvapp_docalter">Documento do Veículo Alterado</label>
				
				<input type="file" class="form-control-file" id="csvapp_docalter" name="csvapp_docalter" />
			</div>
			
			<div class="col-12 m-top">
				<textarea class="form-custom textarea-cad text-justify" readonly>
O Departamento de Transporte Público – DTP da Secretaria Municipal de Mobilidade e Transportes – SMT, no prazo de 10 (dez) dias úteis, contados da apresentação da documentação pelo interessado, emitirá o CONDUAPP e o CSVAPP. 

§ 2o O DTP poderá exigir das OTTCs, a qualquer tempo, cópias dos documentos de qualquer um dos condutores ou veículos, que serão remetidas de imediato. 
				</textarea>
			</div>
			
			<div class="col-12">
				<div class="custom-control custom-checkbox">
					<input type="checkbox" class="custom-control-input" id="chkDecEmi" name="chkDecEmi" required>
					<label class="custom-control-label" for="chkDecEmi">Declaro que <strong>li e estou ciente</strong>.</label>
				</div>
			</div>
			
			<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 m-top">
				<button type="submit" class="btn-black btn-block" name="btnFinalizar">FINALIZAR</button>
			</div>
			
			<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 m-top">
				<button type="submit" class="btn-outline-black btn-block" name="btnVoltar">VOLTAR</button>
			</div>
		</div>
	</div>
</div>
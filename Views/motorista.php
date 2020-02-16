<div class="container">
	<div class="content-field">
		<div class="login-img">
			<img src="<?php echo BASE_URL;?>/assets/img/applogo_white_cel.jfif" class="img-fluid mx-auto d-block" />
		</div>

		<div class="h5 text-center text-uppercase"><strong>DADOS DO MOTORISTA</strong></div>

		<div class="row">
			
			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 m-top">
				<label for="driver_firstname">Nome *</label>
				<input type="text" class="form-custom nome" id="driver_firstname" name="driver_firstname" required />
			</div>

			<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 m-top">
				<label for="driver_lastname">Sobrenome *</label>
				<input type="text" class="form-custom" id="driver_lastname" name="driver_lastname" required />
			</div>

			<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 m-top">
				<label for="driver_tel">Tel. Fixo</label>
				<input type="tel" class="form-custom ddd_tel" id="driver_tel" name="driver_tel" placeholder="Ex.:(11)0000-0000" />
			</div>

			<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 m-top">
				<label for="driver_cel">Celular *</label>
				<input type="tel" class="form-custom ddd_cel" id="driver_cel" name="driver_cel" placeholder="Ex.:(11)90000-0000" required />
			</div>

			<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 m-top">
				<label for="driver_cpf">CPF *</label>
				<input type="text" class="form-custom cpf" id="driver_cpf" name="driver_cpf" required />
			</div>

			<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 m-top">
				<label for="driver_nmrcnh">Nº CNH *</label>
				<input type="text" class="form-custom cnh" id="driver_nmrcnh" name="driver_nmrcnh" required />
			</div>
			
			<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 m-top">
				<label for="driver_dtvenc">Vencimento CNH *</label>
				
				<span class="badge badge-info badge-pill popover-exemplo" data-toggle="popover" title="Vencimento CNH" data-content="Informe o Vencimento da sua CNH, o seu certificado do CONDUAPP irá vencer na mesma data." data-placement="top">?</span>
				
				<input type="date" class="form-custom cnh" id="driver_dtvenc" name="driver_dtvenc" required />
			</div>

			<div class="w-100"></div>

			<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 m-top">
				<label for="driver_cep">CEP *</label>
				<input type="text" class="form-custom cep" id="driver_cep" name="driver_cep" required />
			</div>

			<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 m-top">
				<label for="driver_end">Endereço *</label>
				<input type="text" class="form-custom" id="driver_end" name="driver_end" required />
			</div>

			<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 m-top">
				<label for="driver_nmr">Nº *</label>
				<input type="text" class="form-custom" id="driver_nmr" name="driver_nmr" required />
			</div>

			<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 m-top">
				<label for="driver_compl">Complemento</label>
				<input type="text" class="form-custom" id="driver_compl" name="driver_compl" />
			</div>

			<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 m-top">
				<label for="driver_bairro">Bairro *</label>
				<input type="text" class="form-custom" id="driver_bairro" name="driver_bairro" required />
			</div>

			<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 m-top">
				<label for="driver_cidade">Cidade *</label>
				<input type="text" class="form-custom" id="driver_cidade" name="driver_cidade" required />
			</div>

			<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 m-top">
				<label for="driver_uf">Estado/UF *</label>
				<select class="form-custom" id="driver_uf" name="driver_uf" required>
					<option select value="AC">Acre</option>
					<option select value="AL">Alagoas</option>
					<option select value="AP">Amapá</option>
					<option select value="AM">Amazonas</option>
					<option select value="BA">Bahia</option>
					<option select value="CE">Ceará</option>
					<option select value="DF">Distrito Federal (Brasília)</option>
					<option select value="ES">Espirito Santo</option>
					<option select value="GO">Goiás</option>
					<option select value="MA">Maranhão</option>
					<option select value="MT">Mato Grosso</option>
					<option select value="MS">Mato Grosso do Sul</option>
					<option select value="MG">Minas Gerais</option>
					<option select value="PA">Pará</option>
					<option select value="PB">Paraíba</option>
					<option select value="PR">Paraná</option>
					<option select value="PE">Pernambuco</option>
					<option select value="PI">Piauí</option>
					<option select value="RJ">Rio de Janeiro</option>
					<option select value="RN">Rio Grande do Norte</option>
					<option select value="RS">Rio Grande do Sul</option>
					<option select value="RO">Rondônia</option>
					<option select value="RR">Roraima</option>
					<option select value="SC">Santa Catarina</option>
					<option select value="SP">São Paulo</option>
					<option select value="SE">Sergipe</option>
					<option select value="TO">Tocantins</option>
				</select>
			</div>

			<div class="w-100"></div>
			
			<div class="col-12 m-top">
				<label>Selecione a(s) Operadora(s) *</label>
			</div>
			
			<div class="col-12">
				<div class="custom-control custom-checkbox custom-control-inline">
					<input type="checkbox" class="custom-control-input" id="chk99" name="chk99">
					<label class="custom-control-label" for="chk99">99</label>
				</div>
				
				<div class="custom-control custom-checkbox custom-control-inline">
					<input type="checkbox" class="custom-control-input" id="chkCabify" name="chkCabify">
					<label class="custom-control-label" for="chkCabify">Cabify</label>
				</div>
				
				<div class="custom-control custom-checkbox custom-control-inline">
					<input type="checkbox" class="custom-control-input" id="chkEasyGo" name="chkEasyGo">
					<label class="custom-control-label" for="chkEasyGo">EasyGo</label>
				</div>
				
				<div class="custom-control custom-checkbox custom-control-inline">
					<input type="checkbox" class="custom-control-input" id="chkLadyDriver" name="chkLadyDriver">
					<label class="custom-control-label" for="chkLadyDriver">Lady Driver</label>
				</div>
				
				<div class="custom-control custom-checkbox custom-control-inline">
					<input type="checkbox" class="custom-control-input" id="chkTelevo" name="chkTelevo">
					<label class="custom-control-label" for="chkTelevo">Televo</label>
				</div>
				
				<div class="custom-control custom-checkbox custom-control-inline">
					<input type="checkbox" class="custom-control-input" id="chkUber" name="chkUber">
					<label class="custom-control-label" for="chkUber">Uber</label>
				</div>
				
				<div class="custom-control custom-checkbox custom-control-inline">
					<input type="checkbox" class="custom-control-input" id="chkWillGo" name="chkWillGo">
					<label class="custom-control-label" for="chkWillGo">WillGo</label>
				</div>
				
				<br />
				
				<label for="oprOutros" class="m-top">Outra(s)</label>
				
				<span class="badge badge-info badge-pill popover-exemplo" data-toggle="popover" title="Outras Operadoras" data-content="Escreva as outras operadoras para qual presta serviços, se for mais de uma separe por ';'. Exemplo: 'Operadora 1; Operadora 2; Operadora 3'" data-placement="top">?</span>
				
				<input type="text" class="form-custom" name="oprOutros" id="oprOutros" placeholder="Ex.: Operadora 1; Operadora 2; Operadora 3" />
			</div>

			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 m-top">
				<label for="driver_img">Foto de Perfil *</label>

				<span class="badge badge-info badge-pill popover-exemplo" data-toggle="popover" title="Foto de Perfil" data-content="Escolha uma foto sua recente e em boa qualidade, você deve estar de frente e o rosto em primeiro plano, o cabelo não deve tampar o rosto (sem chapéu ou óculos, ou outros elementos que escondam parcialmente ou totalmente o rosto), o rosto deve estar bem iluminado e sem sombras, e como em qualquer outro documento, o fundo da foto deve ser neutro e não conter nada além da imagem da pessoa fotografada (padrão RG, CNH, Passaporte, etc)" data-placement="top">?</span>

				<input type="file" class="form-control-file" id="driver_img" name="driver_img" required />
			</div>

			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 m-top">
				<label for="driver_imgcnh">Foto da CNH *</label>

				<span class="badge badge-info badge-pill popover-exemplo" data-toggle="popover" title="Foto da Carteira Nacional de Habilitação (CNH)" data-content="Na Categoria B ou superior que contenha a informação de que exerce atividade remunerada." data-placement="top">?</span>

				<input type="file" class="form-control-file" id="driver_imgcnh" name="driver_imgcnh" required />
			</div>

			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 m-top">
				<label for="driver_compend">Comprovante de Endereço *</label>

				<span class="badge badge-info badge-pill popover-exemplo" data-toggle="popover" title="Comprovante de Endereço" data-content="Enviar Comprovante de Residência em seu nome ou atestado, na forma da Lei Federal Nº 7.115, de 29 de Agosto de 1983." data-placement="top">?</span>

				<input type="file" class="form-control-file" id="driver_compend" name="driver_compend" required />
			</div>

			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 m-top">
				<label for="driver_atestant">Antecedentes Criminais *</label>

				<span class="badge badge-info badge-pill popover-exemplo" data-toggle="popover" title="Atestado de Antecedentes Criminais" data-content="Enviar Certidão Negativa de Antecedentes Criminais. Para solicitar, acesse: http://www.ssp.sp.gov.br/servicos/atestado.aspx" data-placement="top">?</span>

				<input type="file" class="form-control-file" id="driver_atestant" name="driver_atestant" required />
			</div>

			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 m-top">
				<label for="driver_printapp">Captura da Tela do Aplicativo *</label>

				<span class="badge badge-info badge-pill popover-exemplo" data-toggle="popover" title="Captura/Print da Tela de Inscrição nos Aplicativos de Transporte" data-content="Comprometer-se a prestar os serviços de transporte 
remunerado de passageiros de utilidade pública única e exclusivamente por meio de OTTCs." data-placement="top">?</span>

				<input type="file" class="form-control-file" id="driver_printapp" name="driver_printapp" required />
			</div>
			
			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 m-top">
				<label for="driver_inscinss">Inscrição INSS *</label>

				<span class="badge badge-info badge-pill popover-exemplo" data-toggle="popover" title="Inscrição INSS" data-content="Enviar a página do carnê e o comprovante do pagamento. O objetivo é comprovar a inscrição na qualidade de contribuinte individual do Instituto Nacional do Seguro Social (INSS), nos termos da alínea 'h' do inciso V do artigo 11 da Lei Federal Nº 8.213, de 24 de Julho de 1991." data-placement="top">?</span>

				<input type="file" class="form-control-file" id="driver_inscinss" name="driver_inscinss" required />
			</div>

			<div class="col-12 m-top">
				<textarea class="form-custom textarea-cad text-justify" readonly>
SECRETARIA MUNICIPAL DE MOBILIDADE E TRANSPORTES
Departamento de Transportes Públicos
Anexo I da Portaria nº 224/2017-DTP.GAB

DECLARAÇÃO DE COMPROMISSO  

Eu declaro, pelo presente termo de responsabilidade , para os devidos efeitos legais, que trabalharei exclusivamente com aplicativos devidamente credenciados junto á prefeitura do Município de São Paulo, nos termos do Decreto Municipal 56.981/2016 e seus regulamentos por meio das Resoluções do Comitê Municipal do Uso do Viário (CMUV).

Declaro ainda, estar ciente de que o não cumprimento do disposto na presente declaração acarretará a aplicação das sanções previstasa na legislação que rege o transporte individual de passageiros de utilidade pública.
				</textarea>
			</div>

			<div class="col-12">
				<div class="custom-control custom-checkbox">
					<input type="checkbox" class="custom-control-input" id="chkDeclComp" name="chkDeclComp" required>
					<label class="custom-control-label" for="chkDeclComp">Declaro que <strong>li e aceito</strong> a Declaração de Compromisso.</label>
				</div>
			</div>
			
			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 m-top">
				<label for="driver_email">E-mail *</label>
				<input type="text" class="form-custom" id="driver_email" name="driver_email" required />
			</div>
			
			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 m-top">
				<label for="driver_confemail">Confirmar E-mail *</label>
				<input type="text" class="form-custom" id="driver_confemail" name="driver_confemail" required />
			</div>
			
			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 m-top">
				<label for="driver_pass">Senha *</label>
				<input type="password" class="form-custom" id="driver_pass" name="driver_pass" required />
			</div>
			
			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 m-top">
				<label for="driver_confpass">Confirmar Senha *</label>
				<input type="password" class="form-custom" id="driver_confpass" name="driver_confpass" required />
			</div>

			<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 m-top">
				<button type="submit" class="btn-black btn-block" name="btnProsseguir">PROSSEGUIR</button>
			</div>
			
			<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 m-top">
				<button type="submit" class="btn-outline-black btn-block" name="btnVoltar" onclick="voltarhome()">VOLTAR</button>
			</div>

		</div>

	</div>
</div>
<script>
		function voltarhome(){
			window.location.href = BASE_URL+'home';
		}
</script>
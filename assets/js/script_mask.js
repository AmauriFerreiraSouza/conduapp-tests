//‘0’: Um digito obrigatório
//‘9’: Um digito opcional
//‘#’: Um digito com recurção
//‘A’: Uma letra de a até z (maiúsculas ou minusculas) ou um digito
//‘S’: Uma letra de a até z (maiúsculas ou minusculas) sem digito

$(document).ready(function(){
	$('.placa').mask('SSS-0000');
	$('.data').mask('00/00/0000');
	$('.tempo').mask('00:00:00');
	$('.data_tempo').mask('00/00/0000 00:00:00');
	$('.cep').mask('00000-000');
	$('.ddd_tel').mask('(00)0000-0000');
	$('.ddd_cel').mask('(00)00000-0000');
	$('.cpf').mask('000.000.000-AA');
	$('.cnpj').mask('00.000.000/0000-00');
	$('.rg').mask('00.000.000-A');
	$('.cnh').mask('00000000000');
	$('.nome').mask('SSSSSSSSSSSSSSSSSSSS');
	$('.dinheiro').mask('000.000.000.000.000,00' , { reverse : true });
	$('.dinheiro2').mask("#.##0,00" , { reverse : true });
});
<?php
namespace Controllers;

use \Core\Controller;
use \Models\Users;

class LoginController extends Controller {

	public function  index(){
		$dados = array(
			'error' => ''
		);

		if(!empty($_SESSION['errorMsg'])){  // Verificar session do sistema conduapp
			$dados['error'] = $_SESSION['errorMsg'];
			$_SESSION['errorMsg'] = '';
		}
	$this->loadView('login', $dados);
	}
	
	public function clienteLogar() {// Loga no sistema conuapp
	//	print_r($_POST);
			//$tipopass = filter_input(INPUT_POST, 'optradio'); 
			if(!empty($_POST['login_user']) && !empty($_POST['login_pass'])  && !empty(trim($_POST['optradio']))){
				
				$mail = addslashes(trim($_POST['login_user']));

				if(!filter_var($mail, FILTER_VALIDATE_EMAIL)){
					$_SESSION['errorMsg'] = "Preencha seu <strong>email</strong> corretamente. -1";
				} else{
					$email = $mail;
				}

				$pass = addslashes(trim($_POST['login_pass']));
				if(strlen($pass) < 5 || strlen($pass) > 20){
	       		 	$_SESSION['errorMsg'] = "Preencha sua <strong>senha</strong> corretamente.-2";
				}else{
					$password = $pass;
				}
				$tipopass = filter_input(INPUT_POST, 'optradio'); 
				//$tipopass = addslashes(trim($_POST['optradio']));
				if($tipopass === ''){
					$_SESSION['errorMsg'] = "Usuário e/ou sua <strong>senha</strong> errados. -5";
				} else {
					$passageiro = addslashes($tipopass);
				}

				$use = new Users();
				if($use->validateLogin($email, $password, $passageiro)){

					header("Location: ".BASE_URL);
					exit;
				} 
				else {
					$_SESSION['errorMsg'] = "Usuário e/ou sua <strong>senha</strong> errados. -3";
				}

			} else{
				$_SESSION['errorMsg'] = "Preencha os <strong>campos</strong> corretamente. -4";
			}
		
	header("Location: ".BASE_URL."login");
	exit;
	}


	public function novocadastro(){
		$dados = array();
		$this->loadTemplate('inc_cadastro', $dados);
	}
	
	public function logout() { // Sair do sistema conduapp
		$use = new Users();

		if(isset($_SESSION['token']) && $_SESSION['token']!=''){
			$SESSION = $use->logoutLig($_SESSION['token']);
			unset($SESSION);
		header("Location: ".BASE_URL."login");
		exit;
		};
	
	}	
};
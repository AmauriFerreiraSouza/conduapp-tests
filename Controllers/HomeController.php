<?php
namespace Controllers; //nome do diretorio

use \Core\Controller;// Core e pasta tem classe controller carregar os dados da pagina 
use \Models\Users; // Modesls e pasta com classe pesquisa no banco de dados
use \Models\Login; 
class HomeController extends Controller{
	
	private $use; // atributo user para deixar para acessa em qualquer momento
	
	public function __construct(){ //construct vai automatizar a chamada do login		
		//parent::__construct();
		$this->use = new Users();
		if(!$this->use->isLogged()){
			header('Location: '.BASE_URL.'login');
			exit;
		}
	} 

    public function index(){
        //$array =  array();
		$userw = new Users();
		//$login = new Login();
		
		$uselog = $userw->setLoggedUser();
		if(isset($uselog['iduser']) && $uselog['status']==='M2'){
			$this->telaIncHome();	
		} else if(isset($uselog['iduser']) && $uselog['status']==='P1'){
			$this->buscaMotorista();
		}
			
	}

	public function buscaMotorista(){
		$dados = array();
		$this->loadTemplate('search', $dados);
	}	

	public function telaIncHome(){
		$dados = array();
		$this->loadTemplate('drivermain', $dados);
	}
	public function telaIncCadastro(){
		$dados = array();
		$this->loadTemplate('motorista', $dados);
	}
	public function telaCadastroCsv(){
		$dados = array();
		$this->loadTemplate('csvapp', $dados);
	}
	public function telaProvaCsv(){
		$dados = array();
		$this->loadTemplate('simulado', $dados);
	}

}
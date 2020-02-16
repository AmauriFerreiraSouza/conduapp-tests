<?php
namespace Controllers;
use \Core\Controller;
use \Models\Users;

class DrivemainController extends Controller{

    public function __construct(){
        $user = new Users();
        if(!$user->isLogged()){
            header('Location: '.BASE_URL);
            exit;
        }
    }

    public function index(){
        $dados = array();
        $this->loadTemplate('drivermain', $dados);
    }

    public function novoCadastro(){
		$dados = array();
		$this->loadTemplate('inc_cadastro', $dados);
	}	

        

}
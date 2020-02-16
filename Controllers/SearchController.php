<?php
namespace Controllers;
use \Core\Controller;
use \Models\Users;

class SearchController extends Controller{

    public function __construct(){
        $user = new Users();
        if(!$user->isLogged()){
            header('Location: '.BASE_URL);
            exit;
        }
    }

    public function index(){
        $dados = array();
        $this->loadTemplate('home', $dados);
    }

    public function novoCadastro(){
		$dados = array();
		$this->loadTemplate('inc_cadastro', $dados);
	}	

        

}
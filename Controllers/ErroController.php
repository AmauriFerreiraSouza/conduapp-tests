<?php
namespace Controllers; //nome do diretorio
use \Core\Controller;

class ErroController extends Controller {

    public function index() {
        $this->loadTemplate('erro404', array());
    }

    
}

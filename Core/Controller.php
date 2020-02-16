<?php
namespace Core;
/*
*Antonio
*Data 09/03/2019
*Organizando os arquivos do projeto
*/

class Controller {
    
    public function loadView($viewName, $viewData = array()){
        extract($viewData); //transforma array em variaveis simples
        require 'Views/'.$viewName.'.php'; //faz solicitacao das paginas
    }

    public function loadTemplate($viewName, $viewData = array()){
        require 'Views/template.php';
    }

    public function loadViewinTemplate($viewName, $viewData = array()){
        extract($viewData);
        require 'Views/'.$viewName.'.php';
    }
}
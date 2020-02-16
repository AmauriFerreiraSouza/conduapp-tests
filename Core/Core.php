<?php
namespace Core;
/*
* Antnoio
* Data 09/02/2019 
*Core um sistema de routeamento inteligente
*/

class Core{

    public function start(){
        $url ='/'; // Criando uma estrura depois da barra
        if(isset($_GET['url'])){ // verificando se exite get
            $url .= $_GET['url']; // 
        };

        $params = array();
         //Montando formatacao do controller 
        if(!empty($url) && $url != '/'){ //verificando se nao url nao esta vazio 
            $url = explode('/', $url);//funcao faz com que so pegamos valores depois da barra
            array_shift($url); //array_shift que vai remover primeira posicao do array
            //print_r($url)."<br/>";
            //Montando formatacao do controller 
            $currentController = $url[0].'Controller'; // passando controle na pagina
            //print_r($currentController)."<br/>";
            array_shift($url); //elimonando primeira posicao do array

             //Montando formatacao do Action 
            if(isset($url[0]) && !empty($url[0])){// verificando se existe valor na url da action
                $currentAction = $url[0]; //colocando metodo da action na posicao inicial
                array_shift($url);//elimonando primeira posicao do array
            } else { 
                $currentAction = 'index'; //vltando para pagina inicial
            }
            if(count($url) > 0){ //verifico se qtd de url e maio que 0
                $params = $url; 
            }
        } else {
            $currentController = 'HomeController'; //Essa variavel currenController vai receber todos os controllers
            $currentAction = 'index'; //currentAction variavel tem com default a action pagina index
        }
        $currentController = ucfirst($currentController);//Transforma a primeira letra para caixa alta
        $prefixo = '\Controllers\\'; // 
        if(!file_exists('Controllers/'.$currentController.'.php') || !method_exists($prefixo.$currentController, $currentAction )) {
			$currentController = 'ErroController'; 
			$currentAction = 'index';
		}

        $newController = $prefixo.$currentController;
        $control = new $newController();
		call_user_func_array(array($control, $currentAction), $params);
        //call_user_func_array() e usada quando nao sabemos o nome da classes
       
        echo "<hr>";
        echo "CONTROLLER: ".$newController."<br/>";
        echo "ACTION: ".$currentAction."<br/>";
        echo "PARAMS: ".print_r($params, true)."<br>";
       
      

    }


}
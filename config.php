<?php
require 'statusistema.php'; // class de verificar desevolvimento ou producao


$config = array();
if("STATUSISTEMA" == "development"){ 
    define("BASE_URL", "http://localhost/conduapp/");
     $config['dbname']='conduapp';
     $config['host'] = 'localhost';
     $config['dbuser'] = 'root';
     $config['dbpass'] = '';
}else {
    $config['dbname']='conduapp';
    $config['host'] = 'localhost';
    $config['dbuser'] = 'root';
    $config['dbpass'] = '';
}
//Conexao com Banco
global $config;
global $db;
try{
    $db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'], $config['dbpass'],array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
}catch(PDOException $e) {
    echo "ERRO: ".$e->getMessage();
}
<?php
namespace Core;

class Model {
	
	protected $db;

	public function __construct() {
		global $db;
		$this->db = $db;			
		//$this->db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'], $config['dbpass'],array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
	}

}

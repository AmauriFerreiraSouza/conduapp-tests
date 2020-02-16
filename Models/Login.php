<?php
namespace Models;

use \Core\Model;

class Login extends Model{
	private $usuariolog; //atributo para envio dos dados query

	public function getlogin($val1,$val2){
		$data = array();

		$sql = "SELECT logadouser FROM tbusers WHERE  iduser =:iduser AND logadouser=:logadouser";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(':iduser',$val1);
		$sql->bindValue(':logadouser',$val2);
		$sql->execute();	

		$idlg = array();
		if($sql->rowCount() >0){
			$data = $sql->fetchAll();
			foreach($data as $itemdata){
				$idlg['logadouser'] = $itemdata['logadouser'];
			}
			$this->$usuariolog = $idlg;
		}	
		return $idlg;
	}
	public function userlogado (){
		var_dump($this->$idlg);
		return $this->$usuariolog;

	}



}
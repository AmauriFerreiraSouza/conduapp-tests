<?php
namespace Models; //Models

use \Core\Model; // Core tem uma classe model com conexao do banco
use \Models\Login;

class Users extends Model {

	private $userid;
	public $tipouserid;

	public function isLogged() { //passo -1 Verificar se usuario esta logado
		
		if(!empty($_SESSION['token'])) {

			$token = $_SESSION['token'];
			$sql = "SELECT iduser,logadouser FROM tbusers WHERE tokenuser=:tokenuser";
			$sql = $this->db->prepare($sql);
			$sql->bindValue(':tokenuser',$token);
			$sql->execute();

			$data = array();
			if($sql->rowCount() > 0){
				$loginpass = new Login();
				$data = $sql->fetch();
				$_SESSION['usuario'] = $data['iduser'];
				$this->userid = $data['iduser'];
				$this->tipouserid = $loginpass->getlogin($data['iduser'],$data['logadouser']);	
			return true;
			}
		}
	return false; 
	}

	public function validateLogin($email, $password, $passageiro){

		$sql = ("SELECT  iduser FROM tbusers WHERE emailuser = :emailuser AND passworduser=:passworduser  AND logadouser=:logadouser ");
		$sql = $this->db->prepare($sql);
		$sql->bindValue(':emailuser',$email);
		$sql->bindValue(':passworduser',$password);
		$sql->bindValue(':logadouser',$passageiro);
		//$sql->bindValue(':adminuser',1);
		$sql->execute();

		if($sql->rowCount() > 0){
			$data = $sql->fetch();
			$token = md5(time().rand(0,999).$data['iduser'].time());

			$sql = "UPDATE tbusers SET tokenuser =:tokenuser, statuslog=:statuslog, datauser = NOW() WHERE iduser=:iduser";
			$sql = $this->db->prepare($sql);
			$sql->bindValue(':tokenuser',$token);
			$sql->bindValue(':iduser',$data['iduser']);
			$sql->bindValue(':statuslog','A');
			$sql->execute();
			$_SESSION['token'] = $token; 

		return true;
		}		
	return false; 
	}

	public function logoutLig($token){
			$sql = "SELECT iduser FROM tbusers WHERE tokenuser=:tokenuser";
			$sql = $this->db->prepare($sql);
			$sql->bindValue(':tokenuser',$token);
			$sql->execute();

			if($sql->rowCount() > 0){
				$data = $sql->fetch();
			    $sql = "UPDATE tbusers SET statuslog=:statuslog, datauser = NOW() WHERE iduser=:iduser";
				$sql = $this->db->prepare($sql);
				$sql->bindValue(':iduser',$data['iduser']);
				$sql->bindValue(':statuslog','D');
				$sql->execute();
			}
	}

	public function setLoggedUser() {
		if(isset($_SESSION['usuario']) && !empty($_SESSION['usuario'])) {
			$iduse = $_SESSION['usuario'];
			$sql = $this->db->prepare("SELECT * FROM tbusers WHERE iduser =:iduser");
			$sql->bindValue(':iduser', $iduse);
			$sql->execute();
			$data = array();
			if($sql->rowCount() > 0) {
				$data = $sql->fetchAll();
				foreach ($data as $key => $value) {
					$idata['iduser'] = $value['iduser'];
					$idata['status'] = $value['logadouser'];
				}
			return $idata;
			};
		}
	}
	public function setUserId(){
		$valr = $this->tipouserid;
		return $valr;
	}

	// public function recuperar($email){

	// 	$sql = $this->db->prepare("SELECT * FROM users WHERE email = :email AND statususers = 'a'");
	// 	$sql->bindValue(":email", $email);
	// 	$sql->execute();

	// 	if($sql->rowCount() > 0){
	// 		$sql = $sql->fetch();
	// 		$iduser = $sql['id'];
	// 		$idcompany = $sql['id_company'];

	// 		$token = md5(time().rand(0,9999).rand(0,9999));

	// 		$sql = $this->db->prepare("INSERT INTO tbusuariotoken SET iduser = :iduser, idcompany = :idcompany, hash = :hash, expirado_em = :expirado_em");
	// 		$sql->bindValue(":iduser", $iduser);
	// 		$sql->bindValue(":idcompany", $idcompany);
	// 		$sql->bindValue(":hash", $token);
	// 		$sql->bindValue(":expirado_em", date('y-m-d H:i', strtotime('+1 day')));
	// 		$sql->execute();

				
	// 		$link = "https://sistema.tstonline.com.br/novaSenha?token=".$token;

	// 		$mensagem = $link;
			
	// 		$assunto = "Redifinição de senha.";

	// 		$headers = 'From: sistema@tstonline.com.br'."\r\n".
	// 				   'X-Mailer: PHP/'.phpversion();

	// 		mail($email, $assunto, $mensagem, $headers); 		  

	// 		return true;
	// 	}else{
	// 		return false;
	// 	}

	// }



}
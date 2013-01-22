<?php
class usuario extends Base {

	public function insertUser($dados){
		$db = $this->getInstancia();
		$db->prepare("insert into usuario (".implode(",",array_keys($dados)).") values ('".implode("','",$dados)."')");
		$db->execute();
	}
	
	public function listaUsuario(){
		$db = $this->getInstancia();
		$result = $db->query("select * from usuario");
		if($result):
			return $result;
		else:
			return false;
		endif;
	}
		
}

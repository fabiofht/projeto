<?php

require_once "../model/base.php";
require_once "../model/usuario.php";

switch($_POST['op']){

	case "cadastrar":
			$objUsuario = new usuario();
			$dadosPost = array(
								"nome"=>$_POST['nome'],
								"email"=>$_POST['email'],
								"senha"=>$_POST['senha']
								);
			$objUsuario->insertUser($dadosPost);
		 break;


}
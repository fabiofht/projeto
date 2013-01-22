<?php
class Base extends PDO {
	private  static $instancia;
	
	public function Base ($hostDb,$username = "", $password = ""){
		parent::__construct($dsn, $username, $passwd);
	}
	
	public static function getInstacia(){
		if(!isset(self::$instancia)):
			try {
				self::$instancia = new Base("mysql:host=localhost;dbname=projeto","root","");
			}catch (Exception $e){
				echo "Error ao Conectar";
				exit();
			}
		endif;
		return self::$instancia;
	}
}
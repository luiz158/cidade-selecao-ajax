<?php

class Conexao {

	private static $conexao;
	
	public static function getConexao() {
		if(!isset(self::$conexao) || self::$conexao == null) {
			self::$conexao = mysql_connect("108.179.230.47", "procu561_admin", "pr0c@grap3");
			mysql_select_db("procu561_ap", self::$conexao);
		}
		
		return self::$conexao;
	}
	
	public static function closeConexao() {
		if(isset(self::$conexao) && self::$conexao != null) {
			self::$conexao = null;
		}
	}
}

?>
<?php
	require 'infra/Conexao.php';

	class RepositorioDeEstado {
		
		private $conexao;
		
		function __construct() {
			$this->conexao = Conexao::getConexao();
		}
		
		function obtemTodosOsEstados() {
			$sql = "select ID_ESTADO, SIGLA from ESTADO";
			$estados = mysql_query($sql);
			
			return $estados;
		}
		
		function __destruct() {
			Conexao::closeConexao();
		}
	}
?>
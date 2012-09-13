<?php
	require '../infra/Conexao.php';
	
	class RepositorioDeCidade {

		private $conexao;
		
		function __construct() {
			$this->conexao = Conexao::getConexao();
		}
		
		public function obtemCidadePeloEstado($estado) {
			$sql = "select ID_CIDADE, ID_ESTADO, NOME from CIDADE where ID_ESTADO = '$estado'";
			$cidades = mysql_query($sql);
			
			return $cidades;
		}
	}
?>
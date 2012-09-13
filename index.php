<?php
	require 'repositorio/RepositorioDeEstado.php';	 
?>
<html>
<head>
	<title>Exemplo simples de listagem de Cidades</title>
</head>
<body>
	<h3 style="text-align: left;">Exemplo simples de listagem de Cidades por Estado usando AJAX</h3><br/>
	
	<select id="selecao_estado">
		<option value="0">Escolha o estado</option>
		<?php
			$repositorio = new RepositorioDeEstado();
			$estados = $repositorio->obtemTodosOsEstados();
			while($estado = mysql_fetch_array($estados)) {
				echo '<option value='.$estado["ID_ESTADO"].'>'.$estado["SIGLA"].'</option>';
			} 
		?>
	</select>
	
	<select id="cidades">
		<option value="0">Escolha a cidade</option>
	</select>
	
	<script src="ajax/jquery-1.7.2.min.js"></script>
	<script src="ajax/selecao-cidade.js"></script>
</body>	
</html>
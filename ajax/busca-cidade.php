<?php
	require '../repositorio/RepositorioDeCidade.php';
	
	$repositorio = new RepositorioDeCidade();
	$cidades = $repositorio->obtemCidadePeloEstado($_POST["estado"]);
	
	if(mysql_num_rows($cidades) == 0) {
		echo '<option value="0">Escolha a cidade</option>';
	}
	else {
		while ($cidade = mysql_fetch_array($cidades)) {
			echo '<option value='.$cidade["ID_CIDADE"].'">'.$cidade["NOME"].'</option>';	
		}
	}
?>
$(document).ready(function() {
	$("#selecao_estado").change(function() {
		//alert($(this).val());
		$.post("ajax/busca-cidade.php", {
			estado: $(this).val()
		}, function(retorno) {
			$("#cidades").html(retorno);
		});
	});
});
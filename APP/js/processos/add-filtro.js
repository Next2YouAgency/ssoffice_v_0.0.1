$(function(){
	var addFiltro = $("#add-filtro");
	var divFiltroExtra	= "includes/2-processos/add-filtros.php";
	
	addFiltro.click(function(){
		var divFiltros	=	$(".filtros-extra");
		divFiltros.load(divFiltroExtra);
	});
});
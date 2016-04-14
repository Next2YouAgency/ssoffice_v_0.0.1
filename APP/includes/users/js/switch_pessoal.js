$(function(){
	//Para Manutenção $("#dados_contato_comercial").hide();
	$("#emails-secundarios").hide();
	$("#email-secundario1").hide();
	$("#email-secundario2").hide();
	$("#email-secundario3").hide();
	$("#telefones-secundarios").hide();
	$("#telefone-secundario1").hide();
	$("#telefone-secundario2").hide();
	
	//Exibir emails secundarios
	$("#email-secundario1-abrir").click(function(){
		$("#email-secundario1").fadeIn();
		$("#emails-secundarios").fadeToggle();
	});
	$("#email-secundario2-abrir").click(function(){
		$("#email-secundario2").fadeToggle();
	});
	$("#email-secundario3-abrir").click(function(){
		$("#email-secundario3").fadeToggle();
	});
	
	$("#add-contato-pessoal").click(function(){
		$("#dados_contato_pessoal").fadeToggle();
	});
	
	$("#add-email-secundario1").click(function(){
		$("#add-email-secundario1-abrir").fadeToggle();
	});
	
	//Exibir telefones Secundários
	$("#telefone-secundario1-abrir").click(function(){
		$("#telefone-secundario1").fadeIn();
		$("#telefones-secundarios").fadeToggle();
	});
	$("#telefone-secundario2-abrir").click(function(){
		$("#telefone-secundario2").fadeToggle();
	});
	
	//Exibir Endereço pessoal
	$("#dados_contato_pessoal_abrir").click(function(){
		$("#dados_contato_pessoal").fadeToggle();
	});
});
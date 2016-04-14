$(function(){
	$("#dados_contato_pessoal").hide();
	
	$("#emails-pessoais-secundarios").hide();
	$("#email-pessoal-secundario1").hide();
	$("#email-pessoal-secundario2").hide();
	$("#email-pessoal-secundario3").hide();
	
	$("#telefones_pessoais_secundarios").hide();
	$("#telefone_pessoal_secundario1").hide();
	$("#telefone_pessoal_secundario2").hide();
	
	//Exibir Emails Secundários
	
	$("#email_pessoal_secundario1_abrir").click(function(){
		$("#email-pessoal-secundario1").fadeIn();
		$("#emails-pessoais-secundarios").fadeToggle();
	});
	$("#email_pessoal_secundario2_abrir").click(function(){
		$("#email-pessoal-secundario2").fadeToggle();
	});
	$("#email_pessoal_secundario3_abrir").click(function(){
		$("#email-pessoal-secundario3").fadeToggle();
	});
	
	
	//Exibir Telefones Secundários
	$("#telefone_pessoal_secundario1_abrir").click(function(){
		$("#telefone_pessoal_secundario1").fadeIn();
		$("#telefones_pessoais_secundarios").fadeToggle();
	});
	$("#telefone_pessoal_secundario2_abrir").click(function(){
		$("#telefone_pessoal_secundario2").fadeToggle();
	});
});
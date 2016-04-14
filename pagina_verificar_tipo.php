<?php
	if(!isset($_GET['tipo_pessoa'])){
		$tipo_pessoa	=	'cpf';
	}else{
		$tipo_pessoa	=	$_GET['tipo_pessoa'];
	}
	sleep(1);
	switch($tipo_pessoa){
		case 'cnpj': include 'pagina_cadastro_cnpj.php';
		break;
		
		case 'cpf': include 'pagina_cadastro_cpf.php';
		break;
		
		default: include 'pagina_cadastro_cpf.php';
	}
?>
<?php
	require_once 'APP/appCnf/config.php';
	
	$registro_cliente	=	$_GET['registro_pessoa'];
	
	$queryConsutarClientesCadastrados	=	"SELECT * FROM pessoas_cadastradas WHERE cod_reg_cliente = '$registro_cliente'";
	$exeQrConsutarClientesCadastrados	=	mysql_query($queryConsutarClientesCadastrados) or die('Erro ao consultar o Cliente, Detalhes do erro:<br><strong>'.mysql_error().'</strong>');
	
	$linhas	=	mysql_num_rows($exeQrConsutarClientesCadastrados);
	
	if($linhas > 0){
		
		include_once 'resultado_query_clientes_cadastrados.php';
		
	}else{
		echo'
		Erro ao ler a tabela de clientes
		';
	}
?>
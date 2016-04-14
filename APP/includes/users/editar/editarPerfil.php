<?php
	include_once '../../../appCnf/config.php';
	ob_start();
	session_start();
	$idUsuario	=	$_SESSION['autUser']['tipo_usuario'];
	
	
	
	if($idUsuario	=	'cpf'){
		include_once 'finalizaEdit/fimCPF.php';
	}else{
		include_once 'finalizaEdit/fimCNPJ.php';
	}
	ob_end_flush();
?>
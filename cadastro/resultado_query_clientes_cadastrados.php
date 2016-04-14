<?php
	while($resultado	=	mysql_fetch_assoc($exeQrConsutarClientesCadastrados)){
		include_once 'dados_buscados_usuario.php';
		/* include_once 'debug_dados_usuario.php';*/
		include_once 'interface_concluir_cadastro.php';
	}
?>
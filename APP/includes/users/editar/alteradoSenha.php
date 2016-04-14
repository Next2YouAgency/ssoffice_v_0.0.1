<?php
	require 'cnf/config.php';
	
	session_start();
	
	
	$senhaAntiga		=	$_SESSION['senha'];
	$usuario			=	$_SESSION['usuario'];
	$novaSenha			=	md5($_POST['novaSenha']);
	$novaSenhaConfirm	=	md5($_POST['novaSenhaConfirm']);
	
	
	if($novaSenha===$novaSenhaConfirm){
		$queryAlterarSenha	=	"UPDATE usuarios SET senha = '$novaSenhaConfirm' WHERE senha = '$senhaAntiga' and usuario = '$usuario'";
		mysql_query($queryAlterarSenha) or die(mysql_error());
		
		$_SESSION['senha']	=	$novaSenhaConfirm;
		?>
		<meta http-equiv="refresh" content="0;home.php">
		<?php
	}else{
		echo 'Senhas não são iguais'.'<br>';
	}
?>
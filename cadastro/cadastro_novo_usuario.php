<?php
	require_once '../appCnf/config.php';

		$f['verificaCpf']	=	$_GET['cpf'];
		$f['verificaCnpj']	=	$_GET['cnpj'];
		$f['verificaMail']	=	$_GET['email_principal'];
		
		$readAtivados	=	read('usuarios_ativados',"WHERE reg_usuario = '$f[verificaCpf]' || reg_usuario = '$f[verificaCnpj]'");
		$readCadastro	=	read('pessoas_cadastradas',"WHERE reg_pessoa_cadastrada = '$f[verificaCpf]'");
		
		if($readAtivados){
			echo'
				<script>alert('.utf8_encode('"Você já tem Cadastro neste CPF/CNPJ, gostaria de criar uma nova senha? Clique no botão esqueci minha senha")').'</script>
				<meta http-equiv="refresh" content="0;../">
			';
			
		}elseif($readCadastro){
			echo'
				<script>alert('.utf8_encode('"Você já tem um pré Cadastro neste CPF/CNPJ, verifique seu email para concluir o cadastro")').'</script>
				<meta http-equiv="refresh" content="0;../">
				<meta http-equiv="refresh" content="0;../">
			';
			
		}else{
			$tipo_pessoa			=	$_GET['tipo_pessoa'];
			$tratamento_pessoa		=	$_GET['tratamento'];
			$nome_cadastro			=	$_GET['nome_pessoa'];
			$genero_pessoa			=	$_GET['genero_pessoa'];
			if($tipo_pessoa === 'cpf'){
				$reg_pessoa			=	$_GET['cpf'];
			}else{
				$reg_pessoa			=	$_GET['cnpj'];
			}
			$email_principal		=	$_GET['email_principal'];
			$cod_reg_cliente		=	md5($reg_pessoa);
			
			$dados	=	array($tipo_pessoa,$tratamento_pessoa,$nome_cadastro,$genero_pessoa,$email_principal,$cod_reg_cliente,$reg_pessoa);
			
			create('pessoas_cadastradas',$dados);
			$reg_pessoa_codificado	=	md5($reg_pessoa);
			
			$mensagem = '
			
			<!--Core jQuery-->
			<script src="http://code.jquery.com/jquery-2.2.0.min.js"></script>

			<!-- Latest compiled and minified JavaScript -->
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
			<!-- Latest compiled and minified CSS -->
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

			<h1>Olá '.$nome_cadastro.'
			Seja Bem vindo ao SS Office
			</h1>
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="col-xs-4 col-sm-6 col-md-8 col-lg-10">
					<h2>Dados Cadastrados:</h2>
					<p class="lead">
						Tipo de Pessoa: '.$tipo_pessoa.'<br>
						Nome Cadastrado: '.$nome_cadastro.'<br>
						Registro: '.$reg_pessoa.'<br>
						E-mail de Acesso: '.$email_principal.'
					</p>
					<p>Seu cadastro está quase completo, para concluir, precisamos que confirme seu cadastro clicando no link abaixo:<br>
					<a href="http://ssofice.esy.es/index.php?ativar=y&registro_pessoa='.$reg_pessoa_codificado.'">Ativar cadastro</a>
					</p>
					
					<p>
						Caso o link acima não funcione, copie o link a seguir e cole na barra de endereço do seu navegador:
						http://ssofice.esy.es/index.php?ativar=y&registro_pessoa='.$reg_pessoa_codificado.'
					</p>
					
				</div>
			</div>
			
			';
			
			sendMail('Cadastro no sistema SS Advogados', $mensagem, "Teste de envio (Sem HTML)", MAILUSER, SITENAME, $email_principal, $nome_cadastro);
			header('Location: ../');
		}
?>
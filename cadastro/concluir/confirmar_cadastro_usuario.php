<div class="bg-primary" style="width:100%;min-height:765px;">
<?php
	require_once '../../APP/appCnf/config.php';
	$dados_do_cliente_ativacao['id']							=	'';
	$dados_do_cliente_ativacao['tipo_pessoa']					=	$_POST['tipo_pessoa'];
	$dados_do_cliente_ativacao['tratamento_pessoa']				=	$_POST['tratamento_pessoa'];
	$dados_do_cliente_ativacao['nome_pessoa']					=	$_POST['nome_pessoa'];
	$dados_do_cliente_ativacao['genero_pessoa']					=	$_POST['genero_pessoa'];
	$dados_do_cliente_ativacao['reg_pessoa']					=	$_POST['reg_pessoa'];
	$dados_do_cliente_ativacao['rg_pessoa']						=	$_POST['rg_pessoa'];
	$dados_do_cliente_ativacao['cod_reg_cliente']				=	$_POST['cod_reg_cliente'];
	$dados_do_cliente_ativacao['senha_acesso']					=	$_POST['senha_acesso'];
	$dados_do_cliente_ativacao['senha_acesso_cliente']			=	md5($_POST['senha_acesso']);
	$dados_do_cliente_ativacao['id_oab']						=	$_POST['id_oab'];
	$dados_do_cliente_ativacao['email_principal']				=	$_POST['email_principal'];
	$dados_do_cliente_ativacao['email_pessoal1']				=	$_POST['email_pessoal1'];
	$dados_do_cliente_ativacao['email_pessoal2']				=	$_POST['email_pessoal2'];
	$dados_do_cliente_ativacao['email_pessoal3']				=	$_POST['email_pessoal3'];
	$dados_do_cliente_ativacao['telefone_principal']			=	$_POST['telefone_principal'];
	$dados_do_cliente_ativacao['telefone_pessoal1']				=	$_POST['telefone_pessoal1'];
	$dados_do_cliente_ativacao['telefone_pessoal2']				=	$_POST['telefone_pessoal2'];
	$dados_do_cliente_ativacao['cep_endereco_principal']		=	$_POST['cep_endereco_principal'];
	$dados_do_cliente_ativacao['estado_endereco_principal']		=	$_POST['estado_endereco_principal'];
	$dados_do_cliente_ativacao['cidade_endereco_principal']		=	$_POST['cidade_endereco_principal'];
	$dados_do_cliente_ativacao['localidade_endereco_principal']	=	$_POST['localidade_endereco_principal'];
	$dados_do_cliente_ativacao['numero_endereco_principal']		=	$_POST['numero_endereco_principal'];
	$dados_do_cliente_ativacao['bairro_endereco_principal']		=	$_POST['bairro_endereco_principal'];
	$dados_do_cliente_ativacao['complemento_endereco_principal']=	$_POST['complemento_endereco_principal'];
	$dados_do_cliente_ativacao['cep_endereco_pessoal']			=	$_POST['cep_endereco_pessoal'];
	$dados_do_cliente_ativacao['estado_endereco_pessoal']		=	$_POST['estado_endereco_pessoal'];
	$dados_do_cliente_ativacao['cidade_endereco_pessoal']		=	$_POST['cidade_endereco_pessoal'];
	$dados_do_cliente_ativacao['localidade_endereco_pessoal']	=	$_POST['localidade_endereco_pessoal'];
	$dados_do_cliente_ativacao['numero_endereco_pessoal']		=	$_POST['numero_endereco_pessoal'];
	$dados_do_cliente_ativacao['bairro_endereco_pessoal']		=	$_POST['bairro_endereco_pessoal'];
	$dados_do_cliente_ativacao['complemento_endereco_pessoal']	=	$_POST['complemento_endereco_pessoal'];
	
	/*Buscar Usuários*/
	$colunas_usuarios_ativados	=	readCadastrados('usuarios_ativados');
	
	$colunas_usuarios_cadastrados	=	readCadastrados('pessoas_cadastradas').'<br><br>';
	/*****************/
	
	$valores_para_tabela	=	"'".implode("', '",array_values($dados_do_cliente_ativacao))."'";
	/*Ativar os dados do cliente no Sistema*/
	ativarCliente('usuarios_ativados',$colunas_usuarios_ativados,$valores_para_tabela);
	/***************************************/
	
	#Após ativação do Cliente, enviar um e-mail de boas vindas ao novo cliente.
	
	$mensagem = '
	
	<!--Core jQuery-->
	<script src="http://code.jquery.com/jquery-2.2.0.min.js"></script>

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	<h2>'.utf8_decode('Olá ').$dados_do_cliente_ativacao['nome_pessoa'].'
	Seu cadastro no SS Office foi ativado com sucesso
	</h2>
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<div class="col-xs-4 col-sm-6 col-md-8 col-lg-10">
			<h2>Dados Cadastrados:</h2>
			<p class="lead">
				Tipo de Pessoa: '.$dados_do_cliente_ativacao['tipo_pessoa'].'<br>
				Registro: '.$dados_do_cliente_ativacao['reg_pessoa'].'<br>
				E-mail de Acesso: '.$dados_do_cliente_ativacao['email_principal'].'
			</p>
			<p>
				Agora é só começar a usar o sistema.
			</p>
			<p class="text-muted">
				Atenciosamente,<br>
				<a href="http://www.ssofice.esy.es/suporte">Equipe de Suporte Técnico SS Office</a><br>
			</p>
		</div>
	</div>
	
	';
	
	sendMail('Cadastro no sistema SS Advogados', $mensagem, "Teste de envio (Sem HTML)", MAILUSER, SITENAME, $dados_do_cliente_ativacao['email_principal'], $dados_do_cliente_ativacao['nome_pessoa']);
	
	?>
		<!--jQuery-->
		<script type="text/javascript" src="../../APP/js/jquery.min.js"></script>
		<!--Bootstrap-->
		<link rel="stylesheet" href="../../APP/css/bootstrap.min.css">
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		<!--CORE BOOTSTRAP-->
		<script type="text/javascript" src="../../APP/js/bootstrap.min.js"></script>
		<!--Fim do Bootstrap-->
		
		<!-- Modal -->
		<div class="modal fade in text-muted" id="modalAlertaConcluir" tabindex="1" role="dialog" aria-labelledby="myModalLabel" style="display: block;margin-top:15%">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						
						
						<h4 class="modal-title" id="myModalLabel">Cadastro Concluido</h4>
						
					</div>
					<div class="modal-body">
						Olá <?php echo $dados_do_cliente_ativacao['nome_pessoa']?>, seu cadastro foi ativado com sucesso. Para fazer login, <a href="../../">clique aqui</a>
					</div>
				</div>
			</div>
		</div>

	
	
	
</div>
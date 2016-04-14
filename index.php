<?php
	include_once 'APP/appCnf/config.php';
	ob_start();
	session_start();
	//EFETUAR LOGIN
	if(!empty($_SESSION['autUser'])){
		header('Location: APP');
	}
?>
<!doctype html>
<html lang="pt-BR">
	<head>
		<meta name="charset" content="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>SS Office</title>
		<!--jQuery-->
		<script type="text/javascript" src="APP/js/jquery.min.js"></script>
		<!--Bootstrap-->
		<link rel="stylesheet" href="APP/css/bootstrap.min.css">
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		<!--CORE BOOTSTRAP-->
		<script type="text/javascript" src="APP/js/bootstrap.min.js"></script>
		<!--Fim do Bootstrap-->
		<!--CSS INTERNO-->
		<style>
		.rounded{
			background-color:#fcfcfc;
			color:#999;
			border-radius:15px;
		}
		.btn{
			border:2px outset #337ab7
		}
		.debug{position:fixed;left:0;top:0;padding:15px;background:rgba(255,255,255,.75)}
		</style>
		<!--CSS INTERNO-->
		<!--js para verificações-->
		<script type="text/javascript" src="js/verificar_pessoa.js"></script>
		<!--js para verificações-->
		<script src="cadastro/js/switch_pessoal.js"></script>
		<script src="cadastro/js/switch_pessoal_parts.js"></script>
		<?php
			$titles	=	"SS Office - Se você precisa de Alguém pra cuidar de você, conte conosco"
		?>
	</head>
	<body class="bg-primary">
		<?php
			if(isset($_POST['formSubmit'])){
				$f['reg_pessoa']	=	mysql_real_escape_string($_POST['reg_pessoa']);
				$f['senhaUsuario']	=	mysql_real_escape_string($_POST['senhaUsuario']);
				$f['lembrar']	=	mysql_real_escape_string($_POST['lembrar']);
				$f['remember']	=	mysql_real_escape_string($_POST['remember']);
				/*|| !valCpf($f['reg_pessoa']*/
				if(!$f['reg_pessoa']){
					echo 'Erro, CPF incorreto';
				}
				else{
					$autReg	=	md5($f['reg_pessoa']);
					$autPas	=	md5($f['senhaUsuario']);
					$readAutUser	=	read('usuarios_ativados',"WHERE cod_reg_usuario = '$autReg'");
					
					if($readAutUser){
						foreach($readAutUser as $autUser);
						if($autUser['cod_reg_usuario'] == $autReg && $autUser['senha_acesso_cliente'] == $autPas){
							
							if($f['lembrar']){
								$cookiesalva	=	base64_encode($f['reg_pessoa']).'&'.base64_encode($f['senhaUsuario']);
								setcookie('autUser',$cookiesalva,time()+60*60,'/');
							}else{
								setcookie('autUser','',time()-3600,'/');
							}
							//INICIAR A SEÇÃO
							$_SESSION['autUser']	=	$autUser;
							header('Location: ' . $_SERVER['PHP_SELF']);
							
						}else{
							echo 'A senha não confere com o CPF/CNPJ informado';
						}
					}else{
						echo 'CPF/CNPJ não existe cadastro no sistema';
					}
				}
			}elseif(!empty($_COOKIE['autUser'])){
				//Cookie
				$cookie				=	$_COOKIE['autUser'];
				$cookie				=	explode('&',$cookie);
				$f['reg_pessoa']	=	base64_decode($cookie[0]);
				$f['senhaUsuario']	=	base64_decode($cookie[1]);
				$f['lembrar']		=	1;
				
			}
					
			if(!empty($_GET['ativar'] == "y")){
				include_once 'cadastro/concluir_cadastrodo_cliente.php';
			}elseif(!$_GET['remember']){
				
			
		?>
		<section class="principal-login conten-fluid">
			<article class="topo col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<img src="img/logotipo.png" alt="<?php echo $titles;?>" title="<?php echo $titles ;?>" class="img-responsive" style="margin: 0 auto;">
			</div>
			<div class="col-xs-12 col-sm-12 col-md-10 col-lg-6 col-lg-push-3 rounded">
				<?php include_once 'formulario_login.php';?>
			</div>
			</article>
		</section>
		<?php
			}else{
				if(isset($_POST['sendRecover']) && !empty($_POST['emailUsuario']) && !empty($_POST['reg_usuario'])){
					$recover['emailUsuario']	=	mysql_real_escape_string($_POST['emailUsuario']);
					$recover['reg_usuario']	=	mysql_real_escape_string($_POST['reg_usuario']);
					
					$readRec	=	read('usuarios_ativados',"WHERE email_principal_usuario = '$recover[emailUsuario]' && reg_usuario = '$recover[reg_usuario]'");
					
					if(!$readRec){
					?>
					<!--modal para aviso "Não existe este email" -->
					<div class="modal fade in text-muted" id="alertNotEmail" tabindex="1" role="dialog" aria-labelledby="myModalLabel" style="display: block;margin-top:15%">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									
									
									<h3 class="modal-title" id="myModalLabel">Email Inválido</h3>
									
								</div>
								<div class="modal-body">
									Este e-mail não está cadastrado em nossa base de dados, caso queira fazer um novo cadastro, selecione a opção "Ainda não tem cadastro?" na tela de login, <a href="index.php">clique aqui</a> para voltar
								</div>
							</div>
						</div>
					</div>
					<?php
					}else{
						foreach($readRec as $rec);
						
						if($rec['tipo_usuario'] == 'cpf'){
							$documento	=	'CPF: '.$rec['reg_usuario'];
						}else{
							$documento	=	'CNPJ: '.$rec['reg_usuario'];
						}
						if($rec['tipo_usuario'] == 'cpf'){
							$tratamento	=	'Tratamento: '.$rec['tratamento_usuario'];
						}else{
							$tratamento	=	'Nome Fantasia: '.$rec['tratamento_usuario'];
						}
						if($rec['tipo_usuario'] == 'cpf'){
							$usuario	=	'Nome : '.$rec['nome_usuario'];
						}else{
							$usuario	=	'Razão Social: '.$rec['nome_usuario'];
						}
						$senha	=	'Senha: '.$rec['senha_acesso'];
						
						$msg	=	utf8_decode('
						
						<!--Core jQuery-->
						<script src="http://code.jquery.com/jquery-2.2.0.min.js"></script>
						<!-- Latest compiled and minified JavaScript -->
						<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
						<!-- Latest compiled and minified CSS -->
						<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
						<div class="col-md-10 col-md-push-1">
						<h2 class="text-primary">Prezado '.$rec['nome_usuario'].'</h3>
						<p class="text-info lead">
							Conforme Solicitado em: '.date('d/m/Y \a\s H:i:s').', estamos enviando este e-mail para recuperação de sua senha. Verifique abaixo os seus dados para acesso ao SS Office:
						</p>
						<hr style="border: 1px solid #ccc;">
						<p class="lead">
							Tipo de Cadastro: '.$rec['tipo_usuario'].'<br>
							'.$documento.'<br>
							'.$tratamento.'<br>
							'.$usuario.'<br>
							'.$senha.'<br>
							
						</p>
						<hr style="border: 1px solid #ccc;">
						<p class="text-warning">
							Recomendamos que você altere a sua senha no próximo login.
						</p>
						<hr style="border: 1px solid #ccc;">
						<p class="text-muted">
							Atenciosamente,<br>
							<a href="http://www.ssofice.esy.es/suporte">Equipe de Suporte Técnico SS Office</a><br>
						</p>


						</div>
						
						');
						$envioRecover = sendMail('Recupere sua Senha',$msg,$msg,MAILUSER,SITENAME,$rec['email_principal_usuario'],$rec['nome_usuario'], $reply = 'noreply@ssofice.com.br', $replyNome = SITENAME);
						if($envioRecover = true){
							echo'<script> alert("E-mail enviado com seus dados.")</script>';
							sleep(1);
							echo'<meta http-equiv="refresh" content="0;index.php">';
						}
					}
					
				}
				
		?>
		<section class="principal-login conten-fluid">
			<article class="topo col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<img src="img/logotipo.png" alt="<?php echo $titles;?>" title="<?php echo $titles ;?>" class="img-responsive" style="margin: 0 auto;">
			</div>
			<div class="col-xs-12 col-sm-12 col-md-10 col-lg-6 col-lg-push-3 rounded">
				<?php include_once 'remember_password.php';?>
			</div>
			</article>
		</section>
		<?php
			}
		?>
	</body>
	<?php ob_end_flush();?>
</html>
<?php
	ob_start();
	session_start();
	
	if(isset($_SESSION['autUser'])){
	include_once 'appCnf/config.php';
	
?>
<!doctype html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="Hugo Christian Pereira Gomes">
	<meta name="url" content="http://www.n2developer.com.br">
	<meta name="language" content="pt-br">
	<meta name="robots" content="NOINDEX,NOFOLLOW">
	<title>Sandro Sanches Advogados</title>
	<!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<!-- Core jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- Core Bootstrap JS -->
	<script src="js/bootstrap.min.js"></script>
	<!-- CSS Interno -->
	<!-- Ajax para Processos -->
	<script src="js/ajax_load/processos/ajax_load_processos.js"></script>
	<!-- Ajax para Processos -->
	<!-- Ajax para Pessoas -->
	<script src="js/ajax_load/pessoas/ajax_load_pessoas.js"></script>
	<!-- Ajax para Pessoas -->
	<!-- Ajax para Advogados -->
	<script src="js/ajax_load/adv/ajax_load_advogados.js"></script>
	<!-- Ajax para Advogados -->
	<script src="includes/users/js/switch_pessoal.js"></script>
	<script src="includes/users/js/switch_pessoal_parts.js"></script>
	<script src="js/jquery-ui/jquery-ui.js"></script>
	<link rel="stylesheet" href="js/jquery-ui/jquery-ui.css">
	<link rel="stylesheet" href="js/jquery-ui/jquery-ui.theme.css">
	<link rel="stylesheet" href="css/style.css">
</head>

<body>
	<section class="container-fluid" id="principal">
		<header class="container-fluid" id="topo">
			<div id="topo" class="col-xs-3 col-sm-3 col-md-3 col-lg-3 push-left">
				<img id="logotipo" src="img/menu/despesas.png" class="img-responsive">
			</div>
			<div id="form-buscar" class="col-xs-5 col-sm-5 col-md-5 col-lg-5 push-left">
				<?php include_once('parts/form-busca.php')?>
			</div>
			<div id="dados-usuarios" class="col-xs-3 col-sm-4 col-sm-push-2 col-md-4 col-md-push-2 col-lg-4 col-lg-push-2 push-right text-right">
				<?php include_once('includes/users/dados-usuarios.php')?>
			</div>
		</header>
	</section>
	<section id="principal" class="container-fluid">
		<!--Menu Lateral-->
		<?php include_once('parts/menu-lateral.php');?>
		<!--Menu Lateral-->
		<!--Topo da Página-->
		<?php $url	=	$_GET['url'];?>
		<!--Conteúdo da Página-->
		<section class="principal col-xs-12 col-sm-11 col-md-11 col-lg-11">
		<?php
			switch($url){
				case'profile':include_once'includes/users/index.php';
				break;
				
				case'alerts':include_once'includes/alerts/index.php';
				break;
				
				case'my-account':include_once'includes/my-account/index.php';
				break;
				
				case'home':include_once'includes/home.php';
				break;
				
				case'processos':include_once'includes/2-processos/index.php';
				break;
				
				case'agenda':include_once'includes/agenda.php';
				break;
				
				case'andamentos':include_once'includes/andamentos.php';
				break;
				
				case'documentos':include_once'includes/documentos.php';
				break;
				
				case'despesas':include_once'includes/despesas.php';
				break;
				
				case'alocacao-de-horas':include_once'includes/alocacao-de-horas.php';
				break;
				
				case'pessoas':include_once'includes/pessoas.php';
				break;
				
				case'relatorios':include_once'includes/relatorios.php';
				break;
				
				case'cartas-de-apresentacao':include_once'includes/cartas-de-apresentacao.php';
				break;
				
				case'diligencias':include_once'includes/diligencias.php';
				break;
				
				//Fazer Log Off
				case'log-off':include_once'logoff.php';
				break;
				default:include_once'vazio.php';
			}
		?>
		</section>
		<!--Conteúdo da Página-->
	</section>
</body>
<?php
	}else{
		header('Location: ../');
	}
ob_end_flush();
?>
</html>
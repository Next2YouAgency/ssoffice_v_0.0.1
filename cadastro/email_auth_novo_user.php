<!--Core jQuery-->
<script src="http://code.jquery.com/jquery-2.2.0.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<h1>Olá '.$nome_cadastro.'
Seja Bem vindo ao SS ADVOGADOS
</h1>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	<div class="col-xs-4 col-sm-6 col-md-8 col-lg-10">
		<h2>Dados Cadastrados:</h2>
		<p class="lead">
			Tipo de Pessoa: '.$tipo_pessoa.'<br>
			Nome Cadastrado: '.$nome_cadastro.'</br>
			Registro: '.$reg_pessoa.'<br>
			E-mail de Acesso: '.$email_pessoa1.'
		</p>
		<p>Seu cadastro está quase completo, para concluir, precisamos que confirme seu cadastro clicando no link abaixo:<br>
		<a href="http://ssofice.esy.es/index.php?ativar=y&registro_pessoa=.$reg_pessoa_codificado.'">Ativar cadastro</a>
		</p>
		
		<p>
			Caso o link acima não funcione, copie o link a seguir e cole na barra de endereço do seu navegador:
			http://ssofice.esy.es/index.php?ativar=y&registro_pessoa='.$reg_pessoa_codificado.'
		</p>
		
	</div>
</div>
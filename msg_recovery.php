utf8_decode('						
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
	<a href="http://www.ssofice.com.br">Equipe de Suporte Técnico SS Office</a><br>
</p>


</div>
');
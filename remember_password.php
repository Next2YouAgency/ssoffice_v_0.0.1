<?php
	if(!isset($_POST['sendRecover'])){
		echo '<script> alert("Para solicitar sua senha de acesso, por favor digite seu e-mail e documento de cadastro \"CPF/CNPJ\"");</script>';
	}
?>

<form class="form-horizontal" action="" method="post">	
	<div class="form-group">
		<label for="emailUsuario" class="col-sm-3 control-label">E-mail Cadastrado:</label>
		<div class="col-sm-9">
		<input type="email" class="form-control" id="emailUsuario" name="emailUsuario" placeholder="E-Mail cadastrado" value="<?php if($recover) echo $recover['emailUsuario'] ;?>">
		</div>
	</div>
	<div class="form-group">
		<label for="reg_usuario" class="col-sm-3 control-label">CPF/CNPJ:</label>
		<div class="col-sm-9">
		<input type="text" class="form-control" id="reg_usuario" name="reg_usuario" placeholder="Digite seu CPF/CNPJ" value="<?php if($recover) echo $recover['reg_usuario'] ;?>">
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
			<button type="submit" class="btn btn-primary" name="sendRecover">Solicitar Senha</button>
			<a href="index.php" class="btn btn-primary">Voltar</a>
		</div>
	</div>
</form>
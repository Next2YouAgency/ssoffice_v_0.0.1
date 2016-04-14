<form class="form-horizontal" method="post">
	<div class="form-group">
		<label for="reg_pessoa" class="col-sm-2 control-label">CPF/CNPJ</label>
		<div class="col-sm-10">
		<input type="number" class="form-control" id="reg_pessoa" name="reg_pessoa" placeholder="Digite CPF ou CNPJ" value="<?php if($f['reg_pessoa']) echo $f['reg_pessoa']?>">
		</div>
	</div>
	<div class="form-group">
		<label for="senhaUsuario" class="col-sm-2 control-label">Senha</label>
		<div class="col-sm-10">
		<input type="password" class="form-control" id="senhaUsuario" name="senhaUsuario" placeholder="Senha" value="<?php if($f['senhaUsuario']) echo $f['senhaUsuario']?>">
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
			<button type="submit" class="btn btn-primary" name="formSubmit">Login</button>
			<label>
				<input type="checkbox" id="lembrar" name="lembrar" value="1" <?php if($f['lembrar']) echo 'checked="checked"';?>> Lembrar?
			</label>
			<label>
				<a href="index.php?remember=true">Esqueci minha senha</a>
			</label>
			<span class="btn btn-primary pull-right" data-toggle="modal" data-target="#solicitarCadastro">Ainda não tem cadastro?</span>
		</div>
	</div>
</form>
<!-- Modal -->
<div class="modal fade" id="solicitarCadastro" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel">Solicitar um Cadastro</h4>
		</div>
		<div class="modal-body">
		<form action="cadastro/cadastro_novo_usuario.php" method="get" class="form-horizontal">
		<?php
			include 'solicitarCadastroInicio.php';
		?>
		</div>
		<div class="modal-footer">
			<input type="submit" value="Cadastrar" class="btn btn-success" id="sendForm">
			<button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
		</form>
		</div>
		</div>
	</div>
</div>
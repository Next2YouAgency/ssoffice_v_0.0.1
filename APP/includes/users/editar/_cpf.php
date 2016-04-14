	<legend>
		<span class="col-sm-10">
			Documentos do Cadastro
		</span>
		<div class="clearfix"></div>
	</legend>
	<div class="form-group pull-left">
		<label for="tipo_cliente" class="col-sm-8 control-label">Documento: </label>
		<div class="col-sm-4">
			<p class="form-control-static" id="tipo_cliente"><?php echo strtoupper($_SESSION['autUser']['tipo_pessoa']);?></p>
		</div>
	</div>
	
	<div class="form-group pull-left">
		<label for="tipo_cliente" class="col-sm-4 col-sm-push-2 control-label">Numera&ccedil;&atilde;o: </label>
		<div class="col-sm-8 col-sm-push-4">
			<p class="form-control-static" id="tipo_cliente" name="tipo_pessoa"><?php echo strtoupper($_SESSION['autUser']['reg_pessoa_cadastrada']);?></p>
		</div>
	</div>
	<div class="clearfix"></div>
	<div class="form-group">
		<label for="rg_pessoa" class="col-sm-2 control-label">RG:</label>
		<div class="col-sm-10">
			<input type="text" id="rg_pessoa" name="rg_pessoa" placeholder="Somente os Números, Ex: 123456789" class="form-control" required title="Informe o Número do RG" value="<?php echo $_SESSION['autUser']['rg_usuario']?>">
		</div>
	</div>
	
	<div class="form-group">
		<label for="senha_acesso" class="col-sm-2 control-label">Senha:</label>
		<div class="col-sm-10 ">
			<input type="text" id="senha_acesso" name="senha_acesso" value="<?php echo $_SESSION['autUser']['senha_acesso'];?>" placeholder="Crie sua senha" class="form-control" required>
		</div>
	</div>
	
	<legend>
		<span class="col-sm-10">
			Informa&ccedil;&otilde;es Pessoais
		</span>
		<div class="clearfix"></div>
		</legend>
	<div class="form-group pull-left">
		<label for="tratamento_pessoa" class="col-sm-4 control-label">Tratamento: </label>
		<div class="col-sm-8 col-sm-push-2">
			<select id="tratamento_pessoa" name="tratamento_pessoa" class="form-control">
				<option value="<?php echo $_SESSION['autUser']['tratamento_usuario']?>"><?php echo $_SESSION['autUser']['tratamento_usuario']?></option>
				<option value="Escolher Outro">Outro</option>
				<option value="Escolher Outro">Outro</option>
				<option value="Escolher Outro">Outro</option>
				<option value="Escolher Outro">Outro</option>
			</select>
		</div>
	</div>
	
	<div class="form-group pull-left">
		<label for="genero_pessoa" class="col-sm-2 col-sm-push-3 control-label">G&ecirc;nero:</label>
		<div class="col-sm-10 col-sm-push-4">
			<select type="text" id="genero_pessoa" name="genero_pessoa" class="form-control">
				<option value="<?php echo $_SESSION['autUser']['genero_usuario']?>"><?php echo strtoupper($_SESSION['autUser']['genero_usuario']);?></option>
				<option value="feminino">Feminino</option>
				<option value="nao_definido">Outro</option>
			</select>
		</div>
	</div>
	<div class="clearfix"></div>
	
	<div class="form-group">
		<label for="tratamento_pessoa" class="col-sm-2 control-label">Nome:</label>
		<div class="col-sm-10">
			<input type="text" id="nome_pessoa" name="nome_pessoa" value="<?php echo $_SESSION['autUser']['nome_usuario'];?>" class="form-control" required>
		</div>
	</div>
	
	<div class="clearfix"></div>
	<div class="form-group">
		<label for="id_oab" class="col-sm-2 control-label">OAB:</label>
		<div class="col-sm-10 ">
			<input type="number" id="id_oab" name="id_oab" placeholder="Digite o Número de cadastro" class="form-control" required value="<?php echo $_SESSION['autUser']['oab_usuario'];?>">
		</div>
	</div>
	<div id="dados_contato_comercial">
	<legend>
		<span class="col-sm-10">
			Dados para contato Comercial
		</span>
		<span class="add-contato-pessoal col-sm-2">
			<img src="img/add-email.png" alt="Adicionar novo endereço de Email" title="Adicionar novo endereço de Email" class="img-responsive" id="dados_contato_pessoal_abrir">
		</span>
		<div class="clearfix"></div>
	</legend>
	<?php include_once 'dados_contato_comercial.php';?>
	</div>
	
	<div id="dados_contato_pessoal">
		<legend>
			<span class="col-sm-10">
				Dados para contato Pessoal
			</span>
			<div class="clearfix"></div>
		</legend>
	<?php include_once 'dados_contato_pessoal.php';?>
	</div>
	<input type="hidden" value="<?php echo $_SESSION['autUser']['reg_usuario']?>" name="cod_reg_cliente">
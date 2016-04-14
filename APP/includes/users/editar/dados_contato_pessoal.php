<div class="form-group">
	<label for="cep_endereco_pessoal" class="col-sm-3 control-label">CEP:</label>
	<div class="col-sm-2 ">
		<input type="number" id="cep_endereco_pessoal" name="cep_endereco_pessoal" placeholder="0000000" title="Somente os Números" class="form-control" value="<?php if($_SESSION['autUser']['cep_endereco_pessoal'])echo $_SESSION['autUser']['cep_endereco_pessoal'] ?>">
	</div>
	<label for="estado_endereco_pessoal" class="col-sm-1 control-label">Estado:</label>
	<div class="col-sm-2">
		<input type="text" class="form-control" id="estado_endereco_pessoal" name="estado_endereco_pessoal" placeholder="Estado" value="<?php if($_SESSION['autUser']['estado_endereco_pessoal'])echo $_SESSION['autUser']['estado_endereco_pessoal'] ?>">
	</div>
	<label for="cidade_endereco_pessoal" class="col-sm-1 control-label">Cidade:</label>
	<div class="col-sm-3">
		<input type="text" class="form-control" id="cidade_endereco_pessoal" name="cidade_endereco_pessoal" placeholder="Cidade" value="<?php if($_SESSION['autUser']['cidade_endereco_pessoal'])echo $_SESSION['autUser']['cidade_endereco_pessoal'] ?>">
	</div>
</div>
<div class="form-group">
	<label for="localidade_endereco_pessoal" class="col-sm-3 control-label">Enderço:</label>
	<div class="col-sm-5">
		<input type="text" class="form-control" id="localidade_endereco_pessoal" name="localidade_endereco_pessoal" placeholder="Rua, Av, Estrada..." value="<?php if($_SESSION['autUser']['localidade_endereco_pessoal'])echo $_SESSION['autUser']['localidade_endereco_pessoal'] ?>">
	</div>
	<label for="numero_endereco_pessoal" class="col-sm-1 control-label">Nº:</label>
	<div class="col-sm-3">
		<input type="text" class="form-control" id="numero_endereco_pessoal" name="numero_endereco_pessoal" placeholder="Número" value="<?php if($_SESSION['autUser']['numero_endereco_pessoal'])echo $_SESSION['autUser']['numero_endereco_pessoal'] ?>">
	</div>
</div>

<div class="form-group">
	<label for="bairro_endereco_pessoal" class="col-sm-3 control-label">Bairro:</label>
	<div class="col-sm-5">
		<input type="text" class="form-control" id="bairro_endereco_pessoal" name="bairro_endereco_pessoal" placeholder="Bairro" value="<?php if($_SESSION['autUser']['bairro_endereco_pessoal'])echo $_SESSION['autUser']['bairro_endereco_pessoal'] ?>">
	</div>
	<label for="complemento_endereco_pessoal" class="col-sm-2 control-label">Complemento:</label>
	<div class="col-sm-2">
		<input type="text" class="form-control" id="complemento_endereco_pessoal" name="complemento_endereco_pessoal" placeholder="Qual o complemento" value="<?php if($_SESSION['autUser']['complemento_endereco_pessoal'])echo $_SESSION['autUser']['complemento_endereco_pessoal'] ?>">
	</div>
</div>
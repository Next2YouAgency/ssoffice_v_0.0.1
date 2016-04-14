

<div class="form-group">
	<label for="email_principal" class="col-sm-3 control-label">E-mail Principal:</label>
	<div class="col-sm-7 ">
		<p class="lead"><?php echo $_SESSION['autUser']['email_principal_usuario']?></p>
		<input type="hidden" name="email_principal" value="<?php echo $_SESSION['autUser']['email_principal_usuario']?>">
	</div>
	<div class="col-sm-2">
		<span class="add-email-secundario1">
			<img src="img/add-email.png" alt="Adicionar novo endereço de Email" title="Adicionar novo endereço de Email" class="img-responsive" id="email-secundario1-abrir">
		</span>
	</div>
</div>
<div id="emails-secundarios">
	<div id="email-secundario1" class="form-group">
		<label for="email_pessoal1" class="col-sm-3 control-label">E-mail Secundário:</label>
		<div class="col-sm-7 ">
			<input type="email" name="email_pessoal1" id="email_pessoal1" placeholder="Endereço de Email Secundário" class="form-control" value="<?php if($_SESSION['autUser']['email_pessoal1'])echo $_SESSION['autUser']['email_pessoal1'] ?>">
		</div>
		<div class="col-sm-2">
			<span class="add-email">
				<img src="img/add-email.png" alt="Adicionar novo endereço de Email" title="Adicionar novo endereço de Email" class="img-responsive" id="email-secundario2-abrir">
			</span>
		</div>
	</div>
	<div id="email-secundario2" class="form-group">
		<label for="email_pessoal2" class="col-sm-3 control-label">E-mail Secundário:</label>
		<div class="col-sm-7 ">
			<input type="email" name="email_pessoal2" id="email_pessoal2" placeholder="Endereço de Email Secundário" class="form-control" value="<?php if($_SESSION['autUser']['email_pessoal2'])echo $_SESSION['autUser']['email_pessoal2'] ?>">
		</div>
		<div class="col-sm-2">
			<span class="add-email">
				<img src="img/add-email.png" alt="Adicionar novo endereço de Email" title="Adicionar novo endereço de Email" class="img-responsive" id="email-secundario3-abrir">
			</span>
		</div>
	</div>
	<div id="email-secundario3" class="form-group">
		<label for="email_pessoal3" class="col-sm-3 control-label">E-mail Secundário:</label>
		<div class="col-sm-7 ">
			<input type="email" name="email_pessoal3" id="email_pessoal3" placeholder="Endereço de Email Secundário" class="form-control" value="<?php if($_SESSION['autUser']['email_pessoal3'])echo $_SESSION['autUser']['email_pessoal3'] ?>">
		</div>
	</div>
</div>
<div class="clearfix"></div>
<div class="form-group">
	<label for="telefone_principal" class="col-sm-3 control-label">Telefone Principal:</label>
	<div class="col-sm-7 ">
		<input type="phone" id="telefone_principal" name="telefone_principal" placeholder="Formato: (XX) XXXX-XXXX" class="form-control" required value="<?php if($_SESSION['autUser']['telefone_principal'])echo $_SESSION['autUser']['telefone_principal'] ?>">
	</div>
	<div class="col-sm-2">
		<span class="add-phone">
			<img src="img/add-phone.png" alt="Adicionar novo Telefone" title="Adicionar novo Telefone" class="img-responsive" id="telefone-secundario1-abrir">
		</span>
	</div>
</div>
<div id="telefones-secundarios">
	<div id="telefone-secundario1" class="form-group">
		<label for="telefone_pessoal1" class="col-sm-3 control-label">Telefone:</label>
		<div class="col-sm-7 ">
			<input type="phone" id="telefone_pessoal1" name="telefone_pessoal1" placeholder="Formato: (XX) XXXX-XXXX" class="form-control" value="<?php if($_SESSION['autUser']['telefone_pessoal1'])echo $_SESSION['autUser']['telefone_pessoal1'] ?>">
		</div>
		<div class="col-sm-2">
			<span class="add-phone">
				<img src="img/add-phone.png" alt="Adicionar novo Telefone" title="Adicionar novo Telefone" class="img-responsive" id="telefone-secundario2-abrir">
			</span>
		</div>
	</div>
	<div id="telefone-secundario2" class="form-group">
		<label for="telefone_pessoal2" class="col-sm-3 control-label">Telefone:</label>
		<div class="col-sm-7 ">
			<input type="phone" id="telefone_pessoal2" name="telefone_pessoal2" placeholder="Formato: (XX) XXXX-XXXX" class="form-control" value="<?php if($_SESSION['autUser']['telefone_pessoal2'])echo $_SESSION['autUser']['telefone_pessoal2'] ?>">
		</div>
	</div>
</div>
<div class="form-group">
	<label for="cep_endereco_principal" class="col-sm-3 control-label">CEP:</label>
	<div class="col-sm-2 ">
		<input type="number" id="cep_endereco_principal" name="cep_endereco_principal" placeholder="0000000" title="Somente os Números" class="form-control" value="<?php if($_SESSION['autUser']['cep_endereco_principall'])echo $_SESSION['autUser']['cep_endereco_principall'] ?>">
	</div>
	<label for="estado_endereco_principal" class="col-sm-1 control-label">Estado:</label>
	<div class="col-sm-2">
		<input type="text" class="form-control" id="estado_endereco_principal" name="estado_endereco_principal" placeholder="Estado" value="<?php if($_SESSION['autUser']['estado_endereco_principal'])echo $_SESSION['autUser']['estado_endereco_principal'] ?>">
	</div>
	<label for="cidade_endereco_principal" class="col-sm-1 control-label">Cidade:</label>
	<div class="col-sm-3">
		<input type="text" class="form-control" id="cidade_endereco_principal" name="cidade_endereco_principal" placeholder="Cidade" value="<?php if($_SESSION['autUser']['cidade_endereco_principal'])echo $_SESSION['autUser']['cidade_endereco_principal'] ?>">
	</div>
</div>
<div class="form-group">
	<label for="localidade_endereco_principal" class="col-sm-3 control-label">Enderço:</label>
	<div class="col-sm-5">
		<input type="text" class="form-control" id="localidade_endereco_principal" name="localidade_endereco_principal" placeholder="Rua, Av, Estrada..." value="<?php if($_SESSION['autUser']['localidade_endereco_principal'])echo $_SESSION['autUser']['localidade_endereco_principal'] ?>">
	</div>
	<label for="numero_endereco_principal" class="col-sm-1 control-label">Nº:</label>
	<div class="col-sm-3">
		<input type="text" class="form-control" id="numero_endereco_principal" name="numero_endereco_principal" placeholder="Número" value="<?php if($_SESSION['autUser']['numero_endereco_principal'])echo $_SESSION['autUser']['numero_endereco_principal'] ?>">
	</div>
</div>

<div class="form-group">
	<label for="bairro_endereco_principal" class="col-sm-3 control-label">Bairro:</label>
	<div class="col-sm-5">
		<input type="text" class="form-control" id="bairro_endereco_principal" name="bairro_endereco_principal" placeholder="Bairro" value="<?php if($_SESSION['autUser']['bairro_endereco_principal'])echo $_SESSION['autUser']['bairro_endereco_principal'] ?>">
	</div>
	<label for="complemento_endereco_principal" class="col-sm-2 control-label">Complemento:</label>
	<div class="col-sm-2">
		<input type="text" class="form-control" id="complemento_endereco_principal" name="complemento_endereco_principal" placeholder="Qual o complemento" value="<?php if($_SESSION['autUser']['complemento_endereco_principal'])echo $_SESSION['autUser']['complemento_endereco_principal'] ?>">
	</div>
</div>
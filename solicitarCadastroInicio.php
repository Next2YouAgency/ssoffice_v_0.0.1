<div class="form-group">
	<label for="inputEmail3" class="col-sm-2 control-label">Tipo*</label>
	<div class="col-sm-10">
		<select name="tipo_pessoa" id="tipo_pessoa" onchange="verificarTipoPessoa();" class="form-control">
			<option value="cpf">Pessoa Física</option>
			<option value="cnpj">Pessoa Jurídica</option>
		</select>
	</div>
</div>
<div id="inserir_pagina">
	<?php
	if(!isset($_GET['tipo_pessoa'])){
		include_once 'pagina_cadastro_cpf.php';
	}
	?>
</div>
<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3 rounded">
	<?php
		//Tomada de Decição para preencher o restante do cadastro
		if($tipo_pessoa === 'cpf'){
			//caso pessoa física
			include_once 'cadastro_cpf.php';
		}else{
			//caso pessoa jurídica
			include_once 'cadastro_cnpj.php';
		}
	?>
</div>
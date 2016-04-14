<!-- Modal -->
<div class="modal fade" id="editarPerfil" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel">Editar o Cadastro</h4>
		</div>
		<div class="modal-body">
		<form action="includes/users/editar/editarPerfil.php" method="post" class="form-horizontal">
			<?php
				//Tomada de Decição para preencher o restante do cadastro
				if($_SESSION['autUser']['tipo_usuario'] === 'cpf'){
					//caso pessoa física
					include_once 'editar/_cpf.php';
				}else{
					//caso pessoa jurídica
					include_once 'editar/_cnpj.php';
				}
			?>
		</div>
		<div class="modal-footer">
			<input type="submit" value="Alterar" class="btn btn-success" id="sendForm">
			<button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
		</form>
		</div>
		</div>
	</div>
</div>
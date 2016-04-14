<h3 class="text-primary">
	<span class="col-md-10">
		<?php echo $_SESSION['autUser']['nome_usuario'];?></h3>
	</span>
	<?php include_once 'includes/users/btn_acoes_perfil.php';?>
<span class="btn-default btn-lg">Tipo de Cadastro: <?php echo strtoupper($_SESSION['autUser']['tipo_usuario']);?></span>
<hr style="border:1px solid #ccc">
<p class="lead">Detalhes do Cadastro</p>
<div class="col-md-10 bg-info">
	<h4>Informa&ccedil;&otilde;es sobre Contatos:</h4>
	
	<p class="">
		Email Principal de cadastro:
		<strong>
			<a href="mailto:<?php echo $_SESSION['autUser']['email_principal_usuario'];?>">
				<?php echo $_SESSION['autUser']['email_principal_usuario'];?>
			</a>
		</strong>
	</p>
	<p class="">
		Telefone Principal:
		<strong>
			<?php echo $_SESSION['autUser']['telefone_principal'];?>
		</strong>
	</p>
	<p class="">
		Processos: <strong><?php echo 'N'?></strong>
	</p>
</div>
<?php
	#Elementos Modal
	include_once 'modal_editar_dados.php';
	include_once 'criar_processo_como_autor.php';
	include_once 'criar_processo_como_reu.php';
	include_once 'adicionar_documentos.php';
	include_once 'relatorio_completo.php';
	include_once 'excluir_pessoa.php';
?>






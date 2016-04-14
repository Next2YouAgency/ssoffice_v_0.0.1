<nav class="navbar navbar-inverse navbar-static-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			</button>
		</div>
		
		<div id="navbar" class="navbar-collapse collapse">
			<ul class="nav navbar-nav">
				<!--Acesso do Usuário-->
				<li class="dropdown" style="margin:10px 0 -10px 0;float:left;">
				<a href="index.php?url=guia_player" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
				<?php echo lmWord($_SESSION['autUser']['nome_usuario']);?> <span class="caret"></span>
				<ul class="dropdown-menu">
					<li class="dropdown">
						<a href="index.php?url=profile" title="Conheça os gestores do sistema On-line">
							Meu Perfil
						</a>
					</li>
					<li class="dropdown">
						<a href="index.php?url=alerts" title="Vamos Jogar?">
							Alertas
						</a>
					</li>
					<li class="dropdown">
						<a href="#" class="" data-toggle="modal" data-target="#mudarSenha" title="Já tem sua conta? Faça o Login">
							Alterar Senha
						</a>
					</li>
					<li class="dropdown">
						<a href="index.php?url=my-account" title="Já tem sua conta? Faça o Login">
							Minha Conta
						</a>
					</li>
					<li class="dropdown">
						<a href="index.php?url=help" title="Já tem sua conta? Faça o Login">
							Preciso de Ajuda
						</a>
					</li>
					<li role="separator" class="divider"></li>
					<li class="dropdown">
						<a href="index.php?url=log-off" title="Já tem sua conta? Faça o Login">
							Sair
						</a>
					</li>
				</ul>
				</a>
				</li>
			</ul>
		</div>
	</div>
</nav>
<div class="modal fade" id="mudarSenha" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel">Alterar a Senha do Usuário: <?php echo $_SESSION['nome']?></h4>
		</div>
		<div class="modal-body">
		<form action="editar/alteadoSenha.php" method="post">
		<?php
			include 'includes/users/editar/alterarSenha.php';
		?>
		</div>
		<div class="modal-footer">
			<input type="submit" value="Salvar Senha" class="btn btn-success">
			<button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
		</form>
		</div>
		</div>
	</div>
</div>
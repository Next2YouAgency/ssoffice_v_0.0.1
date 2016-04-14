<nav class="navbar navbar-inverse navbar-static-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#action_user" aria-expanded="false" aria-controls="navbar">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			</button>
		</div>
		
		<div id="action_user" class="navbar-collapse collapse">
			<ul class="nav navbar-nav">
				<!--Acesso do Usuário-->
				<li class="dropdown" style="margin:10px 0 -10px 0;float:left;">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
				<span class="btn text-center"><?php echo utf8_decode(utf8_encode('Ações')) ?><span><span class="caret"></span>
				<ul class="dropdown-menu">
					<li class="dropdown">
						<a href="#" data-toggle="modal" data-target="#editarPerfil" title="Editar o seu Perfil">
							Editar Meu Perfil
						</a>
					</li>
					<li class="dropdown">
						<a href="index.php?url=processo_como_autor" title="Criar um processo como autor">
							Criar um processo como autor
						</a>
					</li>
					<li class="dropdown">
						<a href="index.php?url=processo_como_reu" title="Criar um processo como ré">
							Criar um processo como ré
						</a>
					</li>
					<li class="dropdown">
						<a href="index.php?url=adicionar_documentos" title="Adicionar Documentos">
							Adicionar Documentos
						</a>
					</li>
					<li class="dropdown">
						<a href="#" data-toggle="modal" data-target="#relatorioCompleto" title="Relatório Completo">
							Relatório Completo
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
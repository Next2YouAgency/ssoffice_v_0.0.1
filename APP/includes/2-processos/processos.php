<!--Topo da Página-->
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 bg-warning topo-content pull-left">
	<p class="lead"><?php echo ucfirst($url);?></p>
</div>
<!--Topo da Página-->
<!-- Static navbar -->
<nav class="navbar navbar-default no-background">
	<div id="navbar" class="navbar-collapse filters-inline">
		<ul class="nav navbar-nav">
			<li class="dropdown">
			<a href="#" class="dropdown-toggle bg-primary img-rounded color-white" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Filtros <span class="caret"></span></a>
			<ul class="dropdown-menu color-default newFilter">
			<!-- LISTA DE FILTROS-->
				<li><a href="#">Salvar Filtro</a></li>
				<li><a href="#">Limpar Filtro</a></li>
				<li><a href="#" title="Gereniar com Modal Window">Gerenciar Filtros</a></li>
				<li role="separator" class="divider"></li>
				<li><a href="#">Favoritos</a></li>
				<li role="separator" class="divider"></li>
				<li><a href="#">
					<input type="text" class="color-default" id="findFilters" name="findFilters" onkeyup="findFilters()" placeholder="Buscar Filtros" autofocus>
				</a></li>
				<div id="Resultados">
					<?php
						$queryBuscarFiltros = "SELECT * FROM filtros_sistema";
						$exeQueryBuscarFiltros	=	mysql_query($queryBuscarFiltros)or die(mysql_error());
						
						if(mysql_num_rows($exeQueryBuscarFiltros) > 0){
							while ($linha = mysql_fetch_array($exeQueryBuscarFiltros)) {
							$nomeFiltro		=	$linha['nome_filtro'];
							$caminhoFiltro	=	$linha['caminho_filtro'];
							?>
								<li style="margin:8px 15px;"><a href="<?php echo $caminhoFiltro?>" class="link_sem_padrao"><span class="glyphicon glyphicon-filter"></span><?php echo $nomeFiltro?></a></li>
							<?php
							}
						}
					?>
				</div>
			<!-- LISTA DE FILTROS-->
			
			</ul>
			<li class="dropdown no-background">
			<a href="#" class="dropdown-toggle no-background" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
				Status: <span class="selectedItemStatus"><b>Em andamento</b></span><span class="caret"></span>
			</a>
			<ul class="dropdown-menu" id="statusProcessos">
				<!-- Listar Status de Processos do Banco de Dados-->
				<?php
						$queryBuscarStatus = "SELECT * FROM status_processo";
						$exeQueryBuscarStatus	=	mysql_query($queryBuscarStatus)or die(mysql_error());
						
						if(mysql_num_rows($exeQueryBuscarStatus) > 0){
							while ($linha = mysql_fetch_array($exeQueryBuscarStatus)) {
							$nomeStatus		=	$linha['nome_status'];
							$caminhoStatus	=	$linha['caminho_status'];
							?>
								<li style="margin:8px 15px;"><a href="<?php echo $caminhoStatus?>" class="link_sem_padrao"><span class="glyphicon glyphicon-filter"></span><?php echo $nomeStatus?></a></li>
							<?php
							}
						}
					?>
			</ul>
			</li>
			<li class="dropdown no-background" id="clientesCadastrados">
				
				<a href="#" class="dropdown-toggle no-background" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
					Clientes: <span class="selectedItemClientes"><b>Todos</b></span><span class="caret"></span>
				</a>
			<ul class="dropdown-menu">
				<li><a href="#">
					<input type="text" class="form-control" name="clientes" id= "clientes" onkeyup="findClientes()" autofocus>
					<span class="glyphicon glyphicon-search img-background-text"></span>
					<!-- Listar Clientes cadastrados no Banco de dados do Sistema -->
					<div id="resultadosClientesCadastrados">
						
					</div>
				</a></li>
			</ul>
			</li>
			<li class="dropdown">
			<a href="#" class="dropdown-toggle no-background" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
				Advogados: <span class="selectedItemAdv"><b>Eu (<?php echo $_SESSION['autUser']['nome_usuario']?>)</b></span><span class="caret"></span>
			</a>
			<ul class="dropdown-menu">
				<li><a href="#">
					
					<input type="text" class="form-control" name="advogados" id="advogados" onKeyPress="findAdv()" autofocus>
					<span class="glyphicon glyphicon-search img-background-text"></span>
					
					<!-- Listar Advogados cadastrados no Banco de dados do Sistema -->
					
					<div id="resultadoAdvogadosCadastrados">
					
					</div>
				</a></li>
				<li>
				
				</li>
			</ul>
			</li>
			<!--Novo Item-->
			<?php 
				//include 'includes/2-processos/index.php';
			?>
			<!--Novo Item-->
			<li><a href="#" id="addFiltro"><span class="glyphicon glyphicon-plus text-info" aria-hidden="true"></span><span>Adicionar Filtros</span></a></li>
		</ul>
	</div><!--/.nav-collapse -->
</nav>
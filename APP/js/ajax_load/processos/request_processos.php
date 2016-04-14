<?php // Verifica se existe a variável txtnome 
include '../../../appCnf/config.php';
if (isset($_GET["findFilters"])) {
$nome = $_GET["findFilters"];
// Verifica se a variável está vazia 
if (empty($nome)){
	$queryBuscarFiltros = "SELECT * FROM filtros_sistema";
} else {
	$nome .= "%";
	$queryBuscarFiltros	= "SELECT * FROM filtros_sistema WHERE nome_filtro like '$nome'";
}
$exeQueryBuscarFiltros = mysql_query($queryBuscarFiltros)or die(mysql_error());

// Verifica se a consulta retornou linhas
if (mysql_num_rows($exeQueryBuscarFiltros) > 0) {
	// Captura os dados da consulta para inserir no filtro 
	while ($linha = mysql_fetch_array($exeQueryBuscarFiltros)) {
		$nomeFiltro		=	$linha['nome_filtro'];
		$caminhoFiltro	=	$linha['caminho_filtro'];
		?>
			<li style="margin-left:15px;"><a href="<?php echo $caminhoFiltro?>" class="link_sem_padrao"><span class="glyphicon glyphicon-filter"></span><?php echo $nomeFiltro?></a></li>
		<?php
	} 
	?>
	</li>
	<?php
} else {
	// Se a consulta não retornar nenhum valor, exibir mensagem para o usuário
	
	}
}
?>
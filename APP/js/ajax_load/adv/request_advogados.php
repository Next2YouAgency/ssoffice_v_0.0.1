<?php // Verifica se existe a variável txtnome 
include '../../../appCnf/config.php';
if (isset($_GET["advogados"])) {
$nome = $_GET["advogados"];
// Verifica se a variável está vazia 
if (empty($nome)){
	$queryBuscarFiltros = "SELECT * FROM pessoas_cadastradas";
} else {
	$nome .= "%";
	$queryBuscarFiltros	= "SELECT * FROM pessoas_cadastradas WHERE nome_pessoa like '$nome' AND pessoa_advogado = 'Sim' ";
}
$exeQueryBuscarFiltros = mysql_query($queryBuscarFiltros)or die(mysql_error());

// Verifica se a consulta retornou linhas
if (mysql_num_rows($exeQueryBuscarFiltros) > 0) {
	// Captura os dados da consulta para inserir no filtro 
	while ($linha = mysql_fetch_array($exeQueryBuscarFiltros)) {
		$nomePessoa		=	$linha['nome_pessoa'];
		$caminhoFiltro	=	$linha['caminho_filtro'];
		?>
			<li style="margin-left:15px;"><a href="<?php echo $caminhoFiltro?>" class="link_sem_padrao"><span class="glyphicon glyphicon-filter"></span><?php echo $nomePessoa?></a></li>
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
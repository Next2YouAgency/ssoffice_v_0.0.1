<?php
	include 'config.php';
/**************************
FUNÇÃO DE CADASTRO NO BANCO
**************************/
	function create($tabela, array $dados){
		$queryBuscarTabela		=	"SELECT * FROM {$tabela}";
		$exeQrBuscarTabela	=	mysql_query($queryBuscarTabela);
		$valores			=	"'".implode("', '",array_values($dados))."'";
		
		echo '<pre>';
			print_r($valores);
		echo '</pre>';
		
		$queryCadastrar	=	"INSERT INTO {$tabela} (tipo_pessoa,tratamento_pessoa,nome_pessoa,reg_pessoa,email_pessoa1,cod_reg_cliente) VALUES ($valores)";
		
		$exeQrCadastrar	=	mysql_query($queryCadastrar);
		
		echo $qrCadastrar;
		
	}
	

?>
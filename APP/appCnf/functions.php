<?php
####################################
#  Debug para criar novas funções  #
include_once('define.php');
####################################
/***********************************
FUNÇÃO DE CADASTRO PESSOAS NO BANCO
***********************************/
	function create($tabela, array $dados){
		$queryBuscarTabela		=	"SELECT * FROM {$tabela}";
		$exeQrBuscarTabela	=	mysql_query($queryBuscarTabela);
		$valores			=	"'".implode("', '",array_values($dados))."'";
		
		echo '<pre>';
			print_r($valores);
		echo '</pre>';
		
		$queryCadastrar	=	"INSERT INTO {$tabela}";
		$queryCadastrar	.="(tipo_pessoa,tratamento_pessoa,nome_pessoa,genero_pessoa,email_principal,cod_reg_cliente,reg_pessoa_cadastrada) VALUES ($valores)";
		
		mysql_query($queryCadastrar);
		
	}

/*********************************
FUNÇÃO PARA LER AS TABELAS NO BANCO
OBS: Genérica
*********************************/	
	function read($tabela,$cond){
		$qrRead		=	"SELECT * FROM {$tabela} {$cond}";
		$stRead		=	mysql_query($qrRead) or die('Erro ao Buscar os valores da tabela: <strong>'.mysql_error().'</strong>');
		$cFields	=	mysql_num_fields($stRead);
		
		for($y = 0; $y < $cFields; $y++){
			 $names[$y]	=	mysql_field_name($stRead,$y);
			
		}
		
		for($x = 0; $res = mysql_fetch_assoc($stRead); $x++){
			for($i = 0; $i < $cFields; $i++){
				$resultado[$x][$names[$i]] = $res[$names[$i]];
			}
		}
		return $resultado;
	}
	/*debug'
	$read	=	read('usuarios_ativados');
	if($read){
		foreach($read as $res){
			echo '<h1>'.$res['cod_reg_usuario'].'</h1>';
		}
	}*/
	
/*********************************
FUNÇÃO PARA LER AS TABELAS NO BANCO
Deve alterar na chamada da função
o nome para a $tabela
*********************************/	
	function readCadastrados($tabela){
		$qrRead		=	"SELECT * FROM {$tabela}";
		$stRead		=	mysql_query($qrRead) or die('Erro ao Buscar os valores da tabela: <strong>'.mysql_error().'</strong>');
		$cFields	=	mysql_num_fields($stRead);
		
		for($y = 0; $y < $cFields; $y++){
			 $names['names'][$y]	=	mysql_field_name($stRead,$y);
			
		}
		
		$nomes_colunas	= implode(', ',$names['names']);
		
		return $nomes_colunas;
	}
/*************************************
FUNÇÃO PARA CADASTRAR USUARIOS ATIVOS
*************************************/

	function ativarCliente($tabela,$colunas_tabela,$valores_para_tabela){
		
		$queryCadastrarAtivo	=	"INSERT INTO {$tabela}($colunas_tabela) VALUES($valores_para_tabela)";
		$exeQrCadastrarAtivo	=	mysql_query($queryCadastrarAtivo) or die("Erro ao cadastrar no banco de dados: ".mysql_error());
		
	}

/*****************************
GERA RESUMOS
*****************************/

	function lmWord($string, $words = '20'){
		$string 	= strip_tags($string);
		$count		= strlen($string);
		
		if($count <= $words){
			return $string;	
		}else{
			$strpos = strrpos(substr($string,0,$words),' ');
			return substr($string,0,$strpos);
		}
		
	}
	
/*****************************
VALIDA O CPF
*****************************/	

	function valCpf($cpf){
		$cpf = preg_replace('/[^0-9]/','',$cpf);
		$digitoA = 0;
		$digitoB = 0;
		for($i = 0, $x = 10; $i <= 8; $i++, $x--){
			$digitoA += $cpf[$i] * $x;
		}
		for($i = 0, $x = 11; $i <= 9; $i++, $x--){
			if(str_repeat($i, 11) == $cpf){
				return false;
			}
			$digitoB += $cpf[$i] * $x;
		}
		$somaA = (($digitoA%11) < 2 ) ? 0 : 11-($digitoA%11);
		$somaB = (($digitoB%11) < 2 ) ? 0 : 11-($digitoB%11);
		if($somaA != $cpf[9] || $somaB != $cpf[10]){
			return false;	
		}else{
			return true;
		}
	}		
	
/*****************************
VALIDA O CNPJ
*****************************/

	function valida_cnpj ( $cnpj ) {
    // Deixa o CNPJ com apenas números
    $cnpj = preg_replace( '/[^0-9]/', '', $cnpj );
    
    // Garante que o CNPJ é uma string
    $cnpj = (string)$cnpj;
    
    // O valor original
    $cnpj_original = $cnpj;
    
    // Captura os primeiros 12 números do CNPJ
    $primeiros_numeros_cnpj = substr( $cnpj, 0, 12 );
    
    /**
     * Multiplicação do CNPJ
     *
     * @param string $cnpj Os digitos do CNPJ
     * @param int $posicoes A posição que vai iniciar a regressão
     * @return int O
     *
     */
    if ( ! function_exists('multiplica_cnpj') ) {
        function multiplica_cnpj( $cnpj, $posicao = 5 ) {
            // Variável para o cálculo
            $calculo = 0;
            
            // Laço para percorrer os item do cnpj
            for ( $i = 0; $i < strlen( $cnpj ); $i++ ) {
                // Cálculo mais posição do CNPJ * a posição
                $calculo = $calculo + ( $cnpj[$i] * $posicao );
                
                // Decrementa a posição a cada volta do laço
                $posicao--;
                
                // Se a posição for menor que 2, ela se torna 9
                if ( $posicao < 2 ) {
                    $posicao = 9;
                }
            }
            // Retorna o cálculo
            return $calculo;
        }
    }
    
    // Faz o primeiro cálculo
    $primeiro_calculo = multiplica_cnpj( $primeiros_numeros_cnpj );
    
    // Se o resto da divisão entre o primeiro cálculo e 11 for menor que 2, o primeiro
    // Dígito é zero (0), caso contrário é 11 - o resto da divisão entre o cálculo e 11
    $primeiro_digito = ( $primeiro_calculo % 11 ) < 2 ? 0 :  11 - ( $primeiro_calculo % 11 );
    
    // Concatena o primeiro dígito nos 12 primeiros números do CNPJ
    // Agora temos 13 números aqui
    $primeiros_numeros_cnpj .= $primeiro_digito;
 
    // O segundo cálculo é a mesma coisa do primeiro, porém, começa na posição 6
    $segundo_calculo = multiplica_cnpj( $primeiros_numeros_cnpj, 6 );
    $segundo_digito = ( $segundo_calculo % 11 ) < 2 ? 0 :  11 - ( $segundo_calculo % 11 );
    
    // Concatena o segundo dígito ao CNPJ
    $cnpj = $primeiros_numeros_cnpj . $segundo_digito;
    
    // Verifica se o CNPJ gerado é idêntico ao enviado
    if ( $cnpj === $cnpj_original ) {
        return true;
    }
}


/*****************************
VALIDA O EMAIL
*****************************/	
	
	function valMail($email){
		if(preg_match('/[a-z0-9_\.\-]+@[a-z0-9_\.\-]*[a-z0-9_\.\-]+\.[a-z]{2,4}$/',$email)){
			return true;
		}else{
			return false;
		}
	}

/*****************************
UPDATE PERFIL
*****************************/

	function updatePerfil($tabela){
		
		$valor1	=	"teste1";
		$valor2	=	"teste2";
		$valor3	=	"teste3";
		
		$valor_antigo	=	"teste_antigo1";
		$valor_antigo2	=	"teste_antigo2";
		$valor_antigo3	=	"teste_antigo3";
		
		$qr1	=	"UPDATE {$tabela} SET info1 = '$valor1' WHERE info1 = '$valor_antigo'";
		$qr1	.=	"UPDATE {$tabela} SET info2 = '$valor2' WHERE info2 = '$valor_antigo2'";
		$qr1	.=	"UPDATE {$tabela} SET info3 = '$valor3' WHERE info3 = '$valor_antigo3'";
		
		echo $qr1;
		
	}

	/* dEBUG */
		



	
?>
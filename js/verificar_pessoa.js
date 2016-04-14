/** * Função para criar um objeto XMLHTTPRequest */ 
function CriaRequest() {
	try{
		request = new XMLHttpRequest();
	}catch (IEAtual){
		try{ request = new ActiveXObject("Msxml2.XMLHTTP");
	}catch(IEAntigo){
		try{
			request = new ActiveXObject("Microsoft.XMLHTTP");
		}catch(falha){
			request = false;
		}
	} 
}
if (!request) alert("Verifique sua versão do navegador!"); else return request; }
function verificarTipoPessoa(){
	// Declaração de Variáveis
	var tipo_pessoa		=	document.getElementById("tipo_pessoa").value;
	var inserir_pagina	=	document.getElementById("inserir_pagina");
	var xmlreq = CriaRequest();
	// Exibi a imagem de progresso
	inserir_pagina.innerHTML = '<img src="img/ajax-loader.gif"/>';
	// Iniciar uma requisição
	xmlreq.open("GET", "pagina_verificar_tipo.php?tipo_pessoa=" + tipo_pessoa, true);
	// Atribui uma função para ser executada sempre que houver uma mudança de Dado
	xmlreq.onreadystatechange = function(){
		// Verifica se foi concluído com sucesso e a conexão fechada (readyState=4) 
		if (xmlreq.readyState == 4) {
			// Verifica se o arquivo foi encontrado com sucesso
			if (xmlreq.status == 200) {
				inserir_pagina.innerHTML = xmlreq.responseText;
			}else{
				inserir_pagina.innerHTML = "Erro: " + xmlreq.statusText;
			}
		}
	};
	xmlreq.send(null);
}
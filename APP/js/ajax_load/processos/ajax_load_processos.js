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
/** * Função para enviar os dados */ 
function findFilters() {
	// Declaração de Variáveis
	var nome = document.getElementById("findFilters").value;
	var result = document.getElementById("Resultados");
	var xmlreq = CriaRequest();
	// Exibi a imagem de progresso
	result.innerHTML = '<img src="img/ajax_load/ajax-loader.gif"/>';
	// Iniciar uma requisição
	xmlreq.open("GET", "js/ajax_load/processos/request_processos.php?findFilters=" + nome, true);
	// Atribui uma função para ser executada sempre que houver uma mudança de Dado
	xmlreq.onreadystatechange = function(){
		// Verifica se foi concluído com sucesso e a conexão fechada (readyState=4) 
		if (xmlreq.readyState == 4) {
			// Verifica se o arquivo foi encontrado com sucesso
			if (xmlreq.status == 200) {
				result.innerHTML = xmlreq.responseText;
			}else{
				result.innerHTML = "Erro: " + xmlreq.statusText;
			}
		}
	};
	xmlreq.send(null);
}
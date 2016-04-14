$(function(){
	$('.clique_aqui_perfil').click(function(){
		var action_user	=	$('#action_user');
		
		if(action_user.hasClass('in')){
			$('#action_user').removeClass('in').addClass('exibir_action_user');
		}else{
			$('#action_user').removeClass('in').addClass('ocultar_action_user');
		}		
	});
});
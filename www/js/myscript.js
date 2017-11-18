$(document).ready(function(){

	$('#menu a').click(function(event){

		var destino = this.hash;
		event.preventDefault();
		if(destino !== ''){
			$('html,body').animate({scrollTop:$(destino).offset().top-50}, 600);
			$('#menu a').removeClass('active');
			$(this).addClass('active');
		}else{

		}
	});


	$('#contacto').submit(function(){

		$('.form-input').each(function(){
			if($(this).val() == ""){
				$(this).focus();
				return false;
			}
		});

		var dato = $(this).serialize();

		$.ajax({
			type:'POST',
			url:'form-mail.php',
			data:dato,
			success:function(){
				alert('Mesanje enviado');
				$('.form-input').val('');
		},
			error:function(){
				alert('Ha surgido un error');
			}

		});		

		return false;
	});
});

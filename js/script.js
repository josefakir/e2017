$(document).ready(function(){
	abierto = 0;
	abierto2 = 0;
	$('#menu-control-lateral').click(function(){
		if(abierto==0){
			$('#main-menu-lateral').stop().animate({
				'left' : '0px'
			});
			$('#menu-control-lateral').stop().animate({
				'left' : '260px'
			});
			$('#menu-control-lateral').html('<i class="menu-control-arrow fa fa-chevron-left"></i>');
			abierto = 1;
		}else{
			$('#main-menu-lateral').stop().animate({
				'left' : '-260px'
			});
			$('#menu-control-lateral').stop().animate({
				'left' : '0px'
			});
			$('#menu-control-lateral').html('<i class="menu-control-arrow fa fa-chevron-right"></i>');
			abierto = 0;
		}
	});
	$('.tabla').DataTable();
	$('.add-new-record').click(function(){
		if(abierto2==0){
			$('.registros').css({
				width : '50%'
			});
			$('.formulario').show();
			$('.formulario').css({
				width   : '48%',
				'padding-right' : '2%' 
			});
			abierto2 = 1;
		}else{
			$('.formulario').hide();
			
			$('.registros').css({
				width : '100%'
			});
			
			abierto2 = 0;
		}
	})
	 $('select').select2();
	 $('.validation-form').validate({});
});
$(document).ready(function(){
	var URL_API = "http://localhost/est/api/";
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
	 $('.validation-form2').validate({});
	 $('.cerraroverlay').click(function(e){
	 	e.preventDefault();
	 	$('#overlay_actividades').fadeOut('fast');
	 	$('#overlay_detalle').fadeOut('fast');
	 	$('#overlay_contacto').fadeOut('fast');
	 	$('#overlay_registro').fadeOut('fast');

	 });
	 $( ".datepicker" ).datepicker({ dateFormat: 'yy-mm-dd' });
	 $('.timepicker').wickedpicker({
	 	title: 'Seleccione la hora (formato 24hrs)', 
	 	twentyFour: true
	 });
	 $('.agregar_actividad').click(function(e){
	 	e.preventDefault();
	 	id_lead = $(this).attr('rel');
	 	$('#id_lead').val(id_lead);
	 	$('#overlay_actividades').fadeIn('fast');
	 });
	 $('.detalles_actividad').click(function(e){
	 	e.preventDefault();
	 	id_lead = $(this).attr('rel');
	 	$.ajax({
	 		url : URL_API + 'actividades/'+id_lead,
	 		success : function(data){
	 			output = '';
	 			$.each( data, function( key, value ) {
	 				output+= '<tr><td>'+value.id+'</td><td>'+value.que_hice+'</td><td>'+value.comentarios+'</td><td>'+value.que_hare+'</td></tr>'
				});
				$('#bodydetalleslead').html(output);
	 		}
	 	});
	 	$('#overlay_detalle').fadeIn('fast');
	 });
	 $('.btn_contacto').click(function(e){
	 	e.preventDefault();
	 	$.ajax({
	 		url : URL_API + 'detallesdesclub/'+$(this).attr('rel-id-marca'),
	 		success : function(data){
	 			$('#c_razonsocial').val(data[0].razon_social);
	 			$('#c_rfc').val(data[0].RFC);
	 			$('#c_contacto').val(data[0].contacto);
	 			$('#c_puesto').val(data[0].puesto);
	 			$('#c_tel1').val(data[0].telefono_1);
	 			$('#c_tel2').val(data[0].telefono_2);
	 			$('#c_email').val(data[0].email);
	 		}
	 	});
	 	$('#overlay_contacto').fadeIn('fast');
	 	$('#id_lead_contacto').val($(this).attr('rel'));
	 	$('#id_marca').val($(this).attr('rel-id-marca'));
	 });

	 $('.btn_registro').click(function(e){
	 	e.preventDefault();
	 	$.ajax({
	 		url : URL_API + 'detallesdesclub/'+$(this).attr('rel-id-marca'),
	 		success : function(data){
	 			console.log(data);
	 			$('#r_razonsocial').val(data[0].razon_social);
	 			$('#r_rfc').val(data[0].RFC);
	 			$('#r_contacto').val(data[0].contacto);
	 			$('#r_puesto').val(data[0].puesto);
	 			$('#r_tel1').val(data[0].telefono_1);
	 			$('#r_escelular_tel2').val(data[0].es_celular_1);
	 			$('#r_tel2').val(data[0].telefono_2);
	 			$('#r_escelular_tel2').val(data[0].es_celular_2);
	 			$('#r_email').val(data[0].email);
	 			$('#r_calle').val(data[0].calle);
	 			$('#r_no_ext').val(data[0].no_exterior);
	 			$('#r_no_int').val(data[0].no_interior);
	 			$('#r_referencia').val(data[0].referencia);
	 			$('#r_latitud').val(data[0].latitud);
	 			$('#r_longitud').val(data[0].longitud);
	 			$('#r_tieneactividad').val(data[0].tiene_actividad_calidad);
	 			$('#r_actividad').val(data[0].actividad_calidad);
	 			$('#r_comentarios').val(data[0].comentarios);

	 		}
	 	});
	 	$('#overlay_registro').fadeIn('fast');
	 	$('#id_lead_registro').val($(this).attr('rel'));
	 	$('#id_marca_registro').val($(this).attr('rel-id-marca'));
	 });


});
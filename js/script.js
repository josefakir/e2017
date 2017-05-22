
$(document).ready(function(){
	var URL_API = "http://localhost/est/api/";
	//var URL_API = "http://b0ld.net/b0ld.net/bluegeni_dondeir/api/";
	

	$('.menu-item-link').click(function(e){
		if($(this).attr('id')!="cerrarsesion"){
			e.preventDefault();
			$(this).parent().next('.submenu').slideToggle();
		}
	});

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
	$('.tabla2').DataTable({
		'ordering' : false
	});
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
	 	$('#overlay_bienvenida').fadeOut('fast');
	 	$('#overlay_geolocalizacion').fadeOut('fast');
	 	$('#overlay_detalles_llamada_nueva').fadeOut('fast');
	 	$('#overlay_ruta_calidad').fadeOut('fast');
	 	$('#overlay_aprobarlead').fadeOut('fast');
	 	$('#overlay_rechazarlead').fadeOut('fast');

	 });
	 $( ".datepicker" ).datepicker({ dateFormat: 'yy-mm-dd' });
	 $('.timepicker').wickedpicker({
	 	now: "00:00",
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
	 $('.btn_llamada_bienvenida').click(function(e){
	 	e.preventDefault();
	 	$('#id_sucursal').val($(this).attr('rel'));
	 	$('#overlay_bienvenida').fadeIn('fast');
	 });
	 $('.btn_revisar_geolocalizacion').click(function(e){
	 	$('#id_sucursal_geo').val($(this).attr('rel'));
	 	e.preventDefault();
	 	$.ajax({
	 		url : URL_API+'/marcas/'+$(this).attr('rel-marca'),
	 		success : function(data){
	 			$('#nombre_marca').html(data.nombre);
	 		}
	 	});
	 	$.ajax({
	 		url : URL_API+'/sucursales/'+$(this).attr('rel'),
	 		success : function(data){
	 			$('#nombre_sucursal').html(data.nombre);
	 			$('#c_latitud').val(data.latitud);
	 			$('#c_longitud').val(data.longitud);
	 			$('#c_referencia').val(data.referencia);
	 			$('#c_id_zona option').each(function(index,element){
	 				if(element.value==data.id_zona){
	 					//$(this).attr('selected',true);
	 					$("#c_id_zona").val(data.id_zona).trigger("change");
	 				}
				 });
	 			
	 			//$('#c_id_zona').val(data.id_zona).trigger('change.select2');
	 		}
	 	});
	 	$('#overlay_geolocalizacion').fadeIn('fast');
	 	//obtener marca:

	 });
	 $('#detalle_llamada').change(function(){
	 	if($(this).val()=="Conocen convenio y aplican descuento" || $(this).val()=="Desconocen convenio"){
	 		$('#conoce_vb').show();
	 	}else{
	 		$('#conoce_vb').hide();
	 		$('#escala_info').hide();
	 		$('#motivo_desconoce').hide();
	 		$('#reforzo_informacion').hide();
	 		$('#material_pop').hide();
	 		$('#cantidades_pop').hide();
	 		$('#nombre_atendio').hide();
	 		$('#cargo_atendio').hide();
	 	}
	 });
	 $('#conoce_vb select').change(function(){
	 	if($(this).val()=='Sí'){
	 		$('#material_pop').show();
	 		$('#escala_info').hide();
	 		$('#motivo_desconoce').hide();
	 		$('#reforzo_informacion').hide();
	 	}else{
	 		$('#material_pop').hide();
	 		$('#escala_info').show();
	 		$('#motivo_desconoce').show();
	 		$('#reforzo_informacion').show();
	 	}
	 });
	 $('#reforzo_informacion select').change(function(){
	 	$('#material_pop').show();
	 });
	 $('#material_pop select').change(function(){
	 	if($(this).val()=='Sí'){
	 		$('#cargo_atendio').show();
	 		$('#nombre_atendio').show();
	 		$('#cantidades_pop').hide();
	 	}else{
	 		$('#cargo_atendio').show();
	 		$('#nombre_atendio').show();
	 		$('#cantidades_pop').show();
	 	}
	 });

	 $('#tipo_llamada').change(function(){
	 	tipo = $(this).val();
	 	switch(tipo){
	 		case 'Afiliar establecimiento':
	 		$('.afiliar_est').hide();
	 		$('.info_plataforma').hide();
	 		$('.queja_est').hide();
	 		$('.afiliar_est').show();
	 		break;
	 		case 'Información Plataforma':
	 		$('.afiliar_est').hide();
	 		$('.info_plataforma').hide();
	 		$('.queja_est').hide();
	 		$('.info_plataforma').show();
	 		break;
	 		case 'Queja Establecimiento':
	 		$('.afiliar_est').hide();
	 		$('.info_plataforma').hide();
	 		$('.queja_est').hide();
	 		$('.queja_est').show();
	 		break;	 		
	 	}
	 	campos = $(':input:visible');
	 });
	 $('#id_proyecto').change(function(){
	 	if($(this).val()==8){
	 		//esconder_llamada_no_valida
	 		if($('#id_tipo_llamada_1').val()=='Llamada Válida'){
	 			$('#tipo_tarjeta_seguro').parent().css('display','block');
	 		}
	 	}else{
	 		$('#tipo_tarjeta_seguro').parent().css('display','none');
	 	}

	 });
	 $('.actividad_llamada').click(function(e){
	 	e.preventDefault();
	 	$('#a_id_llamada').val($(this).attr('rel'));
	 	$('#overlay_detalles_llamada_nueva').fadeIn('fast');
	 	$.ajax({
	 		url : URL_API + 'seguimientos/'+$(this).attr('rel'),
	 		success : function(data){
	 			output = '';
	 			$.each( data, function( key, value ) {
	 				output+= '<tr><td>'+value.created_at.date+'</td><td>'+value.usuario[0].email+'</td><td>'+value.status+'</td><td>'+value.acuerdo+'</td><td>'+value.comentarios+'</td></tr>'
				});
				$('#body_seguimiento_quejas').html(output);
	 		}
	 	});
	 	$.ajax({
	 		url : URL_API + 'llamadas/'+$(this).attr('rel'),
	 		success : function(data){
	 			data = data[0];
	 			$('#det_llam_folio').html(data.id);
	 			$('#det_llam_nombre').html(data.nombre+' '+data.paterno+' '+data.materno);
	 			$('#det_llam_telefono').html(data.tipo_tel_1+' '+data.tel_1);
	 			$('#det_llam_telefono2').html(data.tipo_tel_2+' '+data.tel_2);
	 			$('#det_llam_email').html(data.email);
	 			$('#det_llam_marca').html(data.marca);
	 			$('#det_llam_sucursal').html(data.sucursal);
	 			$('#det_llam_fecha').html(data.fecha_visita);
	 			$('#det_llam_motivo').html(data.comentarios);
	 		}
	 	});
	 });
	 $('#btn_nueva_llamada').click(function(){
	 	$.ajax({
	 		url : URL_API + 'siguienteFolio',
	 		success : function(data){
	 			$('#folio').html(data);
	 		}
	 	});
	 });
	 $('.multiselect').multiSelect();
	 $('.multiselect').select2('destroy'); 

	 $('#select_estado').change(function(){
	 	$.ajax({
	 		url : URL_API + 'zonas_estado/'+$(this).val(),
	 		success : function(data){
	 			output = '<option value="">Seleccione</option>';
	 			$.each( data, function( key, value ) {
	 				output += '<option value="'+value.id+'">'+value.nombre+'</option>';
	 			});
	 			$('#select_zona').html(output);
	 			$('#select_zona').trigger('change.select2');
	 		}
	 	})
	 });
	 $('#select_zona').change(function(){
	 	$.ajax({
	 		beforeSend : function(){
	 			$('#cargandorutas').show();
	 			$('#my-select').html('');
				$('#my-select').multiSelect('refresh');
				$('#mensajerutas').html('');
	 		},
	 		url : URL_API+'sucursales_para_calidad/'+$('#select_estado').val()+'/'+$(this).val()+'/'+$('#id_proyecto').val()+'/'+$('#select_tipo_ruta').val(),
	 		success : function(data){
	 			output = '';
	 			if(data.length==0){
	 				output += 'No encontramos sucursales';
	 				$('#mensajerutas').html(output);
	 				$('#cargandorutas').hide();
	 			}else{
	 				$.each( data, function( key, value ) {
	 					output += '<option value="'+value.id_sucursal+'">'+value.sucursal+'</option>';
		 			});
		 			$('#my-select').html(output);
		 			$('#my-select').multiSelect('refresh');
		 			$('#cargandorutas').hide();
	 			}
	 		},error: function (error) {
                  alert('Seleccione estado, zona, tipo de ruta y proyecto para buscar la sucursal');
            }
	 	})
	 });
	 $('.btn_detalles_calidad').click(function(e){
	 	e.preventDefault();
	 	var id_ruta = $(this).attr('rel');
	 	$('#detalles_ruta_calidad_id_ruta').val(id_ruta);
	 	//body_detalles_ruta_calidad
	 	$.ajax({
	 		url : URL_API+'ruta_calidad/'+id_ruta,
	 		success : function(data){
	 			if(data[0].acrilicos==1){
	 				$('.js-switch').trigger('click');
	 			}
	 			if(data[0].calcomanias==1){
	 				$('.js-switch2').trigger('click');
	 			}
	 			if(data[0].comdesclub==1){
	 				$('.js-switch3').trigger('click');
	 			}
	 			if(data[0].combbva==1){
	 				$('.js-switch4').trigger('click');
	 			}
	 			if(data[0].reloj==1){
	 				$('.js-switch5').trigger('click');
	 			}
	 			$('input[name="comentarios"]').val(data[0].comentarios_ruta)
	 			output = '';
	 			$.each( data, function( key, value ) {
					output += '<tr><td>'+value.detalles_desclub[0].contacto+'</td><td>'+value.no_afiliacion+'</td><td>'+value.proyecto.nombre+'</td><td>'+value.referencia+'</td><td>'+value.efectivo+'</td><td>'+value.tarjeta+'</td><td>'+value.promo+'</td><td>'+value.inicio_actividades+'-'+value.fin_actividades+'</td></tr>';
		 		});
		 		$('#body_detalles_ruta_calidad').html(output);
		 		$('#overlay_ruta_calidad').fadeIn('fast');
	 		}
	 	})
	 });
	 $('#select_id_categoria').change(function(){
	 	//alert($(this).find('option:selected').text());
	 	if( $(this).find('option:selected').text() == "RESTAURANTES"){
	 		$('#esconder_tipo_de_comida').show();
	 	}else{
	 		$('#esconder_tipo_de_comida').hide();
	 	}
	 });
	 $('#select_status_lead').change(function(){
	 	if($(this).val()=='9'){
	 		$('#esconder_futura').hide();
	 	}else{
	 		$('#esconder_futura').show();
	 	}
	 });
	 $('.btn_aprobar_lead').click(function(e){
	 	e.preventDefault();
	 	$('#id_marca').val($(this).attr('rel'));
	 	$('#id_lead').val($(this).attr('rel-lead'));
	 	$('#overlay_aprobarlead').fadeIn('fast');
	 	$('#select_categoria_aprobar').val($(this).attr('rel-categoria'));
	 	$('#select_categoria_aprobar').trigger('change.select2');

	 	$('#select_importancia_aprobar').val($(this).attr('rel-importancia'));
	 	$('#select_importancia_aprobar').trigger('change.select2');

	 	$('#select_presencia_aprobar').val($(this).attr('rel-presencia'));
	 	$('#select_presencia_aprobar').trigger('change.select2');

	 	$('#input_comentarios_aprobar').val($(this).attr('rel-comentarios'));
	 });
	 $('.btn_rechazar_lead').click(function(e){
	 	e.preventDefault();
	 	$('#id_marca_r').val($(this).attr('rel'));
	 	$('#id_lead_r').val($(this).attr('rel-lead'));
	 	$('#overlay_rechazarlead').fadeIn('fast');
	 });


	/* AUTORRELLENADO COLONIAS SEPOMEX */
	$("#input_cp").on("blur",  function() {
		var cp = $(this).val();
		var n = cp.length;
		if(n!=5){
			alert('El CP debe constar de 5 dígitos');
			//$(this).focus();
		}else{
			$.ajax({
				url : URL_API + 'detalles_cp/'+$(this).val(),
				beforeSend : function(){
					$('.loading').show();
				},
				success : function(data){
					data = data[0];
					$('#etiqueta_estado').html(data.estado);
					$('#etiqueta_municipio').html(data.municipio);
					$('#etiqueta_colonia').html(data.asentamiento);
					$('#input_id_estado').val(data.idEstado);
					$('#input_id_municipio').val(data.idMunicipio);
					$('#input_id_colonia').val(data.id);
					$('#select_estado').val(data.idEstado);
					$('#select_estado').trigger('change.select2');
					$.ajax({
				 		url : URL_API + 'zonas_estado/'+data.idEstado,
				 		success : function(data){
				 			output = '<option value="">Seleccione</option>';
				 			$.each( data, function( key, value ) {
				 				output += '<option value="'+value.id+'">'+value.nombre+'</option>';
				 			});
				 			$('#select_zona').html(output);
				 			$('#select_zona').trigger('change.select2');
				 		}
				 	})
					$('.loading').hide();
					$('.esconder_cp').fadeIn('fast');
					$('.loading').hide();
				}
			});
		}	
	});
	if($('#contenido').hasClass('editar-sucursales')){
		$.ajax({
			url : URL_API + 'detalles_cp/'+$('#input_cp').val(),
			beforeSend : function(){
				$('.loading').show();
			},
			success : function(data){
				data = data[0];
				$('#etiqueta_estado').html(data.estado);
				$('#etiqueta_municipio').html(data.municipio);
				$('#etiqueta_colonia').html(data.asentamiento);
				$('#input_id_estado').val(data.idEstado);
				$('#input_id_municipio').val(data.idMunicipio);
				$('#input_id_colonia').val(data.id);
				$('#select_estado').val(data.idEstado);
				$('#select_estado').trigger('change.select2');
				$.ajax({
			 		url : URL_API + 'zonas_estado/'+data.idEstado,
			 		success : function(data){
			 			output = '<option value="">Seleccione</option>';
			 			$.each( data, function( key, value ) {
			 				output += '<option value="'+value.id+'">'+value.nombre+'</option>';
			 			});
			 			$('#select_zona').html(output);
			 			$('#select_zona').val($('#select_zona').attr('rel'));
				$('#select_zona').trigger('change.select2');
			 		}
			 	})
				$('.loading').hide();
				$('.esconder_cp').fadeIn('fast');
				$('.loading').hide();

			}
		});
	}
	/*  slider horarios */
	$('.horario').jRange({
	    from: 0,
	    to: 24,
	    step: 0.5,
	    format: '%s',
	    width: 400,
	    snap: true,
	    isRange : true,
	    theme  :"theme-blue"
	});


	$('#apap_select_proyecto').change(function(){
		if($(this).val()==8){
			//alert('bancarios')
		}
	});

	$('#id_tipo_llamada_1').change(function(){
		if($(this).val()=='Llamada Válida'){
			$('.esconder_llamada_no_valida').show();
		}else{
			$('.esconder_llamada_no_valida').hide();
		}
	});
	$('#a_acuerdo').change(function(){
		if($(this).val()=='3'){
			$('.mostrar_beneficio').show();
			$('.a_quien_aplica').show();
			$('.a_quien_aplica select').attr('required','required');
		}else{
			$('.mostrar_beneficio').hide();
			$('.a_quien_aplica select').attr('required','');
		}
		if($(this).val()=='4'){
			$('.mostrar_reembolso').show();
			$('.a_quien_aplica').show();
			$('.a_quien_aplica select').attr('required','required');
		}else{
			$('.mostrar_reembolso').hide();
			$('.a_quien_aplica select').attr('required','');
		}
		if($(this).val()!='4' && $(this).val()!='3'){
			$('.a_quien_aplica').hide();
		}
	});
});
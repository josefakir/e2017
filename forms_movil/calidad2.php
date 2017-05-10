<?php
include("../auth.php");
?>
<!DOCTYPE html>
<html>
<head>
	<!-- Required meta tags-->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<!-- Your app title -->
	<title>Ruta de calidad - Etapa 2</title>
	<link rel="stylesheet" href="css/framework7.ios.min.css">
	<link rel="stylesheet" href="css/framework7.ios.colors.min.css">
	<link rel="stylesheet" href="css/my-app.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
	<script>
		function success(pos) {
 	 		var crd = pos.coords;
			console.log(crd);
			$('#latitud').val(crd.latitude);
			$('#longitud').val(crd.longitude);
		}
		if(navigator.geolocation) {
			posicion = navigator.geolocation.getCurrentPosition(success);
       	}
		$(document).ready(function(){
			$('#select1').change(function(){
				if($(this).val()=="Sí"){
					$('.abre_s1_no').addClass('disabled');
					$('.abre_s1_si').removeClass('disabled');
					$('.abre_s1_no input[type=text]').val('');
				}else{
					$('.abre_s1_si').addClass('disabled');
					$('.abre_s1_no').removeClass('disabled');
				}
			});
			$('#select2').change(function(){
				if($(this).val()=="Sí"){
					$('.abre_s2').addClass('disabled');
					$('.abre_s2 input[type=text]').val('');
				}else{
					$('.abre_s2').removeClass('disabled');
				}
			});
			$('#select3').change(function(){
				if($(this).val()=="Sí"){
					$('.abre_s3_no').addClass('disabled');
					$('.abre_s3_si').removeClass('disabled');
					$('.abre_s3_no input[type=text]').val('');
				}else{
					$('.abre_s3_si').addClass('disabled');
					$('.abre_s3_no').removeClass('disabled');
				}
			});
			$('#select4').change(function(){
				if($(this).val()=="Sí"){
					$('.abre_s4_no').addClass('disabled');
					$('.abre_s4_si').removeClass('disabled');
					$('.abre_s4_no input[type=text]').val('');
				}else{
					$('.abre_s4_si').addClass('disabled');
					$('.abre_s4_no').removeClass('disabled');
				}
			});
			$('#select5').change(function(){
				if($(this).val()=="BBVA"){
					$('.abre_s5_bancomer').removeClass('disabled');
				}else{
					$('.abre_s5_bancomer').addClass('disabled');
					$('.abre_s6').addClass('disabled');
					$('.abre_s6 input[type=text]').val('');
				}
			});
			$('#select6').change(function(){
				if($(this).val()=="Sí"){
					$('.abre_s6').removeClass('disabled');
				}else{
					$('.abre_s6').addClass('disabled');
					$('.abre_s6 input[type=text]').val('');
				}
			});
		})
	</script>
</head>
<body>
	<div class="statusbar-overlay"></div>
	<div class="panel-overlay"></div>
	<div class="views">
		<div class="view view-main">
			<div class="navbar">
				
				<div class="navbar-inner">
					<div class="left">
						<a href="../rutas-de-calidad.php" class="back link external">
							<i class="icon icon-back" style="color: #fff"></i>
						</a>
					</div>
					<div class="center sliding">Ruta de calidad - Etapa 2</div>
				</div>
			</div>
			<div class="pages navbar-through toolbar-through">
				<div data-page="index" class="page">
					<div class="page-content">
						<div class="list-block">
							<ul>
								<form action="../api/insert/etapa2" method="post">
									<li>
										<label class="item-content">¿El gerente o encargado que atiende conoce el programa?</label>
										<div class="item-content">
											<div class="item-media"><i class="fa fa-building" aria-hidden="true"></i></div>
											<div class="item-inner">
												<div class="item-input">
													<select id="select1" name="encargado_conoce">
														<option>Seleccione</option>
														<option value="Sí">Sí</option>
														<option value="No">No</option>
													</select>
												</div>
											</div>
										</div>
									</li>
									<li class="disabled abre_s1_no">
										<div class="item-content">
											<div class="item-media">Por qué?</div>
											<div class="item-inner">
												<div class="item-input">
													<input type="text" placeholder="" name="porque_no_conoce" >
												</div>
											</div>
										</div>
									</li>
									<li class="disabled abre_s1_si"><a href="#" class="item-link smart-select">
										<!-- "multiple" attribute for multiple select-->
										<select name="cual_conoce[]" multiple>
											<option value="honda">Desclub</option>
											<option value="lexus">Vida Bancomer</option>
											<option value="mazda">Otra</option>
											<option value="nissan">Otra 2</option>
										</select>
										<div class="item-content">
											<div class="item-inner">
												<div class="item-title">Qué tarjetas conoce del programa?</div>
											</div>
										</div></a>
									</li>
									<li>
										<label class="item-content">¿Les da a conocer el programa desclub a todos los empleados?</label>
										<div class="item-content">
											<div class="item-media"><i class="fa fa-building" aria-hidden="true"></i></div>
											<div class="item-inner">
												<div class="item-input">
													<select id="select2" name="da_a_conocer">
														<option>Seleccione</option>
														<option value="No">No</option>
														<option value="Sí">Sí</option>
													</select>
												</div>
											</div>
										</div>
									</li>
									<li class="disabled abre_s2">
										<div class="item-content">
											<div class="item-media">Por qué?</div>
											<div class="item-inner">
												<div class="item-input">
													<input type="text" placeholder="" name="porque_no_da_a_conocer" >
												</div>
											</div>
										</div>
									</li>
									<li>
										<label class="item-content">¿Cuantas tarjetas DescluB recibe al mes?</label>
										<div class="item-content">
											<div class="item-media"><i class="fa fa-building" aria-hidden="true"></i></div>
											<div class="item-inner">
												<div class="item-input">
													<select name="cuantas_tarjetas">
														<option>Seleccione</option>
														<option value="5-10">5-10</option>
														<option value="10-20">10-20</option>
														<option value="20-30">20-30</option>
														<option value="30-40">30-40</option>
														<option value="40-50">40-50</option>
														<option value="Más de 50">Más de 50</option>
													</select>
												</div>
											</div>
										</div>
									</li>
									<li>
										<label class="item-content">¿Proporcionaste material POP?</label>
										<div class="item-content">
											<div class="item-media"><i class="fa fa-building" aria-hidden="true"></i></div>
											<div class="item-inner">
												<div class="item-input">
													<select id="select3" name="proporciona_pop">
														<option>Seleccione</option>
														<option value="Sí">Sí</option>
														<option value="No">No</option>
													</select>
												</div>
											</div>
										</div>
									</li>
									<li class="disabled abre_s3_no">
										<div class="item-content">
											<div class="item-media">Por qué?</div>
											<div class="item-inner">
												<div class="item-input">
													<input type="text" placeholder="¿Por qué?" name="porque_no_proporciona_pop">
												</div>
											</div>
										</div>
									</li>
									<li class="disabled abre_s3_si">
										<table style="width: 100%">
											<tr>
												<td style="width: 33%"><div class="item-content">
													<div class="item-inner">
														<div class="item-title label">Acrilicos</div>
														<div class="item-input">
															<label class="label-switch">
																<input type="checkbox">
																<div class="checkbox"></div>
															</label>
														</div>
													</div>
												</td>
												<td>
													<div class="item-content">
														<div class="item-media"><i class="fa fa-building" aria-hidden="true"></i></div>
														<div class="item-inner">
															<div class="item-input">
																<select name="no_acrilicos">
																	<option value="">Seleccione</option>
																	<option value="1">1</option>
																	<option value="2">2</option>
																	<option value="3">3</option>
																	<option value="4">4</option>
																	<option value="5">5</option>
																	<option value="6">6</option>
																	<option value="7">7</option>
																	<option value="8">8</option>
																	<option value="9">9</option>
																	<option value="10">10</option>
																</select>
															</div>
														</div>
													</div>
												</td>
												<td>
													<div class="item-inner">
														<div class="item-title label">¿Se colocó?</div>
														<div class="item-input">
															<label class="label-switch">
																<input type="checkbox" name="coloco_acrilicos" value="true">
																<div class="checkbox"></div>
															</label>
														</div>
													</div>
												</td>
											</tr>
											<tr>
												<td style="width: 33%"><div class="item-content">
													<div class="item-inner">
														<div class="item-title label">Calcomanías</div>
														<div class="item-input">
															<label class="label-switch">
																<input type="checkbox">
																<div class="checkbox"></div>
															</label>
														</div>
													</div>
												</td>
												<td>
													<div class="item-content">
														<div class="item-media"><i class="fa fa-building" aria-hidden="true"></i></div>
														<div class="item-inner">
															<div class="item-input">
																<select name="no_calcomanias">
																	<option value="">Seleccione</option>
																	<option value="1">1</option>
																	<option value="2">2</option>
																	<option value="3">3</option>
																	<option value="4">4</option>
																	<option value="5">5</option>
																	<option value="6">6</option>
																	<option value="7">7</option>
																	<option value="8">8</option>
																	<option value="9">9</option>
																	<option value="10">10</option>
																</select>
															</div>
														</div>
													</div>
												</td>
												<td>
													<div class="item-inner">
														<div class="item-title label">¿Se colocó?</div>
														<div class="item-input">
															<label class="label-switch">
																<input type="checkbox" value="true" name="coloco_calcomanias">
																<div class="checkbox"></div>
															</label>
														</div>
													</div>
												</td>
											</tr>
											<tr>
												<td style="width: 33%"><div class="item-content">
													<div class="item-inner">
														<div class="item-title label">Com. Desclub</div>
														<div class="item-input">
															<label class="label-switch">
																<input type="checkbox">
																<div class="checkbox"></div>
															</label>
														</div>
													</div>
												</td>
												<td>
													<div class="item-content">
														<div class="item-media"><i class="fa fa-building" aria-hidden="true"></i></div>
														<div class="item-inner">
															<div class="item-input">
																<select name="no_com_desclub">
																	<option value="">Seleccione</option>
																	<option value="1">1</option>
																	<option value="2">2</option>
																	<option value="3">3</option>
																	<option value="4">4</option>
																	<option value="5">5</option>
																	<option value="6">6</option>
																	<option value="7">7</option>
																	<option value="8">8</option>
																	<option value="9">9</option>
																	<option value="10">10</option>
																</select>
															</div>
														</div>
													</div>
												</td>
												<td>
													<div class="item-inner">
														<div class="item-title label">¿Se colocó?</div>
														<div class="item-input">
															<label class="label-switch">
																<input type="checkbox" value="true" name="coloco_com_desclub">
																<div class="checkbox"></div>
															</label>
														</div>
													</div>
												</td>
											</tr>
											<tr>
												<td style="width: 33%"><div class="item-content">
													<div class="item-inner">
														<div class="item-title label">Com. BBVA</div>
														<div class="item-input">
															<label class="label-switch">
																<input type="checkbox">
																<div class="checkbox"></div>
															</label>
														</div>
													</div>
												</td>
												<td>
													<div class="item-content">
														<div class="item-media"><i class="fa fa-building" aria-hidden="true"></i></div>
														<div class="item-inner">
															<div class="item-input">
																<select name="no_com_bbva">
																	<option value="">Seleccione</option>
																	<option value="1">1</option>
																	<option value="2">2</option>
																	<option value="3">3</option>
																	<option value="4">4</option>
																	<option value="5">5</option>
																	<option value="6">6</option>
																	<option value="7">7</option>
																	<option value="8">8</option>
																	<option value="9">9</option>
																	<option value="10">10</option>
																</select>
															</div>
														</div>
													</div>
												</td>
												<td>
													<div class="item-inner">
														<div class="item-title label">¿Se colocó?</div>
														<div class="item-input">
															<label class="label-switch">
																<input type="checkbox" value="true" name="coloco_com_bbva">
																<div class="checkbox"></div>
															</label>
														</div>
													</div>
												</td>
											</tr>
											<tr>
												<td style="width: 33%"><div class="item-content">
													<div class="item-inner">
														<div class="item-title label">Reloj</div>
														<div class="item-input">
															<label class="label-switch">
																<input type="checkbox">
																<div class="checkbox"></div>
															</label>
														</div>
													</div>
												</td>
												<td>
													<div class="item-content">
														<div class="item-media"><i class="fa fa-building" aria-hidden="true"></i></div>
														<div class="item-inner">
															<div class="item-input">
																<select name="no_reloj">
																	<option value="">Seleccione</option>
																	<option value="1">1</option>
																	<option value="2">2</option>
																	<option value="3">3</option>
																	<option value="4">4</option>
																	<option value="5">5</option>
																	<option value="6">6</option>
																	<option value="7">7</option>
																	<option value="8">8</option>
																	<option value="9">9</option>
																	<option value="10">10</option>
																</select>
															</div>
														</div>
													</div>
												</td>
												<td>
													<div class="item-inner">
														<div class="item-title label">¿Se colocó?</div>
														<div class="item-input">
															<label class="label-switch">
																<input type="checkbox" value="true" name="coloco_reloj">
																<div class="checkbox"></div>
															</label>
														</div>
													</div>
												</td>
											</tr>
										</table>
									</li>
									<li>
										<label class="item-content">¿Capacitaste al personal?</label>
										<div class="item-content">
											<div class="item-media"><i class="fa fa-building" aria-hidden="true"></i></div>
											<div class="item-inner">
												<div class="item-input">
													<select id="select4" name="capacitaste">
														<option>Seleccione</option>
														<option value="Sí">Sí</option>
														<option value="No">No</option>
													</select>
												</div>
											</div>
										</div>
									</li>
									<li class="disabled abre_s4_no">
										<div class="item-content">
											<div class="item-media">Por qué?</div>
											<div class="item-inner">
												<div class="item-input">
													<input type="text" placeholder="¿Por qué?" name="porque_no_capacitaste">
												</div>
											</div>
										</div>
									</li>
									<li class="disabled abre_s4_si"><a href="#" class="item-link smart-select">
										<!-- "multiple" attribute for multiple select-->
										<select name="proyectos_capacitaste[]" multiple>
											<option value="honda">Desclub</option>
											<option value="lexus">Vida Bancomer</option>
											<option value="mazda">Otra</option>
											<option value="nissan">Otra 2</option>
										</select>
										<div class="item-content">
											<div class="item-inner">
												<div class="item-title">En qué proyectos fueron capacitados?</div>
											</div>
										</div></a>
									</li>
									<li>
										<label class="item-content">Banco adquiriente</label>
										<div class="item-content">
											<div class="item-media"><i class="fa fa-building" aria-hidden="true"></i></div>
											<div class="item-inner">
												<div class="item-input">
													<select id="select5" name="banco_adquiriente">
														<option>Seleccione</option>
														<option value="Banamex">Banamex</option>
														<option value="Banco del Bajío">Banco del bajío</option>
														<option value="Banorte">Banorte</option>
														<option value="BBVA">BBVA</option>
														<option value="HSBC">HSBC</option>
														<option value="Inbursa">Inbursa</option>
														<option value="IXE">IXE</option>
														<option value="Mifel">Mifel</option>
														<option value="Multiva">Multiva</option>
														<option value="Santander">Santander</option>
														<option value="Scotiabank">Scotiabank</option>
													</select>
												</div>
											</div>
										</div>
									</li>
									<li class="disabled abre_s5_bancomer">
										<label class="item-content">¿Proporciona número de afiliacion?</label>
										<div class="item-content">
											<div class="item-media"><i class="fa fa-building" aria-hidden="true"></i></div>
											<div class="item-inner">
												<div class="item-input">
													<select id="select6" name="proporciona_afiliacion">
														<option>Seleccione</option>
														<option value="Sí">Sí</option>
														<option value="No">No</option>
													</select>
												</div>
											</div>
										</div>
									</li>
									<li class="disabled abre_s6">
										<div class="item-content">
											<div class="item-media">Número de afiliación</div>
											<div class="item-inner">
												<div class="item-input">
													<input type="text" placeholder="Número de afiliacion" name="no_afiliacion">
												</div>
											</div>
										</div>
									</li>
									<li>
										<div class="list-block accordion-list">
										    <ul>
										        <li class="accordion-item">
										            <a href="" class="item-link item-content">
										                <div class="item-inner">
										                    <div class="item-title">Contacto 1</div>
										                </div>
										            </a> 
										            <div class="accordion-item-content">
														<ul>
															<li>
																<div class="item-content">
																	<div class="item-media">Nombre</div>
																	<div class="item-inner">
																		<div class="item-input">
																			<input type="text" placeholder="Nombre"  name="c1_nombre">
																		</div>
																	</div>
																</div>
															</li>
															<li>
																<label class="item-content">¿Selecciona el puesto?</label>
																<div class="item-content">
																	<div class="item-media"><i class="fa fa-building" aria-hidden="true"></i></div>
																	<div class="item-inner">
																		<div class="item-input">
																			<select name="c1_puesto">
																				<option>Seleccione</option>
																				<option value="No">Gerente - Propietario -Director</option>
																				<option value="Sí">Encargado - Administrador - Supervisor - Capitán de meseros</option>
																				<option value="Vendedor - Mesero">Vendedor - Mesero</option>
																				<option value="Cajero">Cajero</option>
																				<option value="Recepcionista">Recepcionista</option>
																			</select>
																		</div>
																	</div>
																</div>
															</li>
															<li>
																<div class="item-content">
																	<div class="item-media">Teléfono</div>
																	<div class="item-inner">
																		<div class="item-input">
																			<input type="text" placeholder="Teléfono" name="c1_tel">
																		</div>
																	</div>
																</div>
															</li>
															<li>
																<div class="item-content">
																	<div class="item-media">Correo electrónico</div>
																	<div class="item-inner">
																		<div class="item-input">
																			<input type="text" placeholder="Correo electrónico" name="c1_correo">
																		</div>
																	</div>
																</div>
															</li>
															<li>
																<label class="item-content">Forma de contacto</label>
																<div class="item-content">
																	<div class="item-media"><i class="fa fa-building" aria-hidden="true"></i></div>
																	<div class="item-inner">
																		<div class="item-input">
																			<select name="c1_forma_contacto">
																				<option>Seleccione</option>
																				<option value="">SMS</option>
																				<option value="">EMAIL</option>
																				<option value="">CUPONES IMPRIMIBLES VIA EMAIL</option>
																				<option value="">OTRO</option>
																			</select>
																		</div>
																	</div>
																</div>
															</li>
														</ul>
										            </div>
										        </li>
										        <li class="accordion-item">
										            <a href="" class="item-link item-content">
										                <div class="item-inner">
										                    <div class="item-title">Contacto 2</div>
										                </div>
										            </a> 
										            <div class="accordion-item-content">
										            	<ul>
															<li>
																<div class="item-content">
																	<div class="item-media">Nombre</div>
																	<div class="item-inner">
																		<div class="item-input">
																			<input type="text" placeholder="Nombre"  name="c2_nombre">
																		</div>
																	</div>
																</div>
															</li>
															<li>
																<label class="item-content">¿Selecciona el puesto?</label>
																<div class="item-content">
																	<div class="item-media"><i class="fa fa-building" aria-hidden="true"></i></div>
																	<div class="item-inner">
																		<div class="item-input">
																			<select name="c2_puesto">
																				<option>Seleccione</option>
																				<option value="No">Gerente - Propietario -Director</option>
																				<option value="Sí">Encargado - Administrador - Supervisor - Capitán de meseros</option>
																				<option value="Vendedor - Mesero">Vendedor - Mesero</option>
																				<option value="Cajero">Cajero</option>
																				<option value="Recepcionista">Recepcionista</option>
																			</select>
																		</div>
																	</div>
																</div>
															</li>
															<li>
																<div class="item-content">
																	<div class="item-media">Teléfono</div>
																	<div class="item-inner">
																		<div class="item-input">
																			<input type="text" placeholder="Teléfono" name="c2_tel">
																		</div>
																	</div>
																</div>
															</li>
															<li>
																<div class="item-content">
																	<div class="item-media">Correo electrónico</div>
																	<div class="item-inner">
																		<div class="item-input">
																			<input type="text" placeholder="Correo electrónico" name="c2_correo">
																		</div>
																	</div>
																</div>
															</li>
															<li>
																<label class="item-content">Forma de contacto</label>
																<div class="item-content">
																	<div class="item-media"><i class="fa fa-building" aria-hidden="true"></i></div>
																	<div class="item-inner">
																		<div class="item-input">
																			<select name="c2_forma_contacto">
																				<option>Seleccione</option>
																				<option value="">SMS</option>
																				<option value="">EMAIL</option>
																				<option value="">CUPONES IMPRIMIBLES VIA EMAIL</option>
																				<option value="">OTRO</option>
																			</select>
																		</div>
																	</div>
																</div>
															</li>
														</ul>
										            </div>
										        </li>
										        <li class="accordion-item">
										            <a href="" class="item-link item-content">
										                <div class="item-inner">
										                    <div class="item-title">Contacto 3</div>
										                </div>
										            </a> 
										            <div class="accordion-item-content">
														<ul>
															<li>
																<div class="item-content">
																	<div class="item-media">Nombre</div>
																	<div class="item-inner">
																		<div class="item-input">
																			<input type="text" placeholder="Nombre"  name="c3_nombre">
																		</div>
																	</div>
																</div>
															</li>
															<li>
																<label class="item-content">¿Selecciona el puesto?</label>
																<div class="item-content">
																	<div class="item-media"><i class="fa fa-building" aria-hidden="true"></i></div>
																	<div class="item-inner">
																		<div class="item-input">
																			<select name="c3_puesto">
																				<option>Seleccione</option>
																				<option value="No">Gerente - Propietario -Director</option>
																				<option value="Sí">Encargado - Administrador - Supervisor - Capitán de meseros</option>
																				<option value="Vendedor - Mesero">Vendedor - Mesero</option>
																				<option value="Cajero">Cajero</option>
																				<option value="Recepcionista">Recepcionista</option>
																			</select>
																		</div>
																	</div>
																</div>
															</li>
															<li>
																<div class="item-content">
																	<div class="item-media">Teléfono</div>
																	<div class="item-inner">
																		<div class="item-input">
																			<input type="text" placeholder="Teléfono" name="c3_tel">
																		</div>
																	</div>
																</div>
															</li>
															<li>
																<div class="item-content">
																	<div class="item-media">Correo electrónico</div>
																	<div class="item-inner">
																		<div class="item-input">
																			<input type="text" placeholder="Correo electrónico" name="c3_correo">
																		</div>
																	</div>
																</div>
															</li>
															<li>
																<label class="item-content">Forma de contacto</label>
																<div class="item-content">
																	<div class="item-media"><i class="fa fa-building" aria-hidden="true"></i></div>
																	<div class="item-inner">
																		<div class="item-input">
																			<select name="c3_forma_contacto">
																				<option>Seleccione</option>
																				<option value="">SMS</option>
																				<option value="">EMAIL</option>
																				<option value="">CUPONES IMPRIMIBLES VIA EMAIL</option>
																				<option value="">OTRO</option>
																			</select>
																		</div>
																	</div>
																</div>
															</li>
														</ul>
										            </div>
										        </li>
										    </ul>
										</div>

									</li>
									<li>
										<div class="item-content">
								        <div class="item-media">Aviso de privacidad</div>
								        <div class="item-inner">
								          <div class="item-input">
								            <label class="label-switch">
								              <input type="checkbox">
								              <div class="checkbox"></div>
								            </label>
								          </div>
								        </div>
								      </div>
								    </li>
									</li>
									<li class="content-block">Le recordamos que sus datos proporcionados están protegidos y son utilizados únicamente con la finalidad de brindarle un buen servicio y con fines estadísticos. Puede consultar el detalle de nuestro aviso de privacidad en la página www.gurupomedios.com. Acepta el aviso de privacidad</li>
								<!--
								
							-->
							<input type="hidden" name="id_ruta" value="<?php echo $_GET['id'] ?>">
							<input type="hidden" name="latitud" id="latitud">
								<input type="hidden" name="longitud" id="longitud">
							<li style="    height: 40px;"><input type="submit" class="button button-round active" style="width: 80%; margin: 10px auto" value="Guardar"></li>
						</form>
						<li></li>
					</ul>

				</div>

			</div>
		</div>
	</div>
	<div class="toolbar">
		<div class="toolbar-inner">
			<img src="img/logo.png" alt="" style="height: 80%;margin: 0 auto;">
		</div>
	</div>
</div>
</div>
<script type="text/javascript" src="js/framework7.min.js"></script>
<script type="text/javascript" src="js/my-app.js"></script>
</body>
</html>       
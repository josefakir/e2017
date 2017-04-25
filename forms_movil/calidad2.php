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
		$(document).ready(function(){
			
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
								<form action="../api/insert/etapa1" method="post">
									<li>
										<label class="item-content">¿El gerente o encargado que atiende conoce el programa?</label>
										<div class="item-content">
											<div class="item-media"><i class="fa fa-building" aria-hidden="true"></i></div>
											<div class="item-inner">
												<div class="item-input">
													<select>
														<option>Seleccione</option>
														<option value="No">No</option>
														<option value="Sí">Sí</option>
													</select>
												</div>
											</div>
										</div>
									</li>
									<li><a href="#" class="item-link smart-select">
										<!-- "multiple" attribute for multiple select-->
										<select name="cual_calc_desc[]" multiple>
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
													<select>
														<option>Seleccione</option>
														<option value="No">No</option>
														<option value="Sí">Sí</option>
													</select>
												</div>
											</div>
										</div>
									</li>
									<li>
										<div class="item-content">
											<div class="item-media">Por qué?</div>
											<div class="item-inner">
												<div class="item-input">
													<input type="text" placeholder="Otras compañías" id="otrascompanias" name="cual_calc_otras">
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
													<select>
														<option>Seleccione</option>
														<option value="No">5-10</option>
														<option value="No">10-20</option>
														<option value="No">20-30</option>
														<option value="No">30-40</option>
														<option value="No">40-50</option>
														<option value="No">Más de 50</option>
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
													<select>
														<option>Seleccione</option>
														<option value="No">No</option>
														<option value="Sí">Sí</option>
													</select>
												</div>
											</div>
										</div>
									</li>
									<li>
										<div class="item-content">
											<div class="item-media">Por qué?</div>
											<div class="item-inner">
												<div class="item-input">
													<input type="text" placeholder="¿Por qué?" id="otrascompanias" name="cual_calc_otras">
												</div>
											</div>
										</div>
									</li>
									<li>
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
																<select>
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
																<input type="checkbox">
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
																<select>
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
																<input type="checkbox">
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
																<select>
																	<option value="">Com. BBVA</option>
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
																<input type="checkbox">
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
																<select>
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
																<input type="checkbox">
																<div class="checkbox"></div>
															</label>
														</div>
													</div>
												</td>
											</tr>
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
																<select>
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
																<input type="checkbox">
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
													<select>
														<option>Seleccione</option>
														<option value="No">No</option>
														<option value="Sí">Sí</option>
													</select>
												</div>
											</div>
										</div>
									</li>
									<li>
										<div class="item-content">
											<div class="item-media">Por qué?</div>
											<div class="item-inner">
												<div class="item-input">
													<input type="text" placeholder="¿Por qué?" id="otrascompanias" name="cual_calc_otras">
												</div>
											</div>
										</div>
									</li>
									<li><a href="#" class="item-link smart-select">
										<!-- "multiple" attribute for multiple select-->
										<select name="cual_calc_desc[]" multiple>
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
													<select>
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
									<li>
										<label class="item-content">¿Proporciona número de afiliacion?</label>
										<div class="item-content">
											<div class="item-media"><i class="fa fa-building" aria-hidden="true"></i></div>
											<div class="item-inner">
												<div class="item-input">
													<select>
														<option>Seleccione</option>
														<option value="No">No</option>
														<option value="Sí">Sí</option>
													</select>
												</div>
											</div>
										</div>
									</li>
									<li>
										<div class="item-content">
											<div class="item-media">Número de afiliación</div>
											<div class="item-inner">
												<div class="item-input">
													<input type="text" placeholder="Número de afiliacion" id="otrascompanias" name="cual_calc_otras">
												</div>
											</div>
										</div>
									</li>
								<!--
								
							-->
							<input type="hidden" name="id_ruta" value="<?php echo $_GET['id'] ?>">
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
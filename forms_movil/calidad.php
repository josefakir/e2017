<!DOCTYPE html>
<html>
<head>
	<!-- Required meta tags-->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<!-- Your app title -->
	<title>Ruta de calidad - Etapa 1</title>
	<link rel="stylesheet" href="css/framework7.ios.min.css">
	<link rel="stylesheet" href="css/framework7.ios.colors.min.css">
	<link rel="stylesheet" href="css/my-app.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div class="statusbar-overlay"></div>
	<div class="panel-overlay"></div>
	<div class="views">
		<div class="view view-main">
			<div class="navbar">
				<div class="navbar-inner">
					<div class="center sliding">Ruta de calidad - Etapa 1</div>
				</div>
			</div>
			<div class="pages navbar-through toolbar-through">
				<div data-page="index" class="page">
					<div class="page-content">
						<div class="list-block">
							<ul>
								<li>
									<div class="item-content">
										<div class="item-media"><i class="fa fa-money" aria-hidden="true"></i></div>
										<div class="item-inner">
											<div class="item-input">
												<input type="number" placeholder="Monto de pasajes">
											</div>
										</div>
									</div>
								</li>
								<li><a href="#" class="item-link smart-select">
									<!-- "multiple" attribute for multiple select-->
									<select name="calcomania" multiple>
										<option value="Camión">Camión</option>
										<option value="Metro">Metro</option>
										<option value="Otro">Otro</option>
									</select>
									<div class="item-content">
										<div class="item-inner">
											<div class="item-title">Transporte</div>
										</div>
									</div></a>
								</li>
								<li><h5 class="item-content">1. Establecimiento:</h5></li>
								<li>
									<!--<label class="item-content">1. En caso de encontrar el establecimiento cerrado, indicar el motivo:</label>-->
									<div class="item-content">
										<div class="item-media"><i class="fa fa-building" aria-hidden="true"></i></div>
										<div class="item-inner">
											<div class="item-input">
												<select>
													<option>Seleccione</option>
													<option>Abierto</option>
													<option>Cerrado</option>
													<option>Clausurado</option>
													<option>Domicilio incorrecto</option>
													<option>Fuera Horario / No abren</option>
													<option>No Existe</option>
													<option>Remodelación</option>
												</select>
											</div>
										</div>
									</div>
								</li>
								<li><h5 class="item-content">2. Inspección Visual:</h5></li>
								<li>
									<label class="item-content">¿Cuenta con alguna calcomanía de Desclub?</label>
									<div class="item-content">
										<div class="item-media"><i class="fa fa-building" aria-hidden="true"></i></div>
										<div class="item-inner">
											<div class="item-input">
												<select>
													<option>Seleccione</option>
													<option value="">No</option>
													<option value="">Sí</option>
												</select>
											</div>
										</div>
									</div>
								</li>
								<li><a href="#" class="item-link smart-select">
									<!-- "multiple" attribute for multiple select-->
									<select name="calcomania" multiple>
										<option value="honda">Desclub</option>
										<option value="lexus">Vida Bancomer</option>
										<option value="mazda">Otra</option>
										<option value="nissan">Otra 2</option>
									</select>
									<div class="item-content">
										<div class="item-inner">
											<div class="item-title">¿Cuál?</div>
										</div>
									</div></a>
								</li>
								<li>
									<label class="item-content">¿Cuenta con calcomanía de otras compañías?</label>
									<div class="item-content">
										<div class="item-media"><i class="fa fa-building" aria-hidden="true"></i></div>
										<div class="item-inner">
											<div class="item-input">
												<select>
													<option>Seleccione</option>
													<option value="">No</option>
													<option value="">Sí</option>
												</select>
											</div>
										</div>
									</div>
								</li>
								<li>
									<div class="item-content">
										<div class="item-media">¿Cual?</div>
										<div class="item-inner">
											<div class="item-input">
												<input type="number" placeholder="Otras compañías">
											</div>
										</div>
									</div>
								</li>
								<li><h5 class="item-content">3. Atención en piso:</h5></li>
								<li>
									<label class="item-content">¿La primera persona que atiende conoce el programa?</label>
									<div class="item-content">
										<div class="item-media"><i class="fa fa-building" aria-hidden="true"></i></div>
										<div class="item-inner">
											<div class="item-input">
												<select>
													<option>Seleccione</option>
													<option value="">No</option>
													<option value="">Sí</option>
												</select>
											</div>
										</div>
									</div>
								</li>
								<li><a href="#" class="item-link smart-select">
									<!-- "multiple" attribute for multiple select-->
									<select name="calcomania" multiple>
										<option value="honda">Desclub</option>
										<option value="lexus">Vida Bancomer</option>
										<option value="mazda">Otra</option>
										<option value="nissan">Otra 2</option>
									</select>
									<div class="item-content">
										<div class="item-inner">
											<div class="item-title">¿Cuáles?</div>
										</div>
									</div></a>
								</li>
								<li><a href="#" class="button button-round active" style="width: 80%; margin: 10px auto">Guardar </a></li>
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
	<script src="../js/"></script>
	<script type="text/javascript" src="js/framework7.min.js"></script>
	<script type="text/javascript" src="js/my-app.js"></script>
</body>
</html>       
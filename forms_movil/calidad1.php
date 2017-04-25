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
	<title>Ruta de calidad - Etapa 1</title>
	<link rel="stylesheet" href="css/framework7.ios.min.css">
	<link rel="stylesheet" href="css/framework7.ios.colors.min.css">
	<link rel="stylesheet" href="css/my-app.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
	<script>
		$(document).ready(function(){
			$('#select1').change(function(){
				if($(this).val()=='Abierto'){
					$('.abre_s1').removeClass('disabled');
				}else{
					$('.abre_s1').addClass('disabled');
					$('.abre_s2').addClass('disabled');
					$('.abre_s3').addClass('disabled');
					$('.abre_s4').addClass('disabled');
					$$(".smart-select .item-after").html("");
					$('.s2').val('Seleccione');
					$('.s3').val('Seleccione');
					$('.s4').val('Seleccione');
					$('#otrascompanias').val('');
				}
			});
			$('#select2').change(function(){
				if($(this).val()=='Sí'){
					$('.abre_s2').removeClass('disabled');
				}else{
					$('.abre_s2').addClass('disabled');
				}
			});
			$('#select3').change(function(){
				if($(this).val()=='Sí'){
					$('.abre_s3').removeClass('disabled');
				}else{
					$('.abre_s3').addClass('disabled');
				}
			});
			$('#select4').change(function(){
				if($(this).val()=='Sí'){
					$('.abre_s4').removeClass('disabled');
				}else{
					$('.abre_s4').addClass('disabled');
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
					<div class="center sliding">Ruta de calidad - Etapa 1</div>
				</div>
			</div>
			<div class="pages navbar-through toolbar-through">
				<div data-page="index" class="page">
					<div class="page-content">
						<div class="list-block">
							<ul>
								<form action="../api/insert/etapa1" method="post">
								<li>
									<div class="item-content">
										<div class="item-media"><i class="fa fa-money" aria-hidden="true"></i></div>
										<div class="item-inner">
											<div class="item-input">
												<input type="number" placeholder="Monto de pasajes" name="pasaje" step="0.01">
											</div>
										</div>
									</div>
								</li>
								<li><a href="#" class="item-link smart-select">
									<!-- "multiple" attribute for multiple select-->
									<select name="transportes[]" multiple>
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
												<select name="status_establecimiento" id="select1">
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
								<li class="disabled abre_s1"><h5 class="item-content">2. Inspección Visual:</h5></li>
								<li class="disabled abre_s1">
									<label class="item-content">¿Cuenta con alguna calcomanía de Desclub?</label>
									<div class="item-content">
										<div class="item-media"><i class="fa fa-building" aria-hidden="true"></i></div>
										<div class="item-inner">
											<div class="item-input">
												<select id="select2" name="calc_desclub">
													<option>Seleccione</option>
													<option value="No">No</option>
													<option value="Sí">Sí</option>
												</select>
											</div>
										</div>
									</div>
								</li>
								<li class="disabled abre_s2"><a href="#" class="item-link smart-select">
									<!-- "multiple" attribute for multiple select-->
									<select name="cual_calc_desc[]" multiple>
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
								<li class="disabled abre_s1">
									<label class="item-content">¿Cuenta con calcomanía de otras compañías?</label>
									<div class="item-content">
										<div class="item-media"><i class="fa fa-building" aria-hidden="true"></i></div>
										<div class="item-inner">
											<div class="item-input">
												<select id="select3" name="calc_otras">
													<option>Seleccione</option>
													<option value="No">No</option>
													<option value="Sí">Sí</option>
												</select>
											</div>
										</div>
									</div>
								</li>
								<li class="disabled abre_s3">
									<div class="item-content">
										<div class="item-media">¿Cual?</div>
										<div class="item-inner">
											<div class="item-input">
												<input type="text" placeholder="Otras compañías" id="otrascompanias" name="cual_calc_otras">
											</div>
										</div>
									</div>
								</li>
								<li class="disabled abre_s1"><h5 class="item-content">3. Atención en piso:</h5></li>
								<li class="disabled abre_s1">
									<label class="item-content">¿La primera persona que atiende conoce el programa?</label>
									<div class="item-content">
										<div class="item-media"><i class="fa fa-building" aria-hidden="true"></i></div>
										<div class="item-inner">
											<div class="item-input">
												<select id="select4" name="conoce_programa">
													<option>Seleccione</option>
													<option value="No">No</option>
													<option value="Sí">Sí</option>
												</select>
											</div>
										</div>
									</div>
								</li>
								<li class="disabled abre_s4"><a href="#" class="item-link smart-select">
									<!-- "multiple" attribute for multiple select-->
									<select name="cual_programa[]" multiple>
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
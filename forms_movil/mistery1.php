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
	<title>Ruta de mistery - Etapa 1</title>
	<link rel="stylesheet" href="css/framework7.ios.min.css">
	<link rel="stylesheet" href="css/framework7.ios.colors.min.css">
	<link rel="stylesheet" href="css/my-app.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
	<script>
		$(document).ready(function(){
			$('#select1').change(function(){
				if($(this).val()=='Sí'){
					$('.abre_s1').removeClass('disabled');
				}else{
					$('.abre_s1').addClass('disabled');
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
			      <a href="../rutas-de-mistery.php" class="back link external">
			        <i class="icon icon-back" style="color: #fff"></i>
			       </a>
			    </div>
					<div class="center sliding">Ruta de mistery - Etapa 1</div>
				</div>
			</div>
			<div class="pages navbar-through toolbar-through">
				<div data-page="index" class="page">
					<div class="page-content">
						<div class="list-block">
							<ul>
								<form action="../api/insert/mistery1" method="post" enctype="multipart/form-data">
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
								<li><a href="#" class="item-link smart-select">
									<!-- "multiple" attribute for multiple select-->
									<select name="tarjetas_presentadas[]" multiple>
										<option value="DescluB">DescluB</option>
										<option value="Tarjeta Virtual">Tarjeta Virtual</option>
										<option value="Cupón">Cupón</option>
										<option value="Tarjeta Vida Bancomer">Tarjeta Vida Bancomer</option>
									</select>
									<div class="item-content">
										<div class="item-inner">
											<div class="item-title">Tarjeta presentada</div>
										</div>
									</div></a>
								</li>
								<li><h5 class="item-content">Inspección visual:</h5></li>
								<li>
									<label class="item-content">¿El establecimiento cuenta con alguna calcomanía de Desclub?</label>
									<div class="item-content">
										<div class="item-media"><i class="fa fa-building" aria-hidden="true"></i></div>
										<div class="item-inner">
											<div class="item-input">
												<select id="select1" name="calc_desclub">
													<option>Seleccione</option>
													<option value="No">No</option>
													<option value="Sí">Sí</option>
												</select>
											</div>
										</div>
									</div>
								</li>
								<li class="disabled abre_s1"><a href="#" class="item-link smart-select">
									<!-- "multiple" attribute for multiple select-->
									<select multiple name="cual_calc_desclub[]">
										<option value="DescluB">DescluB</option>
										<option value="Tarjeta Virtual">Tarjeta Virtual</option>
										<option value="Cupón">Cupón</option>
										<option value="Tarjeta Vida Bancomer">Tarjeta Vida Bancomer</option>
									</select>
									<div class="item-content">
										<div class="item-inner">
											<div class="item-title">¿Cuáles?</div>
										</div>
									</div></a>
								</li>
								<li>
									<label class="item-content">¿El establecimiento cuenta con material POP?</label>
									<div class="item-content">
										<div class="item-media"><i class="fa fa-building" aria-hidden="true"></i></div>
										<div class="item-inner">
											<div class="item-input">
												<select id="select2" name="material_pop">
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
									<select multiple name="cual_material_pop[]">
										<option value="">Acrílico</option>
										<option value="">Calcomanía</option>
										<option value="">Comunicado Desclub</option>
										<option value="">Comunicado E. Bancomer</option>
										<option value="">Reloj</option>
									</select>
									<div class="item-content">
										<div class="item-inner">
											<div class="item-title">¿Cuáles?</div>
										</div>
									</div></a>
								</li>
								<li>
									<label class="item-content">¿El establecimiento cuenta calcomanías de otras compañías?</label>
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
										<div class="item-media">¿Cuales y en dónde?</div>
										<div class="item-inner">
											<div class="item-input">
												<input type="text" placeholder="Otras compañías" name="cual_calc_otras">
											</div>
										</div>
									</div>
								</li>
								<li>
									<label class="item-content">¿Cómo calificarías el negocio de acuerdo a su imagen visual y ubicación?</label>
									<div class="item-content">
										<div class="item-media"><i class="fa fa-building" aria-hidden="true"></i></div>
										<div class="item-inner">
											<div class="item-input">
												<select name="calificacion">
													<option>Seleccione</option>
													<option value="Excelente">Excelente</option>
													<option value="Bueno">Bueno</option>
													<option value="Regular">Regular</option>
												</select>
											</div>
										</div>
									</div>
								</li>
								<li><h5 class="item-content">Atención en piso:</h5></li>
								<li>
									<label class="item-content">¿La persona que te atiende conoce el programa de descuentos?</label>
									<div class="item-content">
										<div class="item-media"><i class="fa fa-building" aria-hidden="true"></i></div>
										<div class="item-inner">
											<div class="item-input">
												<select name="conoce_programa">
													<option>Seleccione</option>
													<option value="No">No</option>
													<option value="Sí">Sí</option>
												</select>
											</div>
										</div>
									</div>
								</li>
								<li>
									<label class="item-content">Si te niega el descuento ¿Cuál es el principal arguneto para negarlo?</label>
									<div class="item-content">
										<div class="item-media"><i class="fa fa-building" aria-hidden="true"></i></div>
										<div class="item-inner">
											<div class="item-input">
												<select name="razon_negado">
													<option>Seleccione</option>
													<option value="">Desconoce el convenio</option>
													<option value="">Cambiaron de administración y desconoce el convenio</option>
													<option value="">El propietario o gerente no autorizó el descuento</option>
													<option value="">Otro</option>
												</select>
											</div>
										</div>
									</div>
								</li>
								<li>
									<label class="item-content">¿En caso de desconocerlo pregunta a un gerente o supervisor?</label>
									<div class="item-content">
										<div class="item-media"><i class="fa fa-building" aria-hidden="true"></i></div>
										<div class="item-inner">
											<div class="item-input">
												<select name="pregunta_gerente">
													<option>Seleccione</option>
													<option value="No">No</option>
													<option value="Sí">Sí</option>
												</select>
											</div>
										</div>
									</div>
								</li>
								<li>
									<label class="item-content">¿Le otorgaron el descuento pactado?</label>
									<div class="item-content">
										<div class="item-media"><i class="fa fa-building" aria-hidden="true"></i></div>
										<div class="item-inner">
											<div class="item-input">
												<select id="select4" name="otorgaron_descuento">
													<option>Seleccione</option>
													<option value="No">No</option>
													<option value="Sí">Sí</option>
												</select>
											</div>
										</div>
									</div>
								</li>
								<li class="disabled abre_s4">
									<div class="item-content">
										<div class="item-media">EFECTIVO</div>
										<div class="item-inner">
											<div class="item-input">
												<input type="text" placeholder="%" name="efectivo">
											</div>
										</div>
									</div>
								</li>
								<li class="disabled abre_s4">
									<div class="item-content">
										<div class="item-media">TARJETA</div>
										<div class="item-inner">
											<div class="item-input">
												<input type="text" placeholder="%" name="tarjeta">
											</div>
										</div>
									</div>
								</li>
								<li><h5 class="item-content">Testigo fotográfico:</h5></li>
								<li>
									<label class="item-content">Tipo de foto</label>
									<div class="item-content">
										<div class="item-media"><i class="fa fa-building" aria-hidden="true"></i></div>
										<div class="item-inner">
											<div class="item-input">
												<select name="tipo_foto">
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
										<div class="item-media">Descripción</div>
										<div class="item-inner">
											<div class="item-input">
												<input type="text" placeholder="Descripción" name="descripcion">
											</div>
										</div>
									</div>
								</li>
								<li>
									<div class="item-content">
										<div class="item-media">Foto: </div>
										<div class="item-inner">
											<div class="item-input">
												<input type="file" name="foto1">
											</div>
										</div>
									</div>
								</li>
								<li>
									<div class="item-content">
										<div class="item-media">Foto: </div>
										<div class="item-inner">
											<div class="item-input">
												<input type="file" name="foto2">
											</div>
										</div>
									</div>
								</li>
								<li>
									<div class="item-content">
										<div class="item-media">Foto: </div>
										<div class="item-inner">
											<div class="item-input">
												<input type="file" name="foto3">
											</div>
										</div>
									</div>
								</li>
								<li>
									<div class="item-content">
										<div class="item-media">Foto: </div>
										<div class="item-inner">
											<div class="item-input">
												<input type="file" name="foto4">
											</div>
										</div>
									</div>
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
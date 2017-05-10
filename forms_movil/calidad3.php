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
	<title>Ruta de calidad - Etapa 3</title>
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
					<div class="center sliding">Ruta de calidad - Etapa 3</div>
				</div>
			</div>
			<div class="pages navbar-through toolbar-through">
				<div data-page="index" class="page">
					<div class="page-content">
						<div class="list-block">
							<ul>
								<form action="../api/insert/etapa3" method="post" enctype="multipart/form-data">
								<li><h5 class="item-content"> Testigo Fotográfico:</h5></li>
								<li>
									<label class="item-content">Tipo de foto:</label>
									<div class="item-content">
										<div class="item-media"><i class="fa fa-building" aria-hidden="true"></i></div>
										<div class="item-inner">
											<div class="item-input">
												<select name="status_establecimiento" id="select1">
													<option>Seleccione</option>
													<option value="Fachada">Fachada</option>
													<option value="Interior">Interior</option>
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
												<input type="text" placeholder="" name="descripcion" >
											</div>
										</div>
									</div>
								</li>
								<li>
									<div class="item-content">
										<div class="item-media">Foto</div>
										<div class="item-inner">
											<div class="item-input">
												<input type="file" placeholder="" name="imagen" >
											</div>
										</div>
									</div>
								</li>
								<input type="hidden" name="latitud" id="latitud">
								<input type="hidden" name="longitud" id="longitud">
								<input type="hidden" name="id_ruta" value="<?php echo $_GET['id'] ?>">
								<li style="height: 40px;"><input type="submit" class="button button-round active" style="width: 80%; margin: 10px auto" value="Guardar"></li>
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
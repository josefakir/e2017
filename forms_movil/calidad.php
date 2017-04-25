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
											<div class="item-media"><i class="fa fa-money" aria-hidden="true" style="color: green"></i></div>
											<div class="item-inner">
												<div class="item-input">
													<input type="text" placeholder="Monto de pasajes">
												</div>
											</div>
										</div>
									</li>
									<li>
										<label class="label-checkbox item-content">
											<input type="checkbox" name="my-checkbox" value="Camión">
											<div class="item-media">
												<i class="icon icon-form-checkbox"></i>
											</div>
											<div class="item-inner">
												<div class="item-title">Camión</div>
											</div>
										</label>
										<label class="label-checkbox item-content">
											<input type="checkbox" name="my-checkbox" value="Metro">
											<div class="item-media">
												<i class="icon icon-form-checkbox"></i>
											</div>
											<div class="item-inner">
												<div class="item-title">Metro</div>
											</div>
										</label>
										<label class="label-checkbox item-content">
											<input type="checkbox" name="my-checkbox" value="Otros">
											<div class="item-media">
												<i class="icon icon-form-checkbox"></i>
											</div>
											<div class="item-inner">
												<div class="item-title">Otros</div>
											</div>
										</label>
									</li>
									<li><h5>1. Establecimiento:</h5></li>
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
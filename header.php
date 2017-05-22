<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Establecimientos Grupo Medios</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
	<link rel="stylesheet" href="js/jqueryui/jquery-ui.min.css">
	<link rel="stylesheet" href="js/jqueryui/jquery-ui.theme.min.css">
	<link rel="stylesheet" href="js/wickedpicker.css">
	<link rel="stylesheet" href="css/multi-select.css">
	<link rel="stylesheet" href="js/jquery.range.css">
	<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
	<script src="js/jquery.validate.min.js"></script>
	<script src="js/jquery.range-min.js"></script>
	<link rel="stylesheet" href="dist/switchery.css" />
<script src="dist/switchery.js"></script>
	<script>
		/*
 * Translated default messages for the jQuery validation plugin.
 * Locale: ES (Spanish; Español)
 */
$.extend( $.validator.messages, {
	required: "Este campo es obligatorio.",
	remote: "Por favor, rellena este campo.",
	email: "Por favor, escribe una dirección de correo válida.",
	url: "Por favor, escribe una URL válida.",
	date: "Por favor, escribe una fecha válida.",
	dateISO: "Por favor, escribe una fecha (ISO) válida.",
	number: "Por favor, escribe un número válido.",
	digits: "Por favor, escribe sólo dígitos.",
	creditcard: "Por favor, escribe un número de tarjeta válido.",
	equalTo: "Por favor, escribe el mismo valor de nuevo.",
	extension: "Por favor, escribe un valor con una extensión aceptada.",
	maxlength: $.validator.format( "Por favor, no escribas más de {0} caracteres." ),
	minlength: $.validator.format( "Por favor, no escribas menos de {0} caracteres." ),
	rangelength: $.validator.format( "Por favor, escribe un valor entre {0} y {1} caracteres." ),
	range: $.validator.format( "Por favor, escribe un valor entre {0} y {1}." ),
	max: $.validator.format( "Por favor, escribe un valor menor o igual a {0}." ),
	min: $.validator.format( "Por favor, escribe un valor mayor o igual a {0}." ),
	nifES: "Por favor, escribe un NIF válido.",
	nieES: "Por favor, escribe un NIE válido.",
	cifES: "Por favor, escribe un CIF válido."
} );
	</script>
	<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
	<script src="js/jqueryui/jquery-ui.min.js"></script>
	<script src="js/wickedpicker.js"></script>
	<script src="js/jquery.multi-select.js"></script>
	<script src="js/script.js"></script>
  	<script>tinymce.init({ selector:'textarea' });</script>
</head>
<body>
	<header>
		<img src="img/logo.png" alt="">
	</header>
	<ul id="main-menu">
		<li class="menu-item profile">
			<div class="input-group margin-bottom-sm">
				<span class="input-group-addon"><i class="fa fa-angle-down fa-fw" style="color: #fff"></i></span>
				<a href="logout.php" class="menu-item-link" id="cerrarsesion">Cerrar Sesión</a>
			</div>
			<ul>
				<li class="submenu-item"><a class="menu-subitem-link" href="../lib/Execute.php?e=User/logout&amp;back=1">Salir</a></li>
			</ul>
		</li>
	</ul>
	<div id="menu-control-lateral"><i class="menu-control-arrow fa fa-chevron-right"></i></div>
	<ul id="main-menu-lateral" style="width: 260px;">
		<?php if($_SESSION['rol'] == '4' or $_SESSION['rol']=='1'){ ?>
		<li class="menu-item">
			<div class="input-group margin-bottom-sm">
				<span class="input-group-addon"><i class="fa fa-plane fa-fw"></i></span>
				<a href="#" class="menu-item-link">Donde ir<i class="menu-item-arrow fa fa-chevron-right" style="    margin-left: 5px;"></i></a>
			</div>
			<ul class="submenu">
				<li class="submenu-item"><a href="marcas.php" class="menu-subitem-link">Marcas</a></li>
				<li class="submenu-item"><a href="sucursales.php" class="menu-subitem-link">Sucursales</a></li>
			</ul>
		</li>
		<?php } ?>
		<?php if($_SESSION['rol'] == '1' or $_SESSION['rol']=='2' or $_SESSION['rol']=='3'){ ?>
		<li class="menu-item">
			<div class="input-group margin-bottom-sm">
				<span class="input-group-addon"><i class="fa fa-users fa-fw"></i></span>
				<a href="#" class="menu-item-link">Afiliación<i class="menu-item-arrow fa fa-chevron-right" style="    margin-left: 5px;"></i></a>
			</div>
			<ul class="submenu">
				<li class="submenu-item"><a href="marcas.php" class="menu-subitem-link">Marcas</a></li>
				<li class="submenu-item"><a href="sucursales.php" class="menu-subitem-link">Sucursales</a></li>
				<li class="submenu-item"><a href="autorizaciones.php" class="menu-subitem-link">Autorización de marcas</a></li>
				<li class="submenu-item"><a href="leads.php" class="menu-subitem-link">Leads y oportunidades</a></li>
				<li class="submenu-item"><a href="seguimiento-leads.php" class="menu-subitem-link">Seguimiento de Leads</a></li>
				<?php  if($_SESSION['rol']=='1' or $_SESSION['rol']=='2' ){ ?>
				<li class="submenu-item"><a href="asignar-promocion-proyecto.php" class="menu-subitem-link">Asignar promoción a proyecto</a></li>
				<li class="submenu-item"><a href="marcas-operativas.php" class="menu-subitem-link">Marcas operativas</a></li>
				<?php } ?>
			</ul>
		</li>
		<?php } ?>
		<?php if($_SESSION['rol'] == '1' or $_SESSION['rol']=='7'){ ?>
		<li class="menu-item">
			<div class="input-group margin-bottom-sm">
				<span class="input-group-addon"><i class="fa fa-gear fa-fw"></i></span>
				<a href="#" class="menu-item-link">Telemarketing<i class="menu-item-arrow fa fa-chevron-right" style="    margin-left: 5px;"></i></a>
			</div>
			<ul class="submenu">
				<li class="submenu-item"><a href="llamada-de-bienvenida.php" class="menu-subitem-link">Llamada de bienvenida</a></li>
				<li class="submenu-item"><a href="call-center.php" class="menu-subitem-link">Call Center</a></li>
				<li class="submenu-item"><a href="reservaciones.php" class="menu-subitem-link">Reservaciones</a></li>
			</ul>
		</li>
		<?php } ?>
		<?php if($_SESSION['rol'] == '1' or $_SESSION['rol']=='5' or $_SESSION['rol']=='6'){ ?>
		<li class="menu-item">
			<div class="input-group margin-bottom-sm">
				<span class="input-group-addon"><i class="fa fa-gear fa-fw"></i></span>
				<a href="#" class="menu-item-link">Calidad<i class="menu-item-arrow fa fa-chevron-right" style="    margin-left: 5px;"></i></a>
			</div>
			<ul class="submenu">
				<?php if($_SESSION['rol'] == '1' or $_SESSION['rol']=='5'){ ?>
				<li class="submenu-item"><a href="asignacion-de-rutas.php" class="menu-subitem-link">Asignación de Rutas</a></li>
				<?php } ?>
				<li class="submenu-item"><a href="rutas-de-calidad.php" class="menu-subitem-link">Rutas de calidad</a></li>
				<li class="submenu-item"><a href="rutas-de-mistery.php" class="menu-subitem-link">Rutas de mistery</a></li>
			</ul>
		</li>
		<?php } ?>
		<?php if($_SESSION['rol'] == '1' or $_SESSION['rol']=='2' or $_SESSION['rol']=='4'){ ?>
		<li class="menu-item">
			<div class="input-group margin-bottom-sm">
				<span class="input-group-addon"><i class="fa fa-gear fa-fw"></i></span>
				<a href="#" class="menu-item-link">Catálogos<i class="menu-item-arrow fa fa-chevron-right" style="    margin-left: 5px;"></i></a>
			</div>
			<ul class="submenu">
				<li class="submenu-item"><a href="categorias.php" class="menu-subitem-link">Categorías</a></li>
				<li class="submenu-item"><a href="categoriasvive.php" class="menu-subitem-link">Categorías Vive</a></li>
				<li class="submenu-item"><a href="proyectos.php" class="menu-subitem-link">Proyectos</a></li>
				<li class="submenu-item"><a href="tiposdecomida.php" class="menu-subitem-link">Tipos de comida</a></li>
				<li class="submenu-item"><a href="zonas.php" class="menu-subitem-link">Zonas</a></li>
			</ul>
		</li>
		<?php } ?>

	</ul>
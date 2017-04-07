<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Establecimientos Grupo Medios</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css">
	<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
<script src="js/jquery.validate.min.js"></script>
	<script src="js/jquery.validate.min.js"></script>
	<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
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
				<span class="input-group-addon"><i class="fa fa-angle-down fa-fw"></i></span>
				<a href="#" class="menu-item-link"><?php echo $_SESSION['email'] ?></a>
			</div>
			<ul>
				<li class="submenu-item"><a class="menu-subitem-link" href="../lib/Execute.php?e=User/logout&amp;back=1">Salir</a></li>
			</ul>
		</li>
	</ul>
	<div id="menu-control-lateral"><i class="menu-control-arrow fa fa-chevron-right"></i></div>
	<ul id="main-menu-lateral" style="width: 260px;">
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
		<li class="menu-item">
			<div class="input-group margin-bottom-sm">
				<span class="input-group-addon"><i class="fa fa-users fa-fw"></i></span>
				<a href="#" class="menu-item-link">Afiliación<i class="menu-item-arrow fa fa-chevron-right" style="    margin-left: 5px;"></i></a>
			</div>
			<ul class="submenu">
				<li class="submenu-item"><a href="marcas.php" class="menu-subitem-link">Marcas</a></li>
				<li class="submenu-item"><a href="sucursales.php" class="menu-subitem-link">Sucursales</a></li>
			</ul>
		</li>
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
	</ul>
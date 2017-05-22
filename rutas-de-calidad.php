<?php 
include("auth.php");
include('header.php'); ?>
	<div id="contenido">
		<h1 class="title-general" id="marca"><i class="fa fa-building fa-fw"></i> Rutas de calidad</h1>
		<div class="formulario">
			<form class='validation-form'  action="api/insert/categorias" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label>Nombre</label>
					<input type="text" class="form-control" placeholder="Nombre" name="nombre">
				</div>
				<button type="submit" class="btn btn-primary">Insertar</button>
			</form>
		</div>
		<div class="registros">
			<table class="tabla">
				<thead>
					<tr>
						<th>ID</th>
						<th>FECHA</th>
						<th>MARCA</th>
						<th>SUCURSAL</th>
						<th>DOMICILIO</th>
						<th>COLONIA</th>
						<th>REFERENCIA</th>
						<th>TELEFONO</th>
						<th class="editar">DETALLES</th>
						<th class="editar">ETAPA 1</th>
						<th class="editar">ETAPA 2</th>
						<th class="editar">ETAPA 3</th>
						<th class="editar">COMPLETAR</th>
					</tr>
				</thead>
				<tbody>
					<?php 
						$ch = curl_init(); 
						curl_setopt($ch, CURLOPT_URL, URL_API."rutas_calidad/".$_SESSION['id']); 
						curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
						$output = json_decode(curl_exec($ch)); 
						curl_close($ch); 
						foreach ($output as $o) {
					?>
					<tr>
						<td><?php echo $o->id ?></td>
						<td><?php echo $o->fecha_inicio ?></td>
						<td><?php echo $o->marca->nombre ?></td>
						<td><?php echo $o->sucursal->nombre ?></td>
						<td><?php echo $o->sucursal->calle." ".$o->sucursal->no_int." ".$o->sucursal->no_ext ?></td>
						<td><?php echo $o->sucursal->colonia ?></td>
						<td><?php echo $o->sucursal->referencia ?></td>
						<td><?php echo $o->sucursal->telefono ?></td>
						<td><a href="#" class="btn_detalles_calidad" rel="<?php echo $o->id ?>"><i class="fa fa-search-plus fa-fw fa-2x"></i></a></td>
						<?php if($o->etapa1 == true){ ?>
						<td><i class="fa fa-check fa-2x verde" aria-hidden="true"></i></td>
						<?php }else{ ?>
						<td><a href="forms_movil/calidad1.php?id=<?php echo $o->id ?>"><i class="fa fa-plus-square fa-fw fa-2x"></i></a></td>
						<?php } ?>
						<?php if($o->etapa2 == true){ ?>
						<td><i class="fa fa-check fa-2x verde" aria-hidden="true"></i></td>
						<?php }else{ ?>
						<td><a href="forms_movil/calidad2.php?id=<?php echo $o->id ?>"><i class="fa fa-plus-square fa-fw fa-2x"></i></a></td>
						<?php } ?>
						<?php if($o->etapa3 == true){ ?>
						<td><i class="fa fa-check fa-2x verde" aria-hidden="true"></i></td>
						<?php }else{ ?>
						<td><a href="forms_movil/calidad3.php?id=<?php echo $o->id ?>"><i class="fa fa-plus-square fa-fw fa-2x"></i></a></td>
						<?php } ?>
						<td><a href="<?php echo URL_API."check_ruta/".$o->id ?>" onclick="return confirm('¿Seguro de completar?');"><i class="fa fa-plus-square fa-fw fa-2x"></i></a></td>
					</tr>
					<?php
					}
					?>
				</tbody>
			</table>
		</div>
		<div class="clearfix"></div>
		<p>&nbsp;</p>
	</div>
	<div id="overlay_ruta_calidad">
		<div class="container">
			<div class="row">
				<div class="col-md-12" style="background: #fff; margin-top: 100px; height: 500px; overflow-y: scroll;">
				
					<a href="#" class="cerraroverlay"><i class="fa fa-times-circle fa-2x" aria-hidden="true"></i></a>
					<form class='validation-form2'  action="api/update/rutas" method="post">
						<h5>Material que pueden entregar:</h5>
				<table>
					<tr>
						<td><label for="" style="margin-right: 10px">Acrílicos</label><input type="checkbox" class="js-switch" name="acrilicos"></td>
						<td><label for="" style="margin-right: 10px; margin-left: 20px">Calcomanías</label><input type="checkbox" class="js-switch2" name="calcomanias"></td>
						<td><label for="" style="margin-right: 10px; margin-left: 20px">Com. Desclub</label><input type="checkbox" class="js-switch3" name="comdesclub"></td>
						<td><label for="" style="margin-right: 10px; margin-left: 20px">Com. BBVA</label><input type="checkbox" class="js-switch4" name="combbva"></td>
						<td><label for="" style="margin-right: 10px; margin-left: 20px">Reloj</label><input type="checkbox" class="js-switch5" name="reloj"></td>
				
					</tr>
				</table>
						<h2 style="margin-top: 5px">Detalles de Ruta:</h2>
						<p>&nbsp;</p>
				<table class="tabla2">
				<thead>
					<tr>
						<th>CONTACTO</th>
						<th># AFILIACIÓN</th>
						<th>PROYECTO</th>
						<th>REFERENCIA</th>
						<th>EFECTIVO</th>
						<th>TARJETA</th>
						<th>PROMO</th>
						<th>VIGENCIA</th>
					</tr>
				</thead>
				<tbody id="body_detalles_ruta_calidad">
					
				</tbody>
			</table>
						<div class="form-group">
							<label>Comentarios</label>
							<input type="text" class="form-control" placeholder="Comentarios" name="comentarios">
						</div>
						<input type="hidden" id="detalles_ruta_calidad_id_ruta" name="id_ruta">
						<button type="submit" class="btn btn-primary">Insertar</button>
						<p>&nbsp;</p>
					</form>
				</div>
			</div>
		</div>
</div>
<script>
	$(document).ready(function(){
		var elem = document.querySelector('.js-switch');
	var elem2 = document.querySelector('.js-switch2');
	var elem3 = document.querySelector('.js-switch3');
	var elem4 = document.querySelector('.js-switch4');
	var elem5 = document.querySelector('.js-switch5');
	var init = new Switchery(elem);
	var init = new Switchery(elem2);
	var init = new Switchery(elem3);
	var init = new Switchery(elem4);
	var init = new Switchery(elem5);
	});
</script>
<?php include('footer.php') ?>
<?php 
include("auth.php");
include('header.php'); ?>
	<div id="contenido">
		<h1 class="title-general" id="marca"><i class="fa fa-building fa-fw"></i> Marcas</h1>
		<!--<div class="add-new-record">Insertar nuevo registro<i class="fa fa-plus fa-fw"></i></div>-->
		<div class="registros">
			<table class="tabla">
				<thead>
					<tr>
						<th>ID</th>
						<th>SUCURSAL</th>
						<th>MARCA</th>
						<th>TELEFONO</th>
						<th>ESTADO</th>
						<th class="editar">LLAMADA</th>
						<th class="elimilnar">GEOLOCALIZACIÓN</th>
					</tr>
				</thead>
				<tbody>
					<?php 
						$ch = curl_init(); 
						curl_setopt($ch, CURLOPT_URL, URL_API."sucursales_inicio_operaciones"); 
						curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
						$output = json_decode(curl_exec($ch)); 
						curl_close($ch); 
						foreach ($output as $o) {
					?>
					<tr>
						<th><?php echo $o->id_sucursal ?></th>
						<th><?php echo $o->sucursal ?></th>
						<th><?php echo $o->marca ?></th>
						<th><?php echo $o->telefono ?></th>
						<th><?php echo $o->estado ?></th>
						<?php if($o->tuvo_llamada_bienvenida == 1){ ?>
						<td class="editar"><i class="fa fa-check fa-2x" aria-hidden="true" style="color: green"></i></td>
						<?php }else{ ?>
						<td class="editar"><a href="#" class="btn_llamada_bienvenida" rel="<?php echo $o->id_sucursal ?>"><i class="fa fa-plus-square fa-fw fa-2x"></i></a></td>
						<?php } ?>

						<?php if($o->tuvo_llamada_bienvenida == 1){ ?>
						<td class="eliminar"><a href="#" class="btn_revisar_geolocalizacion" rel="<?php echo $o->id_sucursal ?>" rel-marca="<?php echo $o->id_marca ?>"><i class="fa fa-plus-square fa-fw fa-2x"></i></a></td>
						<?php }else{ ?>
						<td class="eliminar"><i class="fa fa-plus-square fa-fw fa-2x"></i></td>
						<?php } ?>
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
<div id="overlay_bienvenida">
	<div class="container">
		<div class="row">
			<div class="col-md-12" style="background: #fff; margin-top: 100px; height: 500px; overflow-y: scroll;">
				<a href="#" class="cerraroverlay"><i class="fa fa-times-circle fa-2x" aria-hidden="true"></i></a>
				<form class='validation-form2'  action="api/llamada_bienvenida" method="post">
					<h2 style="margin-top: 5px">Detalles de llamada de bienvenida:</h2>
					<div class="form-group">
						<label for="">Llamada efectiva / No efectiva</label>
						<select name="detalle_llamada" id="detalle_llamada" style="width: 100%">
							<option value="">Seleccione</option>
							<option value="Conocen convenio y aplican descuento">Conocen convenio y aplican descuento</option>
							<option value="Desconocen convenio">Desconocen convenio</option>
							<option value="No existe número telefónico">No existe número telefónico</option>
							<option value="No contestan">No contestan</option>
							<option value="Número incorrecto">Número incorrecto</option>
							<option value="Descompuesto / Sin servicio">Descompuesto / Sin servicio</option>
							<option value="No tiene teléfono">No tiene teléfono</option>
						</select>
					</div>
					<div class="form-group" id="conoce_vb">
						<label for="">¿Conoce el programa Vida Bancomer?</label>
						<select name="conoce_vb" style="width: 100%">
							<option value="">Seleccione</option>
							<option value="Sí">Sí</option>
							<option value="No">No</option>
						</select>
					</div>
					<div class="form-group" id="escala_info">
						<label for="">¿Escala la información a un supervisor?</label>
						<select name="escala_info"  style="width: 100%">
							<option value="">Seleccione</option>
							<option value="Sí">Sí</option>
							<option value="No">No</option>
						</select>
					</div>
					<div class="form-group" id="motivo_desconoce">
						<label for="">¿Cuál es el motivo porque desconoce el descuento?</label>
						<select name="motivo_desconoce"  style="width: 100%">
							<option value="">Seleccione</option>
							<option value="La empresa / corporativo no ha enviado la información">La empresa / corporativo no ha enviado la información</option>
							<option value="Empleado de nuevo ingreso">Empleado de nuevo ingreso</option>
							<option value="Cambiaron de administración">Cambiaron de administración</option>
						</select>
					</div>
					<div class="form-group" id="reforzo_informacion">
						<label for="">¿Se reforzó la información?</label>
						<select name="reforzo_informacion"  style="width: 100%">
							<option value="">Seleccione</option>
							<option value="Sí">Sí</option>
							<option value="No">No</option>
						</select>
					</div>
					<div class="form-group" id="material_pop">
						<label for="">¿Cuenta con material POP?</label>
						<select name="material_pop"  style="width: 100%">
							<option value="">Seleccione</option>
							<option value="Sí">Sí</option>
							<option value="No">No</option>
						</select>
					</div>
					<div class="form-group" id="cantidades_pop">
						<div class="pop">
							<label for="">Calcomanías</label>
							<select name="calcomanias" id="" style="width: 100%">
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
								<option value="11">11</option>
								<option value="12">12</option>
								<option value="13">13</option>
								<option value="14">14</option>
								<option value="15">15</option>
								<option value="16">16</option>
								<option value="17">17</option>
								<option value="18">18</option>
								<option value="19">19</option>
								<option value="20">20</option>
							</select>
						</div>
						<div class="pop">
							<label for="">Acrílicos</label>
							<select name="acrilicos" id="" style="width: 100%">
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
								<option value="11">11</option>
								<option value="12">12</option>
								<option value="13">13</option>
								<option value="14">14</option>
								<option value="15">15</option>
								<option value="16">16</option>
								<option value="17">17</option>
								<option value="18">18</option>
								<option value="19">19</option>
								<option value="20">20</option>
							</select>
						</div>
						<div class="pop">
							<label for="">Comunicados Desclub</label>
							<select name="comunicados_desclub" id="" style="width: 100%">
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
								<option value="11">11</option>
								<option value="12">12</option>
								<option value="13">13</option>
								<option value="14">14</option>
								<option value="15">15</option>
								<option value="16">16</option>
								<option value="17">17</option>
								<option value="18">18</option>
								<option value="19">19</option>
								<option value="20">20</option>
							</select>
						</div>
						<div class="pop">
							<label for="">Comunicados empleado BBVA</label>
							<select name="comunicados_bbva" id="" style="width: 100%">
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
								<option value="11">11</option>
								<option value="12">12</option>
								<option value="13">13</option>
								<option value="14">14</option>
								<option value="15">15</option>
								<option value="16">16</option>
								<option value="17">17</option>
								<option value="18">18</option>
								<option value="19">19</option>
								<option value="20">20</option>
							</select>
						</div>
						<div class="pop">
							<label for="">Reloj colgante</label>
							<select name="reloj_colgante" id="" style="width: 100%">
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
								<option value="11">11</option>
								<option value="12">12</option>
								<option value="13">13</option>
								<option value="14">14</option>
								<option value="15">15</option>
								<option value="16">16</option>
								<option value="17">17</option>
								<option value="18">18</option>
								<option value="19">19</option>
								<option value="20">20</option>
							</select>
						</div>
						<div class="pop">
							<label for="">Calcomanías Desclub</label>
							<select name="calcomanias_desclub" id="" style="width: 100%">
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
								<option value="11">11</option>
								<option value="12">12</option>
								<option value="13">13</option>
								<option value="14">14</option>
								<option value="15">15</option>
								<option value="16">16</option>
								<option value="17">17</option>
								<option value="18">18</option>
								<option value="19">19</option>
								<option value="20">20</option>
							</select>
						</div>
						<div class="pop">
							<label for="">Tarjetas Desclub</label>
							<select name="tarjetas_desclub" id="" style="width: 100%">
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
								<option value="11">11</option>
								<option value="12">12</option>
								<option value="13">13</option>
								<option value="14">14</option>
								<option value="15">15</option>
								<option value="16">16</option>
								<option value="17">17</option>
								<option value="18">18</option>
								<option value="19">19</option>
								<option value="20">20</option>
							</select>
						</div>
						<div class="clearfix"></div>
					</div>

					<div class="form-group" id="nombre_atendio">
						<label for="">Nombre de la persona que atendió</label>
						<input type="text" class="form-control" placeholder="Nombre" name="nombre_atendio" minlength="2" type="text" required>
					</div>
					<div class="form-group" id="cargo_atendio">
						<label for="">Cargo de persona que atendió</label>
						<select name="cargo_atendio" id="" style="width: 100%">
							<option value="">Seleccione</option>
							<option value="Gerente sucursal">Gerente sucursal</option>
							<option value="Encargado">Encargado</option>
							<option value="Cajero">Cajero</option>
							<option value="Administración">Administración</option>
							<option value="Otro">Otro</option>
						</select>
					</div>
				<input type="hidden" name="id_sucursal" id="id_sucursal">
				<button type="submit" class="btn btn-primary">Actualizar</button>
					<p>&nbsp;</p>
				</form>
			</div>
		</div>
	</div>
</div>

<div id="overlay_geolocalizacion">
	<div class="container">
		<div class="row">
			<div class="col-md-12" style="background: #fff; margin-top: 100px; height: 500px; overflow-y: scroll;">
				<a href="#" class="cerraroverlay"><i class="fa fa-times-circle fa-2x" aria-hidden="true"></i></a>
				<form class='validation-form2'  action="api/revisar_geolocalizacion" method="post">
					<h2 style="margin-top: 5px">Geolocalización:</h2>
					<h3>Marca: <span id="nombre_marca"></span></h3>
					<h4>Sucursal: <span id="nombre_sucursal"></span></h4>
					<div class="form-group">
					<label for="exampleInputEmail1">Zona</label>
					<select name="id_zona" style="width: 100%" id="c_id_zona" >
						<option value="">Zona</option>
						<?php 
							$ch = curl_init(); 
							curl_setopt($ch, CURLOPT_URL, URL_API."zonas"); 
							curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
							$output = json_decode(curl_exec($ch)); 
							curl_close($ch); 
							foreach($output as $o){
								?>
						<option value="<?php echo $o->id ?>"><?php echo $o->nombre ?></option>
								<?php
							}
						?>
					</select>
					</div>
					<div class="form-group">
					<label for="exampleInputEmail1">Latitud</label>
					<input type="text" class="form-control" placeholder="Latitud" name="latitud" minlength="2" type="text" required id="c_latitud">
					</div>
					<div class="form-group">
					<label for="exampleInputEmail1">Longitud</label>
					<input type="text" class="form-control" placeholder="Longitud" name="longitud" minlength="2" type="text" required id="c_longitud">
					</div>
					<div class="form-group">
					<label for="exampleInputEmail1">Referencia</label>
					<input type="text" class="form-control" placeholder="Referencia" name="referencia" minlength="2" type="text" required id="c_referencia">
					</div>
				<input type="hidden" name="id_sucursal" id="id_sucursal_geo">
				<button type="submit" class="btn btn-primary">Actualizar</button>
					<p>&nbsp;</p>
				</form>
			</div>
		</div>
	</div>
</div>
<?php include('footer.php') ?>
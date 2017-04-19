<?php 
include("auth.php");
include('header.php'); ?>
	<div id="contenido">
		<h1 class="title-general" id="marca"><i class="fa fa-building fa-fw"></i> Seguimiento de Leads</h1>
		<div class="add-new-record">Insertar nuevo registro<i class="fa fa-plus fa-fw"></i></div>
		<div class="formulario">
			<form class='validation-form'  action="api/insert/leads" method="post" enctype="multipart/form-data">
				<div class="form-group">
				<label for="exampleInputEmail1">Empresa</label>
				<select name="id_marca" id="" style="width: 100%" required>
						<option value="">Empresa</option>
						<?php 
							$ch = curl_init(); 
							curl_setopt($ch, CURLOPT_URL, URL_API."marcasaprobadas"); 
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
				<p style="margin-top: 5px">¿No encuentras la empresa? Solicita su autorización <a href="autorizaciones.php">Aquí</a></p>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Nombre</label>
					<input type="text" class="form-control" placeholder="Nombre" name="nombre" minlength="1" type="text" required>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Número de sucursales</label>
					<input type="number" class="form-control" placeholder="Número de sucursales" name="numero_de_sucursales" minlength="1" type="text" required>
				</div>
				<input type="hidden" name="id_usuario" value="<?php echo $_SESSION['id'] ?>">
				<button type="submit" class="btn btn-primary">Insertar</button>
			</form>
		</div>
		<div class="registros">
			<p class="error"><?php echo base64_decode($_GET['m']) ?></p>
			<table class="tabla">
				<thead>
					<tr>
						<th>ID</th>
						<th>NOMBRE</th>
						<th>EMPRESA</th>
						<th>ÚLTIMA ACTUALIZACION</th>
						<th>DETALLES</th>
						<th>ACTIVIDADES</th>
						<th>CONTACTO</th>
						<th>REGISTRO</th>
					</tr>
				</thead>
				<tbody>
					<?php 
						$ch = curl_init(); 
						curl_setopt($ch, CURLOPT_URL, URL_API."leadssinfinalizar"); 
						curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
						$output = json_decode(curl_exec($ch)); 
						curl_close($ch); 
						foreach ($output as $o) {
					?>
					<tr>
						<td><?php echo $o->id ?></td>
						<td><?php echo $o->nombre ?></td>
						<td><?php echo $o->marca->nombre ?></td>
						<td><?php echo $o->updated_at->date ?></td>
						<td><a href="#" rel="<?php echo $o->id ?>" class="detalles_actividad"><i class="fa fa-search-plus fa-fw fa-2x"></i></a></td>
						<td><a href="#" rel="<?php echo $o->id ?>" class="agregar_actividad"><i class="fa fa-plus-square fa-fw fa-2x"></i></a></td>
						<?php if($o->status > 3){
							?>
						<td><a href="#" rel="<?php echo $o->id ?>" class="btn_contacto" rel-id-marca="<?php echo $o->marca->id ?>"><i class="fa fa-plus-square fa-fw fa-2x"></i></a></td>
							<?php
						}else{
							?>
						<td><!--<a href=""><i class="fa fa-plus-square fa-fw fa-2x"></i></a>--></td>
							<?php
							} ?>

						<?php 
							if($o->status>7){
								?>
						<td><a href="#" rel="<?php echo $o->id ?>" class="btn_registro" rel-id-marca="<?php echo $o->marca->id ?>"><i class="fa fa-plus-square fa-fw fa-2x"></i></a></td>
								<?php
							}else{
								?>
						<td><!--<a href=""><i class="fa fa-plus-square fa-fw fa-2x"></i></a>--></td>
								<?php
							}

						?>

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
<div id="overlay_actividades">
	<div class="container">
		<div class="row">
			<div class="col-md-12" style="background: #fff; margin-top: 100px; height: 700px; overflow-y: scroll;">
				<a href="#" class="cerraroverlay"><i class="fa fa-times-circle fa-2x" aria-hidden="true"></i></a>
				<form class='validation-form2'  action="api/insert/actividades" method="post">
					<h2 style="margin-top: 5px">Detalles de actividad:</h2>
					<div class="form-group">
						<label for="exampleInputEmail1">¿Qué hice?</label>
						<select name="que_hice" id="" style="width: 100%" required>
							<option value="Alta de establecimiento">Alta de establecimiento</option>
							<option value="Llamada telefónica">Llamada telefónica</option>
							<option value="Envio de correo">Envio de correo</option>
							<option value="Tuve una reunión">Tuve una reunión</option>
						</select>
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Comentarios</label>
						<input type="text" class="form-control" placeholder="Comentarios" name="comentarios" minlength="1" type="text" required>
					</div>
					<h2 style="margin-top: 5px">Actividad Futura:</h2>
					<div class="form-group">
						<label for="exampleInputEmail1">¿Qué actividad es la siguiente a realizar?</label>
						<select name="que_hare" id="" style="width: 100%" required>
							<option value="Alta de establecimiento">Alta de establecimiento</option>
							<option value="Llamada telefónica">Llamada telefónica</option>
							<option value="Envio de correo">Envio de correo</option>
							<option value="Tuve una reunión">Tuve una reunión</option>
						</select>
					</div>
					<div class="form-group">
						<label for="">Fecha de próxima actividad</label>
						<input type="text" class="form-control datepicker" placeholder="Fecha" name="fecha_futura" minlength="1" type="text" required>
					</div>
					<div class="form-group">
						<label for="">Hora de próxima actividad</label>
						<input type="text" class="form-control timepicker" placeholder="Hora" name="hora_futura" minlength="1" type="text" required>
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Comentarios</label>
						<input type="text" class="form-control" placeholder="Comentarios" name="comentarios_futura" minlength="1" type="text" required>
					</div>
					<h2 style="margin-top: 5px">Estatus:</h2>
					<div class="form-group">
						<label for="exampleInputEmail1">Estatus de lead:</label>
						<select name="status_lead" id="" style="width: 100%" required>
							<option value="3">Sin contacto</option>
							<option value="4">Contactado</option>
							<option value="5">En proceso</option>
							<option value="6">Interesado</option>
							<option value="7">No Interesado</option>
							<option value="8">Afiliado</option>
							<option value="9">Finalizado</option>
						</select>
					</div>
					<input type="hidden" name="id_lead" id="id_lead">
					<button type="submit" class="btn btn-primary">Insertar</button>
					<p>&nbsp;</p>
				</form>
			</div>
		</div>
	</div>
</div>
<div id="overlay_detalle">
	<div class="container">
		<div class="row">
			<div class="col-md-12" style="background: #fff; margin-top: 100px; height: 700px; overflow-y: scroll;">
				<a href="#" class="cerraroverlay"><i class="fa fa-times-circle fa-2x" aria-hidden="true"></i></a>
				<h2 style="margin-top: 5px">Detalles de actividad:</h2>
				<p>&nbsp;</p>
				<table class="tabla" >
				<thead>
					<tr>
						<th>ID</th>
						<th>QUE HICE</th>
						<th>COMENTARIOS</th>
						<th>QUE HARÉ</th>
					</tr>
				</thead>
				<tbody id="bodydetalleslead">
					
				</tbody>
			</table>
			</div>
		</div>
	</div>
</div>
<div id="overlay_contacto">
	<div class="container">
		<div class="row">
			<div class="col-md-12" style="background: #fff; margin-top: 100px; height: 700px; overflow-y: scroll;">
				<a href="#" class="cerraroverlay"><i class="fa fa-times-circle fa-2x" aria-hidden="true"></i></a>
				<form class='validation-form2'  action="api/detallesdesclub" method="post">
					<h2 style="margin-top: 5px">Detalles de contacto:</h2>
					<div class="form-group">
						<label for="exampleInputEmail1">Razón Social</label>
						<input type="text" class="form-control" placeholder="Razón social" name="razon_social" minlength="1" type="text" required id="c_razonsocial">
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">RFC</label>
						<input type="text" class="form-control" placeholder="RFC" name="rfc" minlength="1" type="text" required id="c_rfc">
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Contacto</label>
						<input type="text" class="form-control" placeholder="Contacto" name="contacto" minlength="1" type="text" required id="c_contacto">
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Puesto</label>
						<input type="text" class="form-control" placeholder="Puesto" name="puesto" minlength="1" type="text" required id="c_puesto">
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Teléfono 1</label>
						<input type="text" class="form-control" placeholder="Teléfono 1" name="tel1" minlength="1" type="text" required id="c_tel1">
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Teléfono 2</label>
						<input type="text" class="form-control" placeholder="Teléfono 2" name="tel2" minlength="1" type="text" required id="c_tel2">
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Email</label>
						<input type="email" class="form-control" placeholder="Email" name="email" minlength="1" type="text" required id="c_email">
					</div>
					<input type="hidden" name="id_lead" id="id_lead_contacto">
					<input type="hidden" name="id_marca" id="id_marca">
					<button type="submit" class="btn btn-primary">Actualizar</button>
					<p>&nbsp;</p>
				</form>
			</div>
		</div>
	</div>
</div>


<div id="overlay_registro">
	<div class="container">
		<div class="row">
			<div class="col-md-12" style="background: #fff; margin-top: 100px; height: 700px; overflow-y: scroll;">
				<a href="#" class="cerraroverlay"><i class="fa fa-times-circle fa-2x" aria-hidden="true"></i></a>
				<form class='validation-form2'  action="api/detallesdesclub" method="post">
					<h2 style="margin-top: 5px">Detalles de contacto:</h2>
					<div class="form-group">
						<label for="exampleInputEmail1">Razón Social</label>
						<input type="text" class="form-control" placeholder="Razón social" name="razon_social" minlength="1" type="text" required id="r_razonsocial">
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">RFC</label>
						<input type="text" class="form-control" placeholder="RFC" name="rfc" minlength="1" type="text" required id="r_rfc">
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Contacto</label>
						<input type="text" class="form-control" placeholder="Contacto" name="contacto" minlength="1" type="text" required id="r_contacto">
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Puesto</label>
						<input type="text" class="form-control" placeholder="Puesto" name="puesto" minlength="1" type="text" required id="r_puesto">
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Teléfono 1</label>
						<input type="text" class="form-control" placeholder="Teléfono 1" name="tel1" minlength="1" type="text" required id="r_tel1">
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">¿Es celular?</label>
						<select name="es_celular_1" id="" style="width: 100%" required id="r_escelular_tel1">
							<option value="">Seleccione</option>
							<option value="0">No</option>
							<option value="1">Sí</option>
						</select>
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Teléfono 2</label>
						<input type="text" class="form-control" placeholder="Teléfono 2" name="tel2" minlength="1" type="text" required id="r_tel2">
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">¿Es celular?</label>
						<select name="es_celular_2" id="" style="width: 100%" required id="r_escelular_tel2">
							<option value="">Seleccione</option>
							<option value="0">No</option>
							<option value="1">Sí</option>
						</select>
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Email</label>
						<input type="email" class="form-control" placeholder="Email" name="email" minlength="1" type="text" required id="r_email">
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Calle</label>
						<input type="text" class="form-control" placeholder="Calle" name="calle" minlength="1" type="text" required id="r_calle">
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">No Exterior</label>
						<input type="text" class="form-control" placeholder="No Exterior" name="no_exterior" minlength="1" type="text" required id="r_no_ext">
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">No Interior</label>
						<input type="text" class="form-control" placeholder="No Interior" name="no_interior" minlength="1" type="text" required id="r_no_int">
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Referencia</label>
						<input type="text" class="form-control" placeholder="Referencia" name="referencia" minlength="1" type="text" required id="r_referencia">
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Latitud</label>
						<input type="text" class="form-control" placeholder="Latitud" name="latitud" minlength="1" type="text" required id="r_latitud">
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Longitud</label>
						<input type="text" class="form-control" placeholder="Longitud" name="longitud" minlength="1" type="text" required id="r_longitud">
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">¿Tiene actividad de calidad?</label>
						<select name="tiene_actividad_calidad" id="" style="width: 100%" required id="r_tieneactividad">
							<option value="">Seleccione</option>
							<option value="0">No</option>
							<option value="1">Sí</option>
						</select>
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Actividad de claidad</label>
						<select name="actividad_de_calidad" id="" style="width: 100%" required id="r_actividad" multiple="multiple">
						<!--
							<option value="">Seleccione</option>
							<option value="Acrílico">Acrílico</option>
							<option value="Comunicado">Comunicado</option>
							<option value="Llamada">Llamada</option>
							<option value="Ministicker">Ministicker</option>
							<option value="Reloj">Reloj</option>
							<option value="Sticker">Sticker</option>
							<option value="Visita">Visita</option>
							-->
							<option value="">Seleccione</option>
							<option value="Llamada">Llamada</option>
							<optgroup label="Visita con Material">
								<option value="Ministicker">Ministicker</option>
								<option value="Reloj">Reloj</option>
								<option value="Sticker">Sticker</option>
								<option value="Acrílico">Acrílico</option>
								<option value="Comunicado">Comunicado</option>
							</optgroup>
							<option value="Visita Sin Material">Visita sin material</option>
						</select>
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Comentarios</label>
						<input type="text" class="form-control" placeholder="Comentarios" name="comentarios" minlength="1" type="text" required id="r_comentarios">
					</div>
					<input type="hidden" name="id_lead" id="id_lead_registro">
					<input type="hidden" name="id_marca" id="id_marca_registro">
					<button type="submit" class="btn btn-primary">Actualizar</button>
					<p>&nbsp;</p>
				</form>
			</div>
		</div>
	</div>
</div>
<?php include('footer.php') ?>
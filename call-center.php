<?php 
include("auth.php");
include('header.php'); ?>
	<div id="contenido">
		<h1 class="title-general" id="marca"><i class="fa fa-building fa-fw"></i> Call Center</h1>
		<div class="add-new-record" id="btn_nueva_llamada">Insertar nuevo registro<i class="fa fa-plus fa-fw"></i></div>
		<div class="formulario">
			<form class='validation-form'  action="api/insert/llamadas" method="post" enctype="multipart/form-data">
				<h2>Folio: <span id="folio"><img src="img/spinner.gif" alt=""></span></h2>
				<div class="form-group">
				<label for="exampleInputEmail1">Proyecto</label>
				<select name="id_proyecto" id="id_proyecto" style="width: 100%" >
					<option value="">Seleccione</option>
						<?php 
							$ch = curl_init(); 
							curl_setopt($ch, CURLOPT_URL, URL_API."proyectos"); 
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
				<label for="exampleInputEmail1">Tipo de llamada</label>
				<select name="tipo" id="tipo_llamada" style="width: 100%" >
					<option value="">Seleccione</option>
					<option value="Afiliar establecimiento">Afiliar establecimiento</option>
					<option value="Información Plataforma">Información Plataforma</option>
					<option value="Queja Establecimiento">Queja Establecimiento</option>
				</select>
				</div>
				<h3>Datos de contacto:</h3>
				<div class="form-group afiliar_est info_plataforma queja_est">
					<label for="exampleInputEmail1">Nombre</label>
					<input type="text" class="form-control" placeholder="Nombre" name="nombre" type="text">
				</div>
				<div class="form-group afiliar_est info_plataforma queja_est">
					<label for="exampleInputEmail1">A. Paterno</label>
					<input type="text" class="form-control" placeholder="A. Paterno" name="paterno" type="text">
				</div>
				<div class="form-group afiliar_est info_plataforma queja_est">
					<label for="exampleInputEmail1">A. Materno</label>
					<input type="text" class="form-control" placeholder="A. Materno" name="materno" type="text">
				</div>
				<div class="form-group info_plataforma queja_est">
					<label for="exampleInputEmail1">Tipo de tarjeta / Seguro</label>
					<select name="tipo_tarjeta_seguro" id="tipo_tarjeta_seguro" style="width: 100%" >
						<option value="">Seleccione</option>
						<option value='Auto - Seguro'>Auto - Seguro</option>
						<option value='Azul'>Azul</option>
						<option value='Cheques'>Cheques</option>
						<option value='Congelada'>Congelada</option>
						<option value='Educación'>Educación</option>
						<option value='Hogar - Seguro'>Hogar - Seguro</option>
						<option value='Infinite'>Infinite</option>
						<option value='IPN'>IPN</option>
						<option value='Libretón'>Libretón</option>
						<option value='Nomina'>Nomina</option>
						<option value='Oro'>Oro</option>
						<option value='Platino'>Platino</option>
						<option value='Rayados'>Rayados</option>
						<option value='Solución Personal'>Solución Personal</option>
						<option value='Tarjeta Express'>Tarjeta Express</option>
						<option value='UNAM'>UNAM</option>
						<option value='Vida - Seguro'>Vida - Seguro</option>
						<option value='VIP'>VIP</option>
						<option value='VIVE'>VIVE</option>
						<option value='Winner Card'>Winner Card</option>
					</select>
				</div>
				<h3 class="afiliar_est info_plataforma">Dirección:</h3>
				<div class="form-group afiliar_est info_plataforma">
					<label for="exampleInputEmail1">Calle</label>
					<input type="text" class="form-control" placeholder="Calle" name="calle" type="text">
				</div>
				<div class="form-group afiliar_est info_plataforma">
					<label for="exampleInputEmail1">Número exterior</label>
					<input type="text" class="form-control" placeholder="Número exterior" name="no_ext" type="text">
				</div>
				<div class="form-group afiliar_est info_plataforma">
					<label for="exampleInputEmail1">Número interior</label>
					<input type="text" class="form-control" placeholder="Número interior" name="no_int" type="text">
				</div>
				<div class="form-group afiliar_est info_plataforma">
					<label for="exampleInputEmail1">Código postal</label>
					<input type="text" class="form-control" placeholder="Código postal" name="cp" type="text">
				</div>
				<div class="form-group afiliar_est info_plataforma">
					<label for="exampleInputEmail1">Referencia</label>
					<input type="text" class="form-control" placeholder="Referencia" name="referencia" type="text">
				</div>
				<div class="form-group afiliar_est info_plataforma queja_est">
					<label for="exampleInputEmail1">Tipo de telefono</label>
					<select name="tipo_tel_1" id="tipo_tel_1" style="width: 10%" >
						<option value="">Seleccione</option>
						<option value="Normal">Normal</option>
						<option value="Lada">Lada</option>
						<option value="044">044</option>
						<option value="045">045</option>
					</select>
					<input type="text" class="form-control" placeholder="Telefono 1" name="tel_1" type="text">
				</div>
				<div class="form-group afiliar_est info_plataforma queja_est">
					<label for="exampleInputEmail1">Tipo de telefono</label>
					<select name="tipo_tel_2" id="tipo_tel_2" style="width: 10%" >
						<option value="">Seleccione</option>
						<option value="Normal">Normal</option>
						<option value="Lada">Lada</option>
						<option value="044">044</option>
						<option value="045">045</option>
					</select>
					<input type="text" class="form-control" placeholder="Telefono 2" name="tel_2" type="text">
				</div>
				<div class="form-group afiliar_est info_plataforma queja_est">
					<label for="exampleInputEmail1">Email</label>
					<input type="text" class="form-control" placeholder="Email" name="email" type="text">
				</div>
				<div class="form-group afiliar_est info_plataforma">
					<label for="exampleInputEmail1">Marca</label>
					<input type="text" class="form-control" placeholder="Marca" name="marca" type="text">
				</div>
				<div class="form-group afiliar_est info_plataforma queja_est">
					<label for="exampleInputEmail1">Sucursal</label>
					<input type="text" class="form-control" placeholder="Sucursal" name="sucursal" type="text">
				</div>
				<div class="form-group queja_est">
					<label for="exampleInputEmail1">Marca</label>
					<select name="id_marca" id="" style="width: 100%" >
						<option value="">Seleccione</option>
						<?php 
							$ch = curl_init(); 
							curl_setopt($ch, CURLOPT_URL, URL_API."marcas"); 
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
				<div class="form-group afiliar_est info_plataforma">
					<label for="exampleInputEmail1">Giro</label>
					<select name="id_categoria" id="" style="width: 100%" >
						<option value="">Seleccione</option>
						<?php 
							$ch = curl_init(); 
							curl_setopt($ch, CURLOPT_URL, URL_API."categorias"); 
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
				<div class="form-group queja_est">
					<label for="exampleInputEmail1">Fecha de visita</label>
					<input type="text" class="form-control datepicker" placeholder="Fecha de visita" name="fecha_visita" type="text">
				</div>
				<div class="form-group afiliar_est info_plataforma queja_est">
					<label for="exampleInputEmail1">Comentarios</label>
					<textarea name="comentarios" id="" cols="30" rows="10"></textarea>
				</div>
				<div class="form-group afiliar_est info_plataforma queja_est">
					<label for="exampleInputEmail1">¿Cónde vieron la promoción?</label>
					<select name="donde_viste" id="" style="width: 100%" >
						<option value="">Seleccione</option>
						<option value="App">App</option>			
						<option value="Correo directo">Correo directo</option>					
						<option value="Guía Digital">Guía Digital</option>					
						<option value="Guía Impresa">Guía Impresa</option>					
						<option value="Newsletter">Newsletter</option>					
						<option value="Página Web">Página Web</option>					
						<option value="Promo card">Promo card</option>					
					</select>
				</div>
				<p><input type="checkbox"> Le recordamos que sus datos proporcionados están protegidos y son utilizados únicamente con la finalidad de brindarle un buen servicio, y con fines de estadísticos. Puede consultar el detalle de nuestro aviso de privacidad en la página www.grupomedios.com</p>
				<button type="submit" class="btn btn-primary">Insertar</button>
			</form>
		</div>
		<div class="registros">
			<table class="tabla">
				<thead>
					<tr>
						<th>FOLIO</th>
						<th>NOMBRE</th>
						<th>PATERNO</th>
						<th>MATERNO</th>
						<th>TIPO DE LLAMADA</th>
						<th class="editar">SEGUIMIENTO</th>
					</tr>
				</thead>
				<tbody>
					<?php 
						$ch = curl_init(); 
						curl_setopt($ch, CURLOPT_URL, URL_API."llamadas"); 
						curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
						$output = json_decode(curl_exec($ch)); 
						curl_close($ch); 
						foreach ($output as $o) {
					?>
					<tr>
						<td><?php echo $o->id ?></td>
						<td><?php echo $o->nombre ?></td>
						<td><?php echo $o->paterno ?></td>
						<td><?php echo $o->materno ?></td>
						<td><?php echo $o->tipo ?></td>
						<?php if($o->tipo=='Queja Establecimiento'){ ?>
						<td class="editar"><a href="#" rel="<?php echo $o->id ?>" class="actividad_llamada"><i class="fa fa-plus-square fa-fw fa-2x"></i></a></td>
						<?php }else{ ?> 
						<td></td>
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
<div id="overlay_detalles_llamada_nueva">
	<div class="container">
		<div class="row">
			
			<div class="col-md-12" style="background: #fff; margin-top: 100px; height: 500px; overflow-y: scroll;">
				<br>
				<div class="mitad">
					<h4>Call center seguimiento:</h4>
					<table>
						<tr>
							<td>Folio: </td>
							<td id="det_llam_folio"></td>
						</tr>
						<tr>
							<td>Nombre: </td>
							<td id="det_llam_nombre"></td>
						</tr>
						<tr>
							<td>Teléfono: </td>
							<td id="det_llam_telefono"></td>
						</tr>
						<tr>
							<td>Teléfono 2: </td>
							<td id="det_llam_telefono2"></td>
						</tr>
						<tr>
							<td>Email: </td>
							<td id="det_llam_email"></td>
						</tr>
						<tr>
							<td>Marca: </td>
							<td id="det_llam_marca"></td>
						</tr>
						<tr>
							<td>Sucursal: </td>
							<td id="det_llam_sucursal"></td>
						</tr>
						<tr>
							<td>Fecha Visita: </td>
							<td id="det_llam_fecha"></td>
						</tr>
						<tr>
							<td>Motivo: </td>
							<td id="det_llam_motivo"></td>
						</tr>
					</table>
				</div>
				<div class="mitad">
					<h4>Nueva actividad:</h4>
					<form action="api/insert/seguimiento" method="post" class="validation-form2">
						<div class="form-group">
							<label for="exampleInputEmail1">Status:</label>
							<select name="a_status" style="width: 100%" required>
								<option value="">Seleccione</option>
								<option value="1">Seguimiento</option>
								<option value="2">Seguimiento con ticket</option>
								<option value="3">Cerrado</option>
							</select>
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Acuerdo:</label>
							<select name="a_acuerdo" style="width: 100%" required>
								<option value="">Seleccione</option>
								<option value="1">No acepta reembolso</option>
								<option value="2">No Aplica</option>
								<option value="3">Otro Beneficio</option>
								<option value="4">Reembolso</option>
								<option value="5">Se proporcionó información</option>
							</select>
						</div>
						<div class="form-group">
							<label>Comentarios</label>
							<input type="text" class="form-control" placeholder="Comentario" name="a_comentarios" type="text" required>
						</div>
						<input type="hidden" id="a_id_llamada" name="a_id_llamada">
						<input type="hidden" id="a_id_usuario" name="a_id_usuario"  value="<?php echo $_SESSION['id'] ?>">
						<button type="submit" class="btn btn-primary">Insertar</button>
					</form>
				</div>
				<a href="#" class="cerraroverlay"><i class="fa fa-times-circle fa-2x" aria-hidden="true"></i></a>
				<h2 style="margin-top: 5px">Historial de seguimiento:</h2>
				<p>&nbsp;</p>
				<table class="tabla2">
				<thead>
					<tr>
						<th>FECHA</th>
						<th>USUARIO</th>
						<th>ESTATUS</th>
						<th>ACUERDO</th>
						<th>COMENTARIO</th>
					</tr>
				</thead>
				<tbody id="body_seguimiento_quejas">
					
				</tbody>
			</table>
			</div>
		</div>
	</div>
</div>
<?php include('footer.php') ?>
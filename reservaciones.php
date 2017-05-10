<?php 
include("auth.php");
include('header.php'); ?>
	<div id="contenido">
		<h1 class="title-general" id="marca"><i class="fa fa-building fa-fw"></i> Reservaciones</h1>
		<div class="add-new-record">Insertar nuevo registro<i class="fa fa-plus fa-fw"></i></div>
		<div class="formulario">
			<form class='validation-form'  action="api/insert/reservaciones" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label for="exampleInputEmail1">Restaurante</label>
					<input type="text" class="form-control" placeholder="Restaurante" name="restaurante" required>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Mesa a nombre de</label>
					<input type="text" class="form-control" placeholder="Mesa a nombre de" name="mesa_a_nombre_de" required>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Fecha</label>
					<input type="text" class="form-control datepicker" placeholder="Fecha" name="fecha" required>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Hora</label>
					<input type="text" class="form-control" placeholder="Hora" name="hora" required>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Número de personas</label>
					<select name="personas" style="width: 200px">
						<?php 
							for($i=1; $i<21; $i++){
								?>
						<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
								<?php
							}
						?>
					</select>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Área</label>
					<input type="text" class="form-control" placeholder="Área" name="area" required>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Clave</label>
					<input type="text" class="form-control" placeholder="Clave" name="clave" required>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Tolerancia</label>
					<input type="text" class="form-control" placeholder="Tolerancia" name="tolerancia" required>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Se logró la reservación</label>
					<select name="se_logro_reservacion" style="width: 200px">
						<option value="1">Sí</option>
						<option value="0">No</option>
					</select>
				</div>
				<button type="submit" class="btn btn-primary">Insertar</button>
			</form>
		</div>
		<div class="registros">
			<table class="tabla">
				<thead>
					<tr>
						<th>ID</th>
						<th>NOMBRE</th>
						<th>FECHA</th>
						<th>HORA</th>
						<th>PERSONAS</th>
						<th>CLAVE</th>
						<th>SE RESERVÓ</th>
					</tr>
				</thead>
				<tbody>
					<?php 
						$ch = curl_init(); 
						curl_setopt($ch, CURLOPT_URL, URL_API."reservaciones"); 
						curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
						$output = json_decode(curl_exec($ch)); 
						curl_close($ch); 
						foreach ($output as $o) {
					?>
					<tr>
						<td><?php echo $o->id ?></td>
						<td><?php echo $o->mesa_a_nombre_de ?></td>
						<td><?php echo $o->fecha ?></td>
						<td><?php echo $o->hora ?></td>
						<td><?php echo $o->personas ?></td>
						<td><?php echo $o->clave ?></td>
						<td><?php echo $o->se_logro_reservacion ?></td>
						<!---<td class="editar"><a href="editar-reservaciones.php?id=<?php echo $o->id ?>"><i class="fa fa-pencil fa-fw fa-2x"></i></a></td>
						<td class="eliminar"><a href="api/delete/reservaciones/<?php echo $o->id ?>"  onclick="return confirm('¿Seguro de eliminar?');"><i class="fa fa-close fa-fw fa-2x"></i></a></td>-->
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
<?php include('footer.php') ?>
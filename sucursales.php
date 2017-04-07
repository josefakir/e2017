<?php 
include("auth.php");
include('header.php'); ?>
	<div id="contenido">
		<h1 class="title-general" id="marca"><i class="fa fa-building fa-fw"></i> Sucursales</h1>
		<div class="add-new-record">Insertar nuevo registro<i class="fa fa-plus fa-fw"></i></div>
		<div class="formulario">
			<form class='validation-form'  action="api/insert/sucursales" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label for="exampleInputEmail1">Marca</label>
					<select name="id_marca" id="" style="width: 100%" >
						<option value="">Marca</option>
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
				<div class="form-group">
					<label for="exampleInputEmail1">Nombre</label>
					<input type="text" class="form-control" placeholder="Nombre" name="nombre" minlength="2" type="text" required>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Teléfono</label>
					<input type="text" class="form-control" placeholder="Teléfono" name="telefono" minlength="2" type="text" required>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Latitud</label>
					<input type="text" class="form-control" placeholder="latitud" name="latitud" minlength="2" type="text" required>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Longitud</label>
					<input type="text" class="form-control" placeholder="longitud" name="longitud" minlength="2" type="text" required>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Calle</label>
					<input type="text" class="form-control" placeholder="calle" name="calle" minlength="2" type="text" required>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Número Exterior</label>
					<input type="text" class="form-control" placeholder="Número Exterior" name="no_ext" minlength="2" type="text" required>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Número Interior</label>
					<input type="text" class="form-control" placeholder="Número Interior" name="no_int"  type="text">
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Horarios</label>
					<input type="text" class="form-control" placeholder="Horarios" name="horarios" minlength="2" type="text" required>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Fachada</label>
					<input type="file" class="form-control" placeholder="Fachada" name="fachada">
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Estado</label>
					<select name="id_estado" id="" style="width: 100%" >
						<option value="">Estado</option>
						<?php 
							$ch = curl_init(); 
							curl_setopt($ch, CURLOPT_URL, URL_API."estados"); 
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
					<label for="exampleInputEmail1">Zona</label>
					<select name="id_zona" id="" style="width: 100%" >
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
					<label for="exampleInputEmail1">Restorando</label>
					<input type="text" class="form-control" placeholder="Restorando" name="restorando" type="text">
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Restaurantes</label>
					<input type="text" class="form-control" placeholder="Restaurantes" name="restaurantes" type="text">
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
						<th class="editar">EDITAR</th>
						<th class="elimilnar">ELIMINAR</th>
					</tr>
				</thead>
				<tbody>
					<?php 
						$ch = curl_init(); 
						curl_setopt($ch, CURLOPT_URL, URL_API."sucursales"); 
						curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
						$output = json_decode(curl_exec($ch)); 
						curl_close($ch); 
						foreach ($output as $o) {
					?>
					<tr>
						<th><?php echo $o->id ?></th>
						<th><?php echo $o->nombre ?></th>
						<td class="editar"><a href="editar-sucursales.php?id=<?php echo $o->id ?>"><i class="fa fa-pencil fa-fw fa-2x"></i></a></td>
						<td class="eliminar"><a href="api/delete/sucursales/<?php echo $o->id ?>"  onclick="return confirm('¿Seguro de eliminar?');"><i class="fa fa-close fa-fw fa-2x"></i></a></td>
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
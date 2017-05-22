<?php 
include("auth.php");
include('header.php'); ?>
	<div id="contenido" class="editar-sucursales">
		<h1 class="title-general" id="marca"><i class="fa fa-building fa-fw"></i> Sucursales</h1>
		<!--<div class="add-new-record">Insertar nuevo registro<i class="fa fa-plus fa-fw"></i></div>-->
		<div class="formulario" style="   width: 48%;display: block;padding-right: 2%;">
			<?php 
				$ch = curl_init(); 
				curl_setopt($ch, CURLOPT_URL, URL_API."sucursales/".$_GET['id']); 
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
				$output = json_decode(curl_exec($ch)); 
				$sucursal = $output;
				curl_close($ch); 
			?>
			<form class='validation-form'  action="api/update/sucursales" method="post">
				<div class="form-group">
					<label>Marca</label>
					<select name="id_marca" id="" style="width: 100%" required >
						<option value="">Seleccione</option>
						<?php 
							$ch = curl_init(); 
							curl_setopt($ch, CURLOPT_URL, URL_API."marcas"); 
							curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
							$output = json_decode(curl_exec($ch)); 
							curl_close($ch); 
							foreach($output as $o){
								?>
						<option value="<?php echo $o->id ?>" <?php if($o->id == $sucursal->id_marca){ echo ' selected '; } ?>><?php echo $o->nombre ?></option>
								<?php
							}
						?>
				</select>
				</div>
				<div class="form-group">
					<label>Nombre</label>
					<input type="text" class="form-control" placeholder="Nombre" name="nombre" required maxlength="100" value="<?php echo $sucursal->nombre ?>">
				</div>
				<div class="form-group">
					<label>Teléfono</label>
					<input type="number" class="form-control" placeholder="Teléfono" name="telefono" required max="9999999999" maxlength="10" value="<?php echo $sucursal->telefono ?>">
				</div>
				<div class="form-group">
					<label>Tipo de teléfono</label>
					<select name="t1_tipo" id="" style="width: 100%" required>
						<option value="">Seleccione</option>
						<option value="F" <?php if($sucursal->t1_tipo=="F"){ echo ' selected '; } ?>>Fijo</option>
						<option value="M" <?php if($sucursal->t1_tipo=="M"){ echo ' selected '; } ?>>Móvil</option>
				</select>
				</div>
				<div class="form-group">
					<label>Teléfono 2 </label>
					<input type="number" class="form-control" placeholder="Teléfono" name="telefono2" max="9999999999" maxlength="10"  value="<?php echo $sucursal->telefono2 ?>">
				</div>
				<div class="form-group">
					<label>Tipo de teléfono 2</label>
					<select name="t2_tipo" id="" style="width: 100%">
						<option value="">Seleccione</option>
						<option value="F" <?php if($sucursal->t2_tipo=="F"){ echo ' selected '; } ?>>Fijo</option>
						<option value="M" <?php if($sucursal->t2_tipo=="M"){ echo ' selected '; } ?>>Móvil</option>
				</select>
				</div>
				<div class="form-group">
					<label>Latitud</label>
					<input type="text" class="form-control" placeholder="latitud" name="latitud" maxlength="14" required  value="<?php echo $sucursal->latitud ?>">
				</div>
				<div class="form-group">
					<label>Longitud</label>
					<input type="text" class="form-control" placeholder="longitud" name="longitud" maxlength="14" required  value="<?php echo $sucursal->longitud ?>">
				</div>
				<div class="form-group">
					<label>Referencia</label>
					<input type="text" class="form-control" placeholder="referencia" name="referencia" requred  value="<?php echo $sucursal->referencia ?>">
				</div>
				<div class="form-group">
					<label>Calle</label>
					<input type="text" class="form-control" placeholder="calle" name="calle" required minlength="0" maxlength="70"  value="<?php echo $sucursal->calle ?>">
				</div>
				<div class="form-group">
					<label>Número Exterior</label>
					<input type="text" class="form-control" placeholder="Número Exterior" name="no_ext" required minlength="0" maxlength="8"  value="<?php echo $sucursal->no_ext ?>">
				</div>
				<div class="form-group">
					<label>Número Interior</label>
					<input type="text" class="form-control" placeholder="Número Interior" name="no_int"  type="text" minlength="0" maxlength="8"  value="<?php echo $sucursal->no_int ?>">
				</div>
				<div class="form-group">
					<label>Código Postal</label>
					<input type="text" class="form-control" placeholder="Código postal (5 dígitos)" name="cp" required minlength="0" maxlength="5" id="input_cp"  value="<?php echo $sucursal->cp ?>">
				</div>
				<div class="form-group">
					<img src="img/spinner.gif" alt="" class="loading">
				</div>
				<div class="esconder_cp">
				<div class="form-group">
					<label id="etiqueta_estado"></label>
					<input type="hidden" name="id_estado" id="input_id_estado" required>
				</div>
				<div class="form-group">
					<label id="etiqueta_municipio"></label>
					<input type="hidden" name="id_municipio" id="input_id_municipio" required>
				</div>
				<div class="form-group">
					<label id="etiqueta_colonia"></label>
					<input type="hidden" name="id_colonia" id="input_id_colonia" required>
				</div>
				</div>
				<div class="form-group">
					<label>Horarios</label>
					<input type="text" class="form-control" placeholder="Horarios" name="horarios">
				</div>
				<div class="form-group">
					<label>Zona</label>
					<select name="id_zona" id="select_zona" style="width: 100%" rel="<?php echo $sucursal->id_zona ?>">			
						<option value="">Seleccione</option>			
					</select>
				</div>
				<div class="form-group">
					<label>Restorando</label>
					<input type="text" class="form-control" placeholder="Restorando" name="restorando" type="text" value="<?php echo $sucursal->restorando ?>">
				</div>
				<div class="form-group">
					<label>Restaurantes</label>
					<input type="text" class="form-control" placeholder="Restaurantes" name="restaurantes" type="text" value="<?php echo $sucursal->restaurantes ?>">
				</div>
				<div class="form-group">
					<label>Banco Adquiriente</label>
					<select name="banco_adquiriente" id="" style="width: 100%">
						<option value="">Seleccione</option>
						<option value="1" <?php if($sucursal->banco_adquiriente =='1'){ echo ' selected '; } ?>>Banco 1</option>
						<option value="2" <?php if($sucursal->banco_adquiriente =='2'){ echo ' selected '; } ?>>Banco 2</option>
					</select>
				</div>
				<div class="form-group">
					<label># de afiliación</label>
					<input type="number" class="form-control" placeholder="# de afiliacion" name="no_afiliacion" maxlength="7" value="<?php echo $sucursal->no_afiliacion ?>">
				</div>
				<input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
				<button type="submit" class="btn btn-primary">Actualizar</button>
			</form>
		</div>
		<div class="registros" style="width: 50%">
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
<?php 
include("auth.php");
include('header.php'); ?>
	<div id="contenido">
		<h1 class="title-general" id="marca"><i class="fa fa-building fa-fw"></i> Sucursales</h1>
		<div class="add-new-record">Insertar nuevo registro<i class="fa fa-plus fa-fw"></i></div>
		<div class="formulario">
			<form class='validation-form'  action="api/insert/sucursales" method="post">
				<div class="form-group">
					<label>Marca</label>
					<select name="id_marca" id="" style="width: 100%" required>
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
				<div class="form-group">
					<label>Nombre</label>
					<input type="text" class="form-control" placeholder="Nombre" name="nombre" required maxlength="100">
				</div>
				<div class="form-group">
					<label>Teléfono</label>
					<input type="number" class="form-control" placeholder="Teléfono" name="telefono" required max="9999999999" maxlength="10">
				</div>
				<div class="form-group">
					<label>Tipo de teléfono</label>
					<select name="t1_tipo" id="" style="width: 100%" required>
						<option value="">Seleccione</option>
						<option value="F">Fijo</option>
						<option value="M">Móvil</option>
				</select>
				</div>
				<div class="form-group">
					<label>Teléfono 2 </label>
					<input type="number" class="form-control" placeholder="Teléfono" name="telefono2" max="9999999999" maxlength="10">
				</div>
				<div class="form-group">
					<label>Tipo de teléfono 2</label>
					<select name="t2_tipo" id="" style="width: 100%">
						<option value="">Seleccione</option>
						<option value="F">Fijo</option>
						<option value="M">Móvil</option>
				</select>
				</div>
				<div class="form-group">
					<label>Latitud</label>
					<input type="text" class="form-control" placeholder="latitud" name="latitud" maxlength="14" required>
				</div>
				<div class="form-group">
					<label>Longitud</label>
					<input type="text" class="form-control" placeholder="longitud" name="longitud" maxlength="14" required>
				</div>
				<div class="form-group">
					<label>Referencia</label>
					<input type="text" class="form-control" placeholder="referencia" name="referencia" requred>
				</div>
				<div class="form-group">
					<label>Calle</label>
					<input type="text" class="form-control" placeholder="calle" name="calle" required minlength="0" maxlength="70">
				</div>
				<div class="form-group">
					<label>Número Exterior</label>
					<input type="text" class="form-control" placeholder="Número Exterior" name="no_ext" required minlength="0" maxlength="8">
				</div>
				<div class="form-group">
					<label>Número Interior</label>
					<input type="text" class="form-control" placeholder="Número Interior" name="no_int"  type="text" minlength="0" maxlength="8">
				</div>
				<div class="form-group">
					<label>Código Postal</label>
					<input type="text" class="form-control" placeholder="Código postal (5 dígitos)" name="cp" required minlength="0" maxlength="5" id="input_cp">
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
					<select name="id_zona" id="select_zona" style="width: 100%">			
						<option value="">Seleccione</option>			
					</select>
				</div>
				<div class="form-group">
					<label>Restorando</label>
					<input type="text" class="form-control" placeholder="Restorando" name="restorando" type="text">
				</div>
				<div class="form-group">
					<label>Restaurantes</label>
					<input type="text" class="form-control" placeholder="Restaurantes" name="restaurantes" type="text">
				</div>
				<div class="form-group">
					<label>Banco Adquiriente</label>
					<select name="banco_adquiriente" id="" style="width: 100%">
						<option value="">Seleccione</option>
						<option value="Banamex">Banamex</option>
						<option value="Banco del Bajío">Banco del bajío</option>
						<option value="Banorte">Banorte</option>
						<option value="BBVA">BBVA</option>
						<option value="HSBC">HSBC</option>
						<option value="Inbursa">Inbursa</option>
						<option value="IXE">IXE</option>
						<option value="Mifel">Mifel</option>
						<option value="Multiva">Multiva</option>
						<option value="Santander">Santander</option>
						<option value="Scotiabank">Scotiabank</option>
					</select>
				</div>
				<div class="form-group">
					<label># de afiliación</label>
					<input type="number" class="form-control" placeholder="# de afiliacion" name="no_afiliacion" maxlength="7">
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
<?php 
include("auth.php");
include('header.php'); ?>
	<div id="contenido">
		<h1 class="title-general" id="marca"><i class="fa fa-building fa-fw"></i> Call Center</h1>
		<div class="add-new-record">Insertar nuevo registro<i class="fa fa-plus fa-fw"></i></div>
		<div class="formulario">
			<form class='validation-form'  action="api/insert/llamadas" method="post" enctype="multipart/form-data">
				<div class="form-group">
				<label for="exampleInputEmail1">Proyecto</label>
				<select name="id_proyecto" id="" style="width: 100%" >
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
					<option value="Afiliar establecimiento">Afiliar establecimiento</option>
					<option value="Información Plataforma">Información Plataforma</option>
					<option value="Queja Establecimiento">Queja Establecimiento</option>
				</select>
				</div>
				<h3>Datos de contacto:</h3>
				<div class="form-group">
					<label for="exampleInputEmail1">Nombre</label>
					<input type="text" class="form-control" placeholder="Nombre" name="nombre" minlength="2" type="text" required>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">A. Paterno</label>
					<input type="text" class="form-control" placeholder="A. Paterno" name="paterno" minlength="2" type="text" required>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">A. Materno</label>
					<input type="text" class="form-control" placeholder="A. Materno" name="materno" minlength="2" type="text" required>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Tipo de tarjeta / Seguro</label>
					<select name="tipo" id="tipo_llamada" style="width: 100%" >
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
				<h3>Dirección:</h3>
				<div class="form-group">
					<label for="exampleInputEmail1">Calle</label>
					<input type="text" class="form-control" placeholder="Calle" name="calle" minlength="2" type="text" required>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Número exterior</label>
					<input type="text" class="form-control" placeholder="Número exterior" name="no_ext" minlength="2" type="text" required>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Número interior</label>
					<input type="text" class="form-control" placeholder="Número interior" name="no_int" minlength="2" type="text" required>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Código postal</label>
					<input type="text" class="form-control" placeholder="Código postal" name="cp" minlength="2" type="text" required>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Referencia</label>
					<input type="text" class="form-control" placeholder="Referencia" name="referencia" minlength="2" type="text" required>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Tipo de telefono</label>
					<select name="tipo_tel_1" id="tipo_tel_1" style="width: 10%" >
						<option value="Normal">Normal</option>
						<option value="Lada">Lada</option>
						<option value="044">044</option>
						<option value="045">045</option>
					</select>
					<input type="text" class="form-control" placeholder="Telefono 1" name="tel_1" minlength="2" type="text" required>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Tipo de telefono</label>
					<select name="tipo_tel_2" id="tipo_tel_2" style="width: 10%" >
						<option value="Normal">Normal</option>
						<option value="Lada">Lada</option>
						<option value="044">044</option>
						<option value="045">045</option>
					</select>
					<input type="text" class="form-control" placeholder="Telefono 2" name="tel_2" minlength="2" type="text" required>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Email</label>
					<input type="text" class="form-control" placeholder="Email" name="email" minlength="2" type="text" required>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Marca</label>
					<input type="text" class="form-control" placeholder="Marca" name="marca" minlength="2" type="text" required>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Sucursal</label>
					<input type="text" class="form-control" placeholder="Sucursal" name="sucursal" minlength="2" type="text" required>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Marca</label>
					<select name="id_marca" id="" style="width: 100%" >
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
					<select name="id_categoria" id="" style="width: 100%" >
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
				<div class="form-group">
					<label for="exampleInputEmail1">Comentarios</label>
					<textarea name="comentarios" id="" cols="30" rows="10"></textarea>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">¿Cónde vieron la promoción?</label>
					<select name="donde_viste" id="" style="width: 100%" >
						<option value="App">App</option>			
						<option value="Correo directo">Correo directo</option>					
						<option value="Guía Digital">Guía Digital</option>					
						<option value="Guía Impresa">Guía Impresa</option>					
						<option value="Newsletter">Newsletter</option>					
						<option value="Página Web">Página Web</option>					
						<option value="Promo card">Promo card</option>					
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
						<th class="editar">EDITAR</th>
						<th class="elimilnar">ELIMINAR</th>
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
						<th><?php echo $o->id ?></th>
						<th><?php echo $o->nombre ?></th>
						<td class="editar"><a href="editar-categorias.php?id=<?php echo $o->id ?>"><i class="fa fa-pencil fa-fw fa-2x"></i></a></td>
						<td class="eliminar"><a href="api/delete/categorias/<?php echo $o->id ?>"  onclick="return confirm('¿Seguro de eliminar?');"><i class="fa fa-close fa-fw fa-2x"></i></a></td>
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
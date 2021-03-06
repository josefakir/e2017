<?php 
include("auth.php");
include('header.php'); ?>
	<div id="contenido">
		<h1 class="title-general" id="marca"><i class="fa fa-building fa-fw"></i> Asignación de rutas </h1>
		<!--<div class="add-new-record">Insertar nuevo registro<i class="fa fa-plus fa-fw"></i></div>-->
			<form class='validation-form'  action="api/insert/ruta" method="post" enctype="multipart/form-data">

		<div class="formulario" style="display: block; width: 50%">
				<div class="form-group">
					<label>Tipo de ruta</label>
					<select name="tipo_ruta" id="select_tipo_ruta" style="width: 100%" required>
						<option value="">Seleccione</option>						
						<option value="A">A</option>						
						<option value="AA">AA</option>						
						<option value="AAA">AAA</option>						
						<option value="VIP">VIP</option>
					</select>
				</div>
				<div class="form-group">
					<label>Proyecto</label>
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
					<label>Actividad</label>
					<select name="actividad" id="" style="width: 100%" required>
						<option value="">Seleccione</option>
						<option value="calidad">Visita de calidad</option>
						<option value="mistery">Visita Mistery</option>
					</select>
				</div>
				<div class="form-group">
					<label>Fecha de inicio</label>
					<input type="text" class="form-control datepicker" placeholder="Fecha de inicio" name="fecha_inicio">
				</div>
				<div class="form-group">
					<label>Fecha de fin</label>
					<input type="text" class="form-control datepicker" placeholder="Fecha de fin" name="fecha_fin">
				</div>
				<div class="form-group">
					<label>Usuario</label>
					<select name="id_usuario" id="" style="width: 100%" >
						<option value="">Seleccione</option>
						<?php 
							$ch = curl_init(); 
							curl_setopt($ch, CURLOPT_URL, URL_API."usuarios_calidad"); 
							curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
							$output = json_decode(curl_exec($ch)); 
							curl_close($ch); 
							foreach($output as $o){
								?>
						<option value="<?php echo $o->id ?>"><?php echo $o->email ?></option>
								<?php
							}
						?>
					</select>
				</div>
				<div class="form-group">
					<label>Estado</label>
					<select name="id_estado" id="select_estado" style="width: 100%" >
						<option value="">Seleccione</option>
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
					<label>Zona</label>
					<select name="id_zona" id="select_zona" style="width: 100%" >			
						<option value="">Seleccione</option>			
					</select>
				</div>
				<!--<button type="submit" class="btn btn-primary">Insertar</button>-->
		</div>
		<div class="registros" style="width: 48%; float: left; margin-left: 2%">

			<h2>Haga click en la sucursal para asignarla: </h2>
			<div id="cargandorutas"><img src="img/spinner.gif" alt=""> Cargando<br><br></div>
			<div id="mensajerutas"></div>
			 <select multiple="multiple" id="my-select" name="sucursales[]" class="multiselect">
		      
		    </select>
		    <p>&nbsp;</p>
			<button type="submit" class="btn btn-primary">Asignar ruta</button>
		</div>

					</form>

		<div class="clearfix"></div>

		<p>&nbsp;</p>
	</div>

<?php include('footer.php') ?>
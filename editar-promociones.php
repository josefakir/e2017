<?php 
include("auth.php");
include('header.php'); ?>
	<div id="contenido">
		<h1 class="title-general" id="marca"><i class="fa fa-building fa-fw"></i> Asignar promoción a proyecto</h1>
		<!--<div class="add-new-record">Insertar nuevo registro<i class="fa fa-plus fa-fw"></i></div>-->
		<div class="formulario" style="   width: 48%;display: block;padding-right: 2%;">
		<?php 
			$ch = curl_init(); 
			curl_setopt($ch, CURLOPT_URL, URL_API."marcas/".$_GET['id']); 
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
			$output = json_decode(curl_exec($ch)); 
			curl_close($ch); 
		?>
		<h2>Marca: <?php echo $output->nombre ?> </h2>
			<form class='validation-form'  action="api/insert/promocion" method="post" enctype="multipart/form-data">
				<div class="form-group">
				<select name="id_proyecto" id="apap_select_proyecto" style="width: 100%" required>
						<option value="">Proyecto</option>
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
				<div class="form-group" id="esconder_efectivo">
					<label>Efectivo</label>
					<input type="text" class="form-control" placeholder="Efectivo" name="efectivo" maxlength="2">
				</div>
				<div class="form-group">
					<label>Tarjeta</label>
					<input type="text" class="form-control" placeholder="Tarjeta" name="tarjeta" maxlength="2">
				</div>
				<div class="form-group">
					<label>Promo</label>
					<input type="text" class="form-control" placeholder="Promo" name="promo" required maxlength="4">
				</div>
				<div class="form-group">
					<label>Detalle Promo</label>
					<input type="text" class="form-control" placeholder="Detalle Promo" name="detalle_promo" required maxlength="200">
				</div>
				<div class="form-group">
					<label>Restricciones</label>
					<input type="text" class="form-control" placeholder="Restricciones" name="restricciones" required maxlength="200">
				</div>
				<div class="form-group">
					<label>Fecha de Inicio</label>
					<input type="text" class="form-control datepicker" placeholder="Fecha de inicio" name="fecha_inicio" required>
				</div>
				<div class="form-group">
					<label>Fecha de fin</label>
					<input type="text" class="form-control datepicker" placeholder="Fecha de fin" name="fecha_fin" required>
				</div>
				<input type="hidden" name="id_marca" value="<?php echo $_GET['id'] ?>">
				<input type="hidden" name="id_lead" value="<?php echo $_GET['id_lead'] ?>">
				<button type="submit" class="btn btn-primary">Actualizar</button>
				<p class="tac error"><?php echo htmlentities(base64_decode($_GET['m'])) ?></p>
			</form>
		</div>
		<div class="registros" style="width: 50%">
			<h2>SUCURSALES DE MARCA:</h2>
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
						curl_setopt($ch, CURLOPT_URL, URL_API."/sucursales_pormarca/".$_GET['id']); 
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

			<h2>PROMOCIONES ASIGNADAS:</h2>
			<table class="tabla">
				<thead>
					<tr>
						<th>ID</th>
						<th>MARCA</th>
						<th>PROYECTO</th>
						<th>EFECTIVO</th>
						<th>TARJETA</th>
						<th>PROMO</th>
						<th>INICIO</th>
						<th>FIN</th>
						<th>EDITAR</th>
						<th>ELIMINAR</th>
						
					</tr>
				</thead>
				<tbody>
					<?php 
						$ch = curl_init(); 
						curl_setopt($ch, CURLOPT_URL, URL_API."/promociones/".$_GET['id']); 
						curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
						$output = json_decode(curl_exec($ch)); 
						curl_close($ch); 
						foreach ($output as $o) {
					?>
					<tr>
						<th><?php echo $o->id ?></th>
						<th><?php echo $o->marca->nombre ?></th>
						<th><?php echo $o->proyecto->nombre ?></th>
						<th><?php echo $o->efectivo ?></th>
						<th><?php echo $o->tarjeta ?></th>
						<th><?php echo $o->promo ?></th>
						<th><?php echo $o->inicio_actividades ?></th>
						<th><?php echo $o->fin_actividades ?></th>
						<td class="editar"><a href="editar-promocion.php?id=<?php echo $o->id ?>&id_marca=<?php echo $o->marca->id ?>&id_lead=<?php echo $_GET['id_lead'] ?>"><i class="fa fa-pencil fa-fw fa-2x"></i></a></td>
						<td class="eliminar"><a href="api/delete/promocion/<?php echo $o->id ?>"  onclick="return confirm('¿Seguro de eliminar?');"><i class="fa fa-close fa-fw fa-2x"></i></a></td>
					</tr>
					<?php
					}
					?>
				</tbody>
			</table>
			<p class="tac"><a href="api/iniciar_operaciones/<?php echo $_GET['id']; ?>/<?php echo $_GET['id_lead'] ?>" class="btn btn-success" onclick="return confirm('¿Seguro que desea iniciar operacones?');">INICIO DE OPERACIONES</a></p>
		</div>
		<div class="clearfix"></div>
		<p>&nbsp;</p>
	</div>
<?php include('footer.php') ?>
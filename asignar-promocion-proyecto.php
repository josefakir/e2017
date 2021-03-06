<?php 
include("auth.php");
include('header.php'); ?>
	<div id="contenido">
		<h1 class="title-general" id="marca"><i class="fa fa-building fa-fw"></i> Asignar promoción a proyecto</h1>
		<!--<div class="add-new-record">Insertar nuevo registro<i class="fa fa-plus fa-fw"></i></div>
		<div class="formulario">
			<form class='validation-form'  action="api/insert/leads" method="post" enctype="multipart/form-data">
				<div class="form-group">
				<label>Empresa</label>
				<select name="id_marca" id="" style="width: 100%" required>
						<option value="">Marca</option>
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
					<label>Nombre</label>
					<input type="text" class="form-control" placeholder="Nombre" name="nombre" minlength="1">
				</div>
				<div class="form-group">
					<label>Número de sucursales</label>
					<input type="number" class="form-control" placeholder="Número de sucursales" name="numero_de_sucursales" minlength="1">
				</div>
				<input type="hidden" name="id_usuario" value="<?php echo $_SESSION['id'] ?>">
				<button type="submit" class="btn btn-primary">Insertar</button>
			</form>
		</div>-->
		<div class="registros">
			<p class="error"><?php echo base64_decode($_GET['m']) ?></p>
			<table class="tabla">
				<thead>
					<tr>
						<th>ID</th>
						<th>NOMBRE</th>
						<th>EMPRESA</th>
						<th>ÚLTIMA ACTUALIZACION</th>
						<th style="width: 50px">ASIGNAR PROMOCIÓN</th>
					</tr>
				</thead>
				<tbody>
					<?php 
						$ch = curl_init(); 
						curl_setopt($ch, CURLOPT_URL, URL_API."leadsfinalizados"); 
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
						<td style="text-align: center;"><a href="editar-promociones.php?id=<?php echo $o->marca->id ?>&id_lead=<?php echo $o->id ?>" style="color: green"><i class="fa fa-money fa-2x" aria-hidden="true"></i></a></td>
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
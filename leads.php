<?php 
include("auth.php");
include('header.php'); ?>
	<div id="contenido">
		<h1 class="title-general" id="marca"><i class="fa fa-building fa-fw"></i> Categorias</h1>
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
						<th>STATUS</th>
						<?php 

						?>
						<th class="editar">APROBAR</th>
						<th class="elimilnar">RECHAZAR</th>
					</tr>
				</thead>
				<tbody>
					<?php 
						$ch = curl_init(); 
						curl_setopt($ch, CURLOPT_URL, URL_API."leads"); 
						curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
						$output = json_decode(curl_exec($ch)); 
						curl_close($ch); 
						foreach ($output as $o) {
					?>
					<tr>
						<th><?php echo $o->id ?></th>
						<th><?php echo $o->nombre ?></th>
						<th><?php echo $o->marca->nombre ?></th>
						<th><?php echo traducirStatusLead($o->status) ?></th>
						<?php if($o->status=='1'){ ?>
						<td class="aprobar"><a href="api/aprobarlead/<?php echo $o->id ?>"  onclick="return confirm('¿Seguro de aprobar?');"><i class="fa fa-check fa-2x aprobar" aria-hidden="true"></i></a></td>
						<td class="rechazar"><a href="api/rechazarlead/<?php echo $o->id ?>"  onclick="return confirm('¿Seguro de rechazar?');"><i class="fa fa-close fa-fw fa-2x"></i></a></td>
						<?php }else{ ?>
						<td class="aprobar"><i class="fa fa-check fa-2x aprobar" aria-hidden="true"></i></td>
						<td class="rechazar"><i class="fa fa-close fa-fw fa-2x"></i></td>

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
<?php include('footer.php') ?>
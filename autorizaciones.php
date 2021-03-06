<?php 
include("auth.php");
include('header.php'); 
?>
	<div id="contenido">
		<h1 class="title-general" id="marca"><i class="fa fa-building fa-fw"></i> Autorización de marcas</h1>
		<div class="add-new-record">Insertar nuevo registro<i class="fa fa-plus fa-fw"></i></div>
		<div class="formulario">
			<form class='validation-form'  action="api/insert/autorizacion" method="post" enctype="multipart/form-data">
				<div class="form-group">
				<label>Marca</label>
				<select name="id_marca" id="" style="width: 100%" >
						<option value="">Seleccione</option>
						<?php 
							$ch = curl_init(); 
							curl_setopt($ch, CURLOPT_URL, URL_API."marcassinaprobar"); 
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
				<p style="margin-top: 5px">¿No encuentras la empresa? Puedes registrarla <a href="marcas.php">Aquí</a></p>
				</div>
				<input type="hidden" name="id_usuario" value="<?php echo $_SESSION['id']; ?>">
				<button type="submit" class="btn btn-primary">Insertar</button>
			</form>
		</div>
		<div class="registros">
			<table class="tabla">
				<thead>
					<tr>
						<th>ID</th>
						<th>EMPRESA</th>
						<th>USUARIO</th>
						<th>STATUS</th>
						<th class="editar">APROBAR</th>
						<th class="editar">RECHAZAR</th>
					</tr>
				</thead>
				<tbody>
					<?php 
						$ch = curl_init(); 
						curl_setopt($ch, CURLOPT_URL, URL_API."autorizaciones");
						curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
						$output = json_decode(curl_exec($ch)); 
						curl_close($ch); 
						foreach ($output as $o) {
					?>
					<tr>
						<td><?php echo $o->id ?></td>
						<td><?php echo $o->marca->nombre ?></td>
						<td><?php echo $o->usuario->email ?></td>
						<td>Sin aprobar</td>
						<?php  if($_SESSION['rol']=='1' or $_SESSION['rol']=='2' ){ ?>
						<td class="aprobar"><a href="api/aprobarmarca/<?php echo $o->id ?>"  onclick="return confirm('¿Seguro de aprobar?');"><i class="fa fa-check fa-2x aprobar" aria-hidden="true"></i></a></td>
						<td class="rechazar"><a href="api/rechazarmarca/<?php echo $o->id ?>"  onclick="return confirm('¿Seguro de rechazar?');"><i class="fa fa-times fa-2x aprobar" aria-hidden="true"></i></a></td>
						<?php }else{ ?>
						<td class="aprobar"></td>
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
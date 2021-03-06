<?php 
include("auth.php");
include('header.php'); ?>
	<div id="contenido">
		<h1 class="title-general" id="marca"><i class="fa fa-building fa-fw"></i> Tipos de comida</h1>
		<!--<div class="add-new-record">Insertar nuevo registro<i class="fa fa-plus fa-fw"></i></div>-->
		<div class="formulario" style="   width: 48%;display: block;padding-right: 2%;">
		<?php 
			$ch = curl_init(); 
			curl_setopt($ch, CURLOPT_URL, URL_API."tiposdecomida/".$_GET['id']); 
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
			$output = json_decode(curl_exec($ch)); 
			curl_close($ch); 
		?>
			<form class='validation-form'  action="api/update/tiposdecomida" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label>Nombre</label>
					<input type="text" class="form-control" placeholder="Nombre" name="nombre" value="<?php echo $output->nombre ?>" >
					<input type="hidden" class="form-control" placeholder="Nombre" name="id" value="<?php echo $_GET['id'] ?>">
				</div>
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
						curl_setopt($ch, CURLOPT_URL, URL_API."tiposdecomida"); 
						curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
						$output = json_decode(curl_exec($ch)); 
						curl_close($ch); 
						foreach ($output as $o) {
					?>
					<tr>
						<th><?php echo $o->id ?></th>
						<th><?php echo $o->nombre ?></th>
						<td class="editar"><a href="editar-tiposdecomida.php?id=<?php echo $o->id ?>"><i class="fa fa-pencil fa-fw fa-2x"></i></a></td>
						<td class="eliminar"><a href="api/delete/tiposdecomida/<?php echo $o->id ?>"  onclick="return confirm('¿Seguro de eliminar?');"><i class="fa fa-close fa-fw fa-2x"></i></a></td>
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
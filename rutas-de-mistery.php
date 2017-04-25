<?php 
include("auth.php");
include('header.php'); ?>
	<div id="contenido">
		<h1 class="title-general" id="marca"><i class="fa fa-building fa-fw"></i> Rutas de Mistery</h1>
		<div class="formulario">
			<form class='validation-form'  action="api/insert/categorias" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label for="exampleInputEmail1">Nombre</label>
					<input type="text" class="form-control" placeholder="Nombre" name="nombre" minlength="2" type="text" required>
				</div>
				<button type="submit" class="btn btn-primary">Insertar</button>
			</form>
		</div>
		<div class="registros">
			<table class="tabla">
				<thead>
					<tr>
						<th>ID</th>
						<th>FECHA</th>
						<th>MARCA</th>
						<th>SUCURSAL</th>
						<th>DOMICILIO</th>
						<th>COLONIA</th>
						<th>REFERENCIA</th>
						<th>TELEFONO</th>
						<th class="editar">DETALLES</th>
						<th class="editar tac">ETAPA 1</th>
						<th class="editar tac">ETAPA 2</th>
						<th class="editar tac">ETAPA 3</th>
						<th class="editar">COMPLETAR</th>
					</tr>
				</thead>
				<tbody>
					<?php 
						$ch = curl_init(); 
						curl_setopt($ch, CURLOPT_URL, URL_API."rutas_mistery/".$_SESSION['id']); 
						curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
						$output = json_decode(curl_exec($ch)); 
						curl_close($ch); 
						foreach ($output as $o) {
					?>
					<tr>
						<td><?php echo $o->id ?></td>
						<td><?php echo $o->fecha_inicio ?></td>
						<td><?php echo $o->marca->nombre ?></td>
						<td><?php echo $o->sucursal->nombre ?></td>
						<td><?php echo $o->sucursal->calle." ".$o->sucursal->no_int." ".$o->sucursal->no_ext ?></td>
						<td><?php echo $o->sucursal->colonia ?></td>
						<td><?php echo $o->sucursal->referencia ?></td>
						<td><?php echo $o->sucursal->telefono ?></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
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
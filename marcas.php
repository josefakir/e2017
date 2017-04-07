<?php 
include("auth.php");
include('header.php'); ?>
	<div id="contenido">
		<h1 class="title-general" id="marca"><i class="fa fa-building fa-fw"></i> Marcas</h1>
		<div class="add-new-record">Insertar nuevo registro<i class="fa fa-plus fa-fw"></i></div>
		<div class="formulario">
			<form class='validation-form'  action="api/insert/marcas" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label for="exampleInputEmail1">Nombre</label>
					<input type="text" class="form-control" placeholder="Nombre" name="nombre" minlength="2"  required>
				</div>
				<div class="form-group">
				<select name="id_categoria" id="" style="width: 100%" >
						<option value="">Categoría</option>
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
				<select name="id_categoria_vive" id="" style="width: 100%" >
						<option value="">Categoría Vive</option>
						<?php 
							$ch = curl_init(); 
							curl_setopt($ch, CURLOPT_URL, URL_API."categoriasvive"); 
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
				<select name="id_proyecto" id="" style="width: 100%" >
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
				<div class="form-group">
				<select name="id_tipoDeComida" id="" style="width: 100%" >
						<option value="">Tipo de comida</option>
						<?php 
							$ch = curl_init(); 
							curl_setopt($ch, CURLOPT_URL, URL_API."tiposdecomida"); 
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
					<label for="exampleInputEmail1">Web</label>
					<input type="text" class="form-control" placeholder="Web" name="web" minlength="2" required>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Reseña</label>
					<textarea class="form-control" placeholder="Reseña" name="resena" minlength="2" trequired></textarea>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Extracto</label>
					<input type="text" class="form-control" placeholder="Extracto" name="extracto" minlength="2" required>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Imagen</label>
					<input type="file" class="form-control" placeholder="imagen" name="imagen" minlength="2"  required>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Autor</label>
					<input type="text" class="form-control" placeholder="autor" name="autor" minlength="2" required>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">friendlyUrl</label>
					<input type="text" class="form-control" placeholder="friendlyUrl" name="friendlyUrl" minlength="2"  required>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">¿Qué lo hace especial?</label>
					<input type="text" class="form-control" placeholder="especial" name="especial" minlength="2"required>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Url vimeo</label>
					<input type="text" class="form-control" placeholder="vimeo" name="vimeo" minlength="2" required>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Logo Desclub</label>
					<input type="file" class="form-control" placeholder="logoDesclub" name="logoDesclub">
				</div>
				<input type="hidden" name="autorizadaLead" value="false">

				<button type="submit" class="btn btn-primary">Insertar</button>
			</form>
		</div>
		<div class="registros">
			<table class="tabla">
				<thead>
					<tr>
						<th>ID</th>
						<th>NOMBRE</th>
						<th>WEB</th>
						<th>EXTRACTO</th>
						<th class="editar">EDITAR</th>
						<th class="elimilnar">ELIMINAR</th>
					</tr>
				</thead>
				<tbody>
					<?php 
						$ch = curl_init(); 
						curl_setopt($ch, CURLOPT_URL, URL_API."marcas"); 
						curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
						$output = json_decode(curl_exec($ch)); 
						curl_close($ch); 
						foreach ($output as $o) {
					?>
					<tr>
						<th><?php echo $o->id ?></th>
						<th><?php echo $o->nombre ?></th>
						<th><?php echo $o->web ?></th>
						<th><?php echo $o->extracto ?></th>
						<td class="editar"><a href="editar-marcas.php?id=<?php echo $o->id ?>"><i class="fa fa-pencil fa-fw fa-2x"></i></a></td>
						<td class="eliminar"><a href="api/delete/marcas/<?php echo $o->id ?>"  onclick="return confirm('¿Seguro de eliminar?');"><i class="fa fa-close fa-fw fa-2x"></i></a></td>
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
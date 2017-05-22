<?php 
include("auth.php");
include('header.php'); ?>
	<div id="contenido">
		<h1 class="title-general" id="marca"><i class="fa fa-building fa-fw"></i> Marcas</h1>
		<div class="add-new-record">Insertar nuevo registro<i class="fa fa-plus fa-fw"></i></div>
		<div class="formulario">
			<form class='validation-form'  action="api/insert/marcas" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label>Nombre</label>
					<input type="text" class="form-control" placeholder="Nombre" name="nombre" required>
				</div>
				<div class="form-group">
				<label>Categoría</label>
				<select name="id_categoria" id="select_id_categoria" style="width: 100%" required>
				
						<option value="">Seleccione</option>
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
				<label>Categoría VIVE</label>
				<select name="id_categoria_vive" id="" style="width: 100%" required>
						<option value="">Seleccione</option>
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
				<label>Taxonomías</label>
					<input type="text" class="form-control" placeholder="Taxonomías separadas por coma" name="taxonomias">
				</div>
				<div class="form-group" id="esconder_tipo_de_comida">
				<label>Tipo de comida</label>
				<select name="id_tipoDeComida" id="" style="width: 100%" >
					<option value="">Seleccione</option>
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
				<div class="form-group" required>
					<label>Web</label>
					<input type="text" class="form-control" placeholder="Web" name="web" required>
				</div>
				<div class="form-group" required>
					<label>Reseña</label>
					<textarea class="form-control" placeholder="Reseña" name="resena" trequired></textarea>
				</div>
				<div class="form-group" required>
					<label>Extracto</label>
					<input type="text" class="form-control" placeholder="Extracto" name="extracto" required>
				</div>
				<div class="form-group" required>
					<label>Imagen</label>
					<input type="file" class="form-control" placeholder="imagen" name="imagen"  required>
				</div>
				<div class="form-group">
					<label>Autor</label>
					<input type="text" class="form-control" placeholder="autor" name="autor">
				</div>
				<div class="form-group" required>
					<label>friendlyUrl</label>
					<input type="text" class="form-control" placeholder="friendlyUrl" name="friendlyUrl"  required>
				</div>
				<div class="form-group">
					<label>¿Qué lo hace especial?</label>
					<input type="text" class="form-control" placeholder="especial" name="especial">
				</div>
				<div class="form-group">
					<label>Url vimeo</label>
					<input type="text" class="form-control" placeholder="vimeo" name="vimeo">
				</div>
				<div class="form-group">
					<label>Logo Desclub</label>
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
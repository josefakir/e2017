<?php 
include("auth.php");
include('header.php'); ?>
	<div id="contenido">
		<h1 class="title-general" id="marca"><i class="fa fa-building fa-fw"></i> Marcas</h1>
		<!--<div class="add-new-record">Insertar nuevo registro<i class="fa fa-plus fa-fw"></i></div>-->
		<div class="formulario" style="   width: 48%;display: block;padding-right: 2%;">
			<?php 
				$ch = curl_init(); 
				curl_setopt($ch, CURLOPT_URL, URL_API."marcas/".$_GET['id']); 
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
				$output = json_decode(curl_exec($ch)); 
				$marca = $output;
				curl_close($ch); 
			?>
			<form class='validation-form'  action="api/update/marcas" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label for="exampleInputEmail1">Nombre</label>
					<input type="text" class="form-control" placeholder="Nombre" name="nombre" minlength="2"  required value="<?php echo $marca->nombre ?>">
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
						<option value="<?php echo $o->id ?>" <?php if($o->id==$marca->id_categoria){ echo " selected "; } ?>><?php echo $o->nombre ?></option>
								<?php
							}
						?>
				</select>
				</div>
				<div class="form-group">
				<label for="exampleInputEmail1">Taxonomías</label>
					<input type="text" class="form-control" placeholder="Taxonomías separadas por coma" name="taxonomias" value="<?php echo $marca->taxonomias ?>">
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
						<option value="<?php echo $o->id ?>" <?php if($o->id==$marca->id_tipoDeComida){ echo " selected "; } ?>><?php echo $o->nombre ?></option>
								<?php
							}
						?>
				</select>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Web</label>
					<input type="text" class="form-control" placeholder="Web" name="web" minlength="2" required value="<?php echo $marca->web ?>">
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Reseña</label>
					<textarea class="form-control" placeholder="Reseña" name="resena" minlength="2" required><?php echo $marca->resena ?></textarea>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Extracto</label>
					<input type="text" class="form-control" placeholder="Extracto" name="extracto" minlength="2" required value="<?php echo $marca->extracto ?>">
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Imagen</label>
					<input type="file" class="form-control" placeholder="imagen" name="imagen">
				</div>
				<img style="width: 100px" src="api/<?php echo $marca->imagen ?>" alt="">
				<div class="form-group">
					<label for="exampleInputEmail1">Autor</label>
					<input type="text" class="form-control" placeholder="autor" name="autor" minlength="2" required value="<?php echo $marca->autor ?>">
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">friendlyUrl</label>
					<input type="text" class="form-control" placeholder="friendlyUrl" name="friendlyUrl" minlength="2"  required value="<?php echo $marca->friendlyUrl ?>">
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">¿Qué lo hace especial?</label>
					<input type="text" class="form-control" placeholder="especial" name="especial" minlength="2" required value="<?php echo $marca->especial ?>">
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Url vimeo</label>
					<input type="text" class="form-control" placeholder="vimeo" name="vimeo" minlength="2" required value="<?php echo $marca->vimeo ?>">
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Logo Desclub</label>
					<input type="file" class="form-control" placeholder="logoDesclub" name="logoDesclub">
				</div>
				<img style="width: 100px; margin-bottom: 20px" src="api/<?php echo $marca->logoDesclub ?>" alt="">
				<input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
				<button type="submit" class="btn btn-primary">Actualizar</button>
			</form>
		</div>
		<div class="registros" style="width: 50%">
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
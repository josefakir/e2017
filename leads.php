<?php 
include("auth.php");
include('header.php'); ?>
	<div id="contenido">
		<h1 class="title-general" id="marca"><i class="fa fa-building fa-fw"></i> Administración de Leads</h1>
		<div class="add-new-record">Insertar nuevo registro<i class="fa fa-plus fa-fw"></i></div>
		<div class="formulario">
			<form class='validation-form'  action="api/insert/leads" method="post" enctype="multipart/form-data">
				<div class="form-group">
				<label>Marca</label>
				<select name="id_marca" id="" style="width: 100%" required>
						<option value="">Seleccione</option>
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
						<?php  if($_SESSION['rol']=='1' or $_SESSION['rol']=='2' ){ ?>
						<?php if($o->status=='1'){ ?>
						<td class="aprobar"><a href="#" class="btn_aprobar_lead" rel="<?php echo $o->marca->id ?>" rel-categoria="<?php echo $o->marca->id_categoria?>" rel-lead="<?php echo $o->id ?>" rel-importancia="<?php echo $o->marca->importancia ?>" rel-presencia="<?php echo $o->marca->presencia ?>" rel-comentarios="<?php echo $o->marca->comentarios ?>"><i class="fa fa-check fa-2x aprobar" aria-hidden="true"></i></a></td>
						<td class="rechazar"><a href="#" class="btn_rechazar_lead" rel="<?php echo $o->marca->id?>" rel-categoria="<?php echo $o->marca->id_categoria?>" rel-lead="<?php echo $o->id ?>"><i class="fa fa-close fa-fw fa-2x"></i></a></td>
						<?php }else{ ?>
						<td class="aprobar"><i class="fa fa-check fa-2x aprobar" aria-hidden="true"></i></td>
						<td class="rechazar"><i class="fa fa-close fa-fw fa-2x"></i></td>

						<?php } ?>
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
	<div id="overlay_aprobarlead">
		<div class="container">
			<div class="row">
				<div class="col-md-12" style="background: #fff; margin-top: 100px; height: 500px; overflow-y: scroll;">
					<a href="#" class="cerraroverlay"><i class="fa fa-times-circle fa-2x" aria-hidden="true"></i></a>
					<form class='validation-form2'  action="api/update/aprobarlead" method="post">
					<h2 style="margin-top: 5px">Aprobar Lead:</h2>
						<div class="form-group">
						<label>Categoría</label>
						<select name="id_categoria" style="width: 100%" id="select_categoria_aprobar">
						
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
						<label>Importancia</label>
						<select name="importancia" style="width: 100%" id="select_importancia_aprobar">
							<option value="">Seleccione</option>						
							<option value="A">A</option>						
							<option value="AA">AA</option>						
							<option value="AAA">AAA</option>						
							<option value="VIP">VIP</option>						
						</select>
						</div>
						<div class="form-group">
						<label>Presencia</label>
						<select name="presencia" style="width: 100%" id="select_presencia_aprobar">
							<option value="">Seleccione</option>						
							<option value="Local">Local</option>						
							<option value="Nacional">Nacional</option>						
							<option value="Regional">Regional</option>						
						</select>
						</div>
						<div class="form-group">
						<label>Comentarios</label>
							<input type="text" class="form-control" placeholder="Comentarios" name="comentarios" id="input_comentarios_aprobar">
						</div>
						<input type="hidden" id="id_marca" name="id_marca">
						<input type="hidden" id="id_lead" name="id_lead">
						<button type="submit" class="btn btn-primary">Aprobar</button>
						<p>&nbsp;</p>
					</form>
				</div>
			</div>
		</div>
	</div>
	<div id="overlay_rechazarlead">
		<div class="container">
			<div class="row">
				<div class="col-md-12" style="background: #fff; margin-top: 100px; height: 500px; overflow-y: scroll;">
					<a href="#" class="cerraroverlay"><i class="fa fa-times-circle fa-2x" aria-hidden="true"></i></a>
					<form class='validation-form2'  action="api/update/rechazarlead" method="post">
					<h2 style="margin-top: 5px">Rechazar Lead:</h2>
					<div class="form-group">
						<label>Motivo</label>
						<select name="motivo" style="width: 100%" id="">
							<option value="">Seleccione</option>						
							<option value="Asignado a otro ejecutivo">Asignado a otro ejecutivo</option>						
							<option value="Duplicado">Duplicado</option>						
							<option value="Giro denegado">Giro denegado</option>						
						</select>
						</div>
						<div class="form-group">
						<label>Comentarios</label>
							<input type="text" class="form-control" placeholder="Comentarios" name="comentarios" id="input_comentarios_aprobar">
						</div>
						<input type="hidden" id="id_marca_r" name="id_marca">
						<input type="hidden" id="id_lead_r" name="id_lead">
						<button type="submit" class="btn btn-primary">Rechazar</button>
						<p>&nbsp;</p>
					</form>
				</div>
			</div>
		</div>
	</div>
<?php include('footer.php') ?>
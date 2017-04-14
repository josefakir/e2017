<?php 
include("auth.php");
include('header.php'); ?>
	<div id="contenido">
		<h1 class="title-general" id="marca"><i class="fa fa-building fa-fw"></i> Asignar promoción a proyecto</h1>
		<!--<div class="add-new-record">Insertar nuevo registro<i class="fa fa-plus fa-fw"></i></div>-->
		<div class="formulario" style="   width: 98%;display: block;padding-right: 2%;">
		<?php 
			$ch = curl_init(); 
			curl_setopt($ch, CURLOPT_URL, URL_API."promocion/".$_GET['id']); 
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
			$output = json_decode(curl_exec($ch)); 
			$p = $output[0];
			curl_close($ch); 
		?>
			<form class='validation-form'  action="api/update/promocion" method="post" enctype="multipart/form-data">
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
						<option value="<?php echo $o->id ?>" <?php if($o->id == $p->id_proyecto){ echo ' selected '; } ?>><?php echo $o->nombre ?></option>
								<?php
							}
						?>
				</select>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Efectivo</label>
					<input type="text" class="form-control" placeholder="Efectivo" name="efectivo" minlength="2" required value="<?php echo $p->efectivo ?>">
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Tarjeta</label>
					<input type="text" class="form-control" placeholder="Tarjeta" name="tarjeta" minlength="2" required value="<?php echo $p->tarjeta ?>">
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Promo</label>
					<input type="text" class="form-control" placeholder="Promo" name="promo" minlength="2" required value="<?php echo $p->promo ?>">
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Detalle Promo</label>
					<input type="text" class="form-control" placeholder="Detalle Promo" name="detalle_promo" minlength="2" required value="<?php echo $p->detalle_promocion ?>">
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Restricciones</label>
					<input type="text" class="form-control" placeholder="Restricciones" name="restricciones" minlength="2" required value="<?php echo $p->restricciones ?>">
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Fecha de Inicio</label>
					<input type="text" class="form-control datepicker" placeholder="Fecha de inicio" name="fecha_inicio" minlength="2" required value="<?php echo $p->inicio_actividades ?>">
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Fecha de fin</label>
					<input type="text" class="form-control datepicker" placeholder="Fecha de fin" name="fecha_fin" minlength="2" required value="<?php echo $p->fin_actividades ?>">
				</div>
				<input type="hidden" name="id_marca" value="<?php echo $_GET['id_marca'] ?>">
				<input type="hidden" name="id_lead" value="<?php echo $_GET['id_lead'] ?>">
				<input type="hidden" name="id_promocion" value="<?php echo $_GET['id'] ?>">
				<button type="submit" class="btn btn-primary">Actualizar</button>
				<p class="tac error"><?php echo htmlentities(base64_decode($_GET['m'])) ?></p>
			</form>
		</div>
		
		<div class="clearfix"></div>
		<p>&nbsp;</p>
	</div>
<?php include('footer.php') ?>
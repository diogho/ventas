<?php
include ('controlador/cusuario.php');
?>
	
	<div id="campos" style="width:500px; margin: 0 auto 0">
		<h1 class="page-header">DATOS DE USUARIO</h1>
		<form name="formUsuario" method="post" action="">		
			<div class="row">
				<div class="form-group col-lg-6">
					<label for="male" class="control-label">Documento</label>
					<input name="doc" type="text" class="form-control">
				</div>
				<div class="form-group col-lg-6">
					<label for="male" class="control-label">Nombre</label>
					<input name="nom" type="text" class="form-control">		
				</div>	
			</div>
			<div class="row">
				<div class="form-group col-lg-6">
					<label for="male" class="control-label">Teléfono</label>
					<input name="tel" type="text" class="form-control">		
				</div>
				<div class="form-group col-lg-6">
					<label for="male" class="control-label">Dirección</label><br>
					<input name="dir" type="text" class="form-control">		
				</div>
			</div>
			<div class="row">
				<div class="form-group col-lg-6">
					<label for="label" class="control-label">Perfil</label>	
					<select name="idperf" id="" class="form-control">
						<?php
							$selperfil = $ins->selperf();
							for ($i=0; $i < count($selperfil); $i++)
							{
						?>
						<option value="<?php echo $selperfil[$i]['id']; ?>"> <?php echo $selperfil[$i]['nombre']; ?> </option>
						<?php
							 } 
						?>
					</select>	
				</div>	
			</div>
			<div class="row">
				<div class="form-group col-lg-6">
					<input type="submit" value="Enviar" class="btn btn-primary">		
				</div>
			</div>
		</form>	
	</div>
	<div style="width:700px;  margin: 20px auto">
		<table class="table">
			<tr>
				<th>Documento</th>
				<th>Nombre</th>
				<th>Telefono</th>
				<th>Dirección</th>
				<th>Perfil</th>
			</tr>
			<?php
				$selusuario = $ins->selusu();
				for ($i=0; $i < count($usuarios); $i++) 
				{ 
			?>	
			<tr>
				<td><?php echo $selusuario[$i]['documento']; ?></td>
				<td><?php echo $selusuario[$i]['nombre']; ?></td>
				<td><?php echo $selusuario[$i]['telefono']; ?></td>
				<td><?php echo $selusuario[$i]['direccion']; ?></td> 
				<td><?php echo $selusuario[$i]['nomper']; ?></td> 
			</tr>
			<?php 
				}
			 ?>
		</table>
	</div>

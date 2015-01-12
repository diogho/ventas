<?php
include ('controlador/cusuario.php');
?>
	<h1 style="text-align:center">DATOS DE USUARIO</h1>
	<form name="formUsuario" method="post" action="">
		<div id="campos" style="width:300px; height: 100px;  margin: 0 auto 0">
			<div style="float:left">
				<label for="male">Documento</label><br>
				<label for="male">Nombre</label><br>
				<label for="male">Teléfono</label><br>
				<label for="male">Dirección</label><br>
				<label for="">Perfil</label>
			</div>

			<div style="float:right">
				<input name="doc" type="text" class="form-control"><br>
				<input name="nom" type="text" class="form-control"><br>
				<input name="tel" type="text" class="form-control"><br>
				<input name="dir" type="text" class="form-control"><br>
				<select name="" id="" class="form-control">
					<?php
						$selperfil = 20;
						for ($i=0; $i < $selperfil; $i++) { 
					?>
					<option value="<?php echo $i; ?>"> <?php echo $i; ?> </option>
					<?php
						 } 
					?>
				</select>
			</div>
		</div>
		<div style="width:300px; height: 100px;  margin: 0 auto 0">
			<input name="enviar" type="submit" value="ENVIAR">
		</div>
	</form>
	<center>
	<div style="width:700px;  margin: 0 auto">
	<table class="table">
		<tr>
			<th>Documento</th>
			<th>Nombre</th>
			<th>Telefono</th>
			<th>Dirección</th>
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
		</tr>
		<?php 
			}
		 ?>
	</table>
	</center>
	</div>
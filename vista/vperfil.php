<?php
include ('controlador/cperfil.php');
?>
	<h1 style="text-align:center">DATOS DE PERFIL</h1>
	<form name="formUsuario" method="post" action="">
		<div id="campos" style="width:300px; height: 100px;  margin: 0 auto 0">
			<div style="float:left">
				<!--<label for="male">Número</label><br>-->
				<label for="male">Nombre</label><br>
			</div>

			<div style="float:right">
				<!--<input name="idperf" type="text" class="form-control"><br>-->
				<input name="nom" type="text" class="form-control"><br>
				<!--<select name="" id="" class="form-control">
					<?php
						$selperfil = $ins->selperf();
						for ($i=0; $i < count($perfiles); $i++)
						{
					?>
					<option value="<?php echo $selperfil[$i]['id']; ?>"> <?php echo $selperfil[$i]['nombre']; ?> </option>
					<?php
						 } 
					?>
				</select>-->
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
			<th>Número</th>
			<th>Nombre</th>
		</tr>
		<?php
			$selperfil = $ins->selperf();
			for ($i=0; $i < count($perfiles); $i++) 
			{ 
		?>	
		<tr>
			<td><?php echo $selperfil[$i]['id']; ?></td>
			<td><?php echo $selperfil[$i]['nombre']; ?></td>
		</tr>
		<?php 
			}
		 ?>
	</table>
	</center>
	</div>
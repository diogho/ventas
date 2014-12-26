<?php
include ('controlador/cusuario.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset='utf-8'>
	<title></title>
</head>
<body>
	<h1 style="text-align:center">DATOS DE USUARIO</h1>
	<form name="formUsuario" method="post" action="">
		<div id="campos" style="width:300px; height: 100px;  margin: 0 auto 0">

			<div style="float:left">
				<label for="male">Documento</label><br>
				<label for="male">Nombre</label><br>
				<label for="male">Teléfono</label><br>
				<label for="male">Dirección</label><br>
			</div>

			<div style="float:right">
				<input name="doc" type="text"><br>
				<input name="nom" type="text"><br>
				<input name="tel" type="text"><br>
				<input name="dir" type="text"><br>
			</div>
		</div>
		<div style="width:300px; height: 100px;  margin: 0 auto 0">
			<input name="enviar" type="submit" value="ENVIAR">
		</div>
	</form>
</body>
</html>
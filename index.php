<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>Pagina Principal</h1>
	<button><a href="index.php?var=1">Insertar usuario</a></button>
	<?php 
		$var = isset($_GET['var']) ? $_GET['var']:NULL;
		if ($var==1) {
			include('vista/vusuario.php');
		}
	?>
	
</body>
</html>
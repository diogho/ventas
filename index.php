<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
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
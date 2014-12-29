<?php
	include('modelo/musuario.php');
	$ins = new musuario();
	$doc=isset($_POST['doc']) ? $_POST['doc']:NULL;
	$nom=isset($_POST['nom']) ? $_POST['nom']:NULL;
	$tel=isset($_POST['tel']) ? $_POST['tel']:NULL;
	$dir=isset($_POST['dir']) ? $_POST['dir']:NULL;
	
	$usuarios = $ins->selusu();

	if($doc&&$nom&&$tel&&$dir)
	{
		$ins -> insusu($doc,$nom,$tel,$dir);
	}
?>
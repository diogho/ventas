<?php
	include('modelo/mperfil.php');
	$ins = new mperfil();
	//$idperf=isset($_POST['idperf']) ? $_POST['idperf']:NULL;
	$nom=isset($_POST['nom']) ? $_POST['nom']:NULL;
	
	$perfiles = $ins->selperf();

	if($nom)
	{
		$ins -> insperf($nom);
	}
?>
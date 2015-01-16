<?php
	include('modelo/musuario.php');
	$ins = new musuario();
	$doc=isset($_POST['doc']) ? $_POST['doc']:NULL;
	$nom=isset($_POST['nom']) ? $_POST['nom']:NULL;
	$tel=isset($_POST['tel']) ? $_POST['tel']:NULL;
	$dir=isset($_POST['dir']) ? $_POST['dir']:NULL;
	$idperf=isset($_POST['idperf']) ? $_POST['idperf']:NULL;

	$usuarios = $ins->selusu();
	$perfiles = $ins->selperf();

	if($doc&&$nom&&$tel&&$dir)
	{
		$ins -> insusu($doc,$nom,$tel,$dir,$idperf);
	}

	/*
	$nom=isset($_POST['nomperf']) ? $_POST['nomperf']:NULL;
	

	if($idperf&&$nomperf)
	{
		$ins -> insperf($idperf,$nomperf);
	}*/
?>
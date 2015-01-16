<?php 
	include('controlador/conexion.php');
	class mperfil
	{
		function mperfil(){}
		
		
		function insperf($nombre)
		{
			//$sql = "INSERT INTO tbperfil (id,nombre) VALUES ('".$id."','".$nombre."');";
			$sql = "INSERT INTO tbperfil (nombre) VALUES ('".$nombre."');";
			$this->cons($sql);
		}
		function selperf()
		{
			$sql = "SELECT * FROM tbperfil;";
			$conexionBD = new conexion();
			$conexionBD->conectarBD();
			$data = $conexionBD->ejeCon($sql,0);
			return $data;
		}
		function cons($c)
		{
			$conexionBD = new conexion();
			$conexionBD->conectarBD();
			$conexionBD->ejeCon($c,1);
		}
	}
?>
<?php 
	include('controlador/conexion.php');
	class musuario
	{
		function musuario(){}
		
		
		function insusu($documento,$nombre,$telefono,$direccion,$idperf)
		{
			$sql = "INSERT INTO tbusuario (documento,nombre,telefono,direccion,idperfil) VALUES ('".$documento."','".$nombre."','".$telefono."','".$direccion."','".$idperf."');";
			$this->cons($sql);
		}
		function selusu()
		{
			$sql = "SELECT * FROM tbusuario;";
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
		function selperf()
		{
			$sql = "SELECT * FROM tbperfil;";
			$conexionBD = new conexion();
			$conexionBD->conectarBD();
			$data = $conexionBD->ejeCon($sql,0);
			return $data;
		}
	}
?>
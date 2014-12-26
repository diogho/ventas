<?php 
	include('controlador/conexion.php');
	class musuario
	{
		function musuario(){}
		
		
		function insusu($documento,$nombre,$telefono,$direccion)
		{
			$sql = "INSERT INTO tbusuario (documento,nombre,telefono,direccion) VALUES ('".$documento."','".$nombre."','".$telefono."','".$direccion."');";
			$this->cons($sql);
		}
		function cons($c)
		{
			$conexionBD = new conexion();
			$conexionBD->conectarBD();
			$conexionBD->ejeCon($c,1);
		}
	}
?>
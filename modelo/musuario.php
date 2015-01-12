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
		function selusu()
		{
			$sql = "SELECT * FROM tbusuario;";
			$conexionBD = new conexion();
			$conexionBD->conectarBD();
			$data = $conexionBD->ejeCon($sql,0);
			return $data;
		}
		function selperfil()
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
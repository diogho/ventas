<?php 
	include('../controlador/conexion.php');
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
			$sql = "SELECT usu.documento, usu.nombre, usu.telefono, usu.direccion, per.nombre as nomper FROM tbusuario as usu 
						INNER JOIN tbperfil as per ON usu.idperfil=per.id;";
			$conexionBD = new conexion();
			$conexionBD->conectarBD();
			$data = $conexionBD->ejeCon($sql,0);
			return $data;
		}

		function selusurep()
		{			
			$sql = "SELECT tbusuario.idperfil, tbperfil.nombre, COUNT(*) FROM tbusuario inner join tbperfil on tbusuario.idperfil=tbperfil.id GROUP BY idperfil";
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
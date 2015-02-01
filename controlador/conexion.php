<?php
	class conexion {
		var $link;
		var $resultado;
		var $acentos;
		var $mysqli;

		function conexion() {} // Constructor para inicializar clase
		function conectarBD() {
			include_once("configuracion.php");

			//$this -> link = mysql_connect ($serv_bd, $usu_bd, $pass_bd);

			$this -> mysqli = new mysqli(HOST, USER, PASSWORD, DATABASE);
			
			if($this -> mysqli->connect_error) 
			{
				die("<h4> No se logro conectar</h4>");
			}
			/*
			$bd2 = mysql_select_db($bd);
			if(!$bd2) {
				echo "No se puede conectar a la BD";
			}
			*/
			$acentos = $this -> mysqli->query("SET NAMES 'utf8'");
		}
		function desconectarBD() {
			mysqli_close($mysqli);
		}
		function ejeCon($con, $op) {
			$this -> resultado = $this -> mysqli->query($con) or die("La consulta fallo: ". $this -> mysqli->error);
			$res = $this -> resultado->fetch_assoc();

			if($op == 0) {
				while ($linea = $this -> resultado->fetch_assoc()) {
					$arrayResultado[] = $linea;
				}
			} else {
				$arrayResultado[] = 0;
			}
			$resarr = isset ($arrayResultado) ? $arrayResultado: NULL;
			if($resarr) {
				return $arrayResultado;
			}
		}
	}
?>
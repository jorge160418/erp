<?php 
	require_once("Conexion.php");

	class actividad extends Conexion {

		public function alta($registro,$IDusuario,$movimiento_act,$movimiento_tabla){
			$this->sentencia = "INSERT INTO actividad VALUES(null,'$registro',$IDusuario,'$movimiento_act','$movimiento_tabla')";
			$this->ejecutarSentencia();
		}

		public function consulta(){
			$this->sentencia = "SELECT * FROM actividad";
			return $this->obtenerSentencia();
		}
	}
 ?>
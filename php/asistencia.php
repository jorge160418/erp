<?php 
	
	require_once("Conexion.php");

	class asistencia extends Conexion {

		public function alta($Fecha,$IDempleado,$Hora){
			$this->sentencia = "INSERT INTO asistencia VALUES(null,'$Fecha',$IDempleado,'$Hora')";
			$this->ejecutarSentencia();
		}

		public function consulta(){
			$this->sentencia = "SELECT * FROM asistencia";
			return $this->obtenerSentencia();
		}

		public function eliminar($id){
			$this->sentencia = "DELETE FROM asistencia WHERE IDasistencia=$id";
			$this->ejecutarSentencia();
		}
	}

 ?>
<?php 

	require_once("Conexion.php");

	class jornada extends Conexion {

		public function alta($hrs_trabajadas,$dias_trabajados,$pago_hora,$horas_extra,$bonos,$IDempleado){
			$this->sentencia = "INSERT INTO jornada VALUES(null,$hrs_trabajadas,$dias_trabajados,$pago_hora,$horas_extra,$bonos,$IDempleado)";
			$this->ejecutarSentencia();
		}

		public function consulta(){
			$this->sentencia = "SELECT * FROM jornada";
			return $this->obtenerSentencia();
		}
	}

 ?>
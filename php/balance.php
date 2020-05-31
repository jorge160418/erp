<?php 

	require_once("Conexion.php");

	class balance extends Conexion {

		public function alta($fechainicio,$fechafin,$total){
			$this->sentencia = "INSERT INTO balance VALUES(null,'$fechainicio','$fechafin',$total)";
			$this->ejecutarSentencia();
		}

		public function consulta(){
			$this->sentencia = "SELECT * FROM balance";
			return $this->obtenerSentencia();
		}

		public function eliminar($id){
			$this->sentencia = "DELETE FROM balance WHERE IDbalance=$id";
			$this->ejecutarSentencia();
		}

	}

 ?>
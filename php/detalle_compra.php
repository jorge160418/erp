<?php 

	require_once("Conexion.php");

	class detalle_compra extends Conexion {

		public function alta($IDmateriaprima,$IDcompra,$cantidad){
			$this->sentencia = "INSERT INTO detalle_compra VALUES(null,$IDmateriaprima,$IDcompra,$cantidad)";
			$this->ejecutarSentencia();
		}

		public function consulta(){
			$this->sentencia = "SELECT * FROM detalle_compra";
			return $this->obtenerSentencia();
		}
	}

 ?>
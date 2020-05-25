<?php 

	require_once("Conexion.php");

	class devoluciones extends Conexion {

		public function alta($fecha,$cantidad,$descripcion,$IDproducto){
			$this->sentencia = "INSERT INTO devoluciones VALUES(null,'$fecha',$cantidad,'$descripcion',$IDproducto)";
			$this->ejecutarSentencia();
		}

		public function consulta(){
			$this->sentencia = "SELECT * FROM devoluciones";
			return $this->obtenerSentencia();
		}
	}

 ?>
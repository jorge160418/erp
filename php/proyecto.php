<?php 

require_once("conexion.php");

class Proyecto extends Conexion{

	public function alta($nombre_pro,$tipo_pro,$IDempleado,$fecha_in,$fecha_fin,$descripcion){
		$this->sentencia = "INSERT INTO proyecto VALUES (null,'$nombre_pro','$tipo_pro','$IDempleado','$fecha_in','$fecha_fin','$descripcion')";
		$this->ejecutarSentencia();
	}

	public function consulta(){
		$this->sentencia = "SELECT * FROM proyecto";
		return $this->obtenerSentencia();
	}
}

 ?>
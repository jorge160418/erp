<?php 

require_once("conexion.php");

class Venta extends Conexion{

	public function alta($fecha,$IDcliente,$total,$tipo_pago){
		$this->sentencia = "INSERT INTO venta VALUES (null,'$fecha','$IDcliente','$total','$tipo_pago')";
		$this->ejecutarSentencia();
	}

	public function consulta(){
		$this->sentencia = "SELECT * FROM venta";
		return $this->obtenerSentencia();
	}
}

 ?>
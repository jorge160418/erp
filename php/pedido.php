<?php 

require_once("conexion.php");

class Pedido extends Conexion{

	public function alta($fecha,$IDcliente,$precio,$cantidad,$direccion,$IDproducto){
		$this->sentencia = "INSERT INTO pedido VALUES (null,'$fecha','$IDcliente','$precio','$cantidad','$direccion','$IDproducto')";
		$this->ejecutarSentencia();
	}

	public function consulta(){
		$this->sentencia = "SELECT * FROM pedido";
		return $this->obtenerSentencia();
	}
}

 ?>
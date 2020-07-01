<?php 

require_once("conexion.php");

class Pedido extends Conexion{

	public function alta($fecha,$IDcliente,$precio,$cantidad,$direccion,$IDproducto){
		$this->sentencia = "INSERT INTO pedido VALUES (null,'$fecha','$IDcliente','$precio','$cantidad','$direccion','$IDproducto')";
		$this->ejecutarSentencia();
	}

	public function consulta(){
	$this->sentencia = "SELECT c.nombre,c.apepatero,c.apematerno,p.nombre,p.descripcion,ped.fecha,ped.precio,ped.cantidad,ped.direccion FROM pedido ped,cliente c,producto p WHERE ped.IDcliente=c.IDcliente AND ped.IDproducto=p.IDproducto";
		return $this->obtenerSentencia();
	}
	public function eliminar($id){
		$this->sentencia = "DELETE FROM pedido WHERE IDpedido=$id";
		$this->ejecutarSentencia();
}
	public function obtenerCliente(){
			$this-> sentencia = "SELECT IDcliente,nombre,apepatero,apematerno FROM cliente ";
			$res = $this->obtenerSentencia();
			echo "<select name='cliente'>";
			while($fila = $res->fetch_assoc()){
				echo "<option value='".$fila["IDcliente"]."'> ".$fila["nombre"]." ".$fila["apepaterno"]." ".$fila["apematerno"]." </option>";
			}
			echo "</select>";
		}
		public function obtenerProducto(){
			$this-> sentencia = "SELECT IDproducto,nombre,descripcion FROM producto ";
			$res = $this->obtenerSentencia();
			echo "<select name='producto'>";
			while($fila = $res->fetch_assoc()){
				echo "<option value='".$fila["IDproducto"]."'> ".$fila["nombre"]."  ".$fila["descripcion"]." </option>";
			}
			echo "</select>";
		}
}

 ?>
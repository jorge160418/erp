<?php 

require_once("conexion.php");

class Pago extends Conexion{

	public function alta($IDempleado,$sal,$fecha_dep,$met_pag,$des){
		$this->sentencia = "INSERT INTO pago VALUES (null,'$IDempleado','$sal','$fecha_dep','$met_pag','$des')";
		$this->ejecutarSentencia();
	}

	public function consulta(){
		$this->sentencia = "SELECT e.nombre,e.appaterno,e.apmaterno, p.sal, p.fecha_dep, p.met_pag, p.des FROM empleado e, pago p WHERE p.IDempleado=e.IDempleado";
		return $this->obtenerSentencia();
	}
	public function eliminar($id){
		$this->sentencia = "DELETE FROM pago WHERE IDpago=$id";
		$this->ejecutarSentencia();
}
public function obtenerEmpleado(){
		$this-> sentencia = "SELECT IDempleado,nombre,appaterno,apmaterno FROM empleado ";
		$res = $this->obtenerSentencia();
		echo "<select name='empleado'>";
		while($fila = $res->fetch_assoc()){
			echo "<option value='".$fila["IDempleado"]."'> ".$fila["nombre"]." ".$fila["appaterno"]."  ".$fila["apmaterno"]." </option>";
		}
		echo "</select>";
	}
}

 ?>
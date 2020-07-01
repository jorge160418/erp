<?php 

require_once("conexion.php");

class Proyecto extends Conexion{

	public function alta($nombre_pro,$tipo_pro,$IDempleado,$fecha_in,$fecha_fin,$descripcion){
		$this->sentencia = "INSERT INTO proyecto VALUES (null,'$nombre_pro','$tipo_pro','$IDempleado','$fecha_in','$fecha_fin','$descripcion')";
		$this->ejecutarSentencia();
	}

	public function consulta(){
		$this->sentencia = "SELECT e.nombre,e.appaterno,e.apmaterno, p.nombre_pro,p.tipo_pro,p.fecha_in, p.fecha_fin, p.descripcion FROM proyecto p, empleado e WHERE p.IDempleado=e.IDempleado";
		return $this->obtenerSentencia();
	}
	public function eliminar($id){
		$this->sentencia = "DELETE FROM proyecto WHERE IDproyecto=$id";
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
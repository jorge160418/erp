<?php 

require_once("conexion.php");

class Remplazo extends Conexion{

	public function alta($IDmobiliario,$fecha,$costo,$descripcion){
		$this->sentencia = "INSERT INTO remplazo VALUES (null,'$IDmobiliario','$fecha','$costo','$descripcion')";
		$this->ejecutarSentencia();
	}

	public function consulta(){
		$this->sentencia = "SELECT m.nombre,m.descripcion, r.fecha,r.costo,r.descripcion FROM remplazo r, mobiliario m WHERE r.IDmobiliario=m.IDmobiliario";
		return $this->obtenerSentencia();
	}
	public function eliminar($id){
		$this->sentencia = "DELETE FROM remplazo WHERE IDremplazo=$id";
		$this->ejecutarSentencia();
}
public function obtenerMobiliario(){
		$this-> sentencia = "SELECT IDmobiliario,nombre,descripcion FROM mobiliario";
		$res = $this->obtenerSentencia();
		echo "<select name='mobiliario'>";
		while($fila = $res->fetch_assoc()){
			echo "<option value='".$fila["IDmobiliario"]."'> ".$fila["nombre"]." ".$fila["descripcion"]."  </option>";
		}
		echo "</select>";
	}
}

 ?>
<?php 

require_once("conexion.php");

class Mantenimiento extends Conexion{

	public function alta($fecha_man,$area,$IDmob,$costo_man,$IDempleado){
		$this->sentencia = "INSERT INTO mantenimiento VALUES (null,'$fecha_man','$area','$IDmob','$costo_man','$IDempleado')";
		$this->ejecutarSentencia();
	}

	public function consulta(){
		$this->sentencia = "SELECT m.nombre,m.descripcion,e.nombre,e.appaterno,e.apmaterno,man.fecha_man,man.area,man.costo_man FROM mantenimiento man,mobiliario m,empleado e WHERE man.IDmob=m.IDmobiliario AND man.IDcempleado=e.IDcempleado";
		return $this->obtenerSentencia();
	}
	public function eliminar($id){
		$this->sentencia = "DELETE FROM mantenimiento WHERE IDmantenimiento=$id";
		$this->ejecutarSentencia();
}
public function obtenerMobiliario(){
			$this-> sentencia = "SELECT IDmobiliario,nombre,descripcion FROM mobiliario ";
			$res = $this->obtenerSentencia();
			echo "<select name='mobiliario'>";
			while($fila = $res->fetch_assoc()){
				echo "<option value='".$fila["IDmobiliario"]."'> ".$fila["nombre"]." ".$fila["descripcion"]." </option>";
			}
			echo "</select>";
		}
		public function obtenerEmpleado(){
			$this-> sentencia = "SELECT IDempleado,nmbre,appaterno,apmaterno FROM empleado ";
			$res = $this->obtenerSentencia();
			echo "<select name='empleado'>";
			while($fila = $res->fetch_assoc()){
				echo "<option value='".$fila["IDempleado"]."'> ".$fila["nombre"]." ".$fila["appaterno"]." ".$fila["apmaterno"]."</option>";
			}
			echo "</select>";
		}
}

 ?>
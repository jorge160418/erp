<?php 
	
	require_once("Conexion.php");

	class asistencia extends Conexion {

		public function alta($Fecha,$IDempleado,$Hora){
			$this->sentencia = "INSERT INTO asistencia VALUES(null,'$Fecha',$IDempleado,'$Hora')";
			$this->ejecutarSentencia();
		}

		public function consulta(){
			$this->sentencia = "SELECT e.nombre,e.appaterno,e.apmaterno,e.cargo, a.fecha,a.hora FROM asistencia a, empleado e WHERE a.IDempleado=e.IDempleado";
			return $this->obtenerSentencia();
		}

		public function eliminar($id){
			$this->sentencia = "DELETE FROM asistencia WHERE IDasistencia=$id";
			$this->ejecutarSentencia();
		}
		public function obtenerEmpleado(){
		$this-> sentencia = "SELECT IDempleado,nombre,appaterno,apmaterno, cargo FROM empleado ";
		$res = $this->obtenerSentencia();
		echo "<select name='empleado'>";
		while($fila = $res->fetch_assoc()){
			echo "<option value='".$fila["IDempleado"]."'> ".$fila["nombre"]." ".$fila["appaterno"]."  ".$fila["apmaterno"]." ".$fila["cargo"]." </option>";
		}
		echo "</select>";
	}
	}

 ?>
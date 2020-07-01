<?php 

	require_once("Conexion.php");

	class jornada extends Conexion {

		public function alta($hrs_trabajadas,$dias_trabajados,$pago_hora,$horas_extra,$bonos,$IDempleado){
			$this->sentencia = "INSERT INTO jornada VALUES(null,$hrs_trabajadas,$dias_trabajados,$pago_hora,$horas_extra,$bonos,$IDempleado)";
			$this->ejecutarSentencia();
		}

		public function consulta(){
			$this->sentencia = "SELECT e.nombre,e.appaterno,e.apmaterno,e.puesto, j.hrs_trabajadas,j.dias_trabajados,j.pago_hora, j.horas_extra, j.bonos FROM jornada j, empleado e WHERE j.IDempleado=e.IDempleado";
			return $this->obtenerSentencia();
		}

		public function eliminar($id){
			$this->sentencia = "DELETE FROM jornada WHERE IDjornada=$id";
			$this->ejecutarSentencia();
		}
		public function obtenerEmpleado(){
		$this-> sentencia = "SELECT IDempleado,nombre,appaterno,apmaterno,puesto FROM empleado ";
		$res = $this->obtenerSentencia();
		echo "<select name='empleado'>";
		while($fila = $res->fetch_assoc()){
			echo "<option value='".$fila["IDempleado"]."'> ".$fila["nombre"]." ".$fila["appaterno"]."  ".$fila["apmaterno"]." ".$fila["puesto"]." </option>";
		}
		echo "</select>";
	}
		
	}

 ?>
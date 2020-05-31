<?php 

	require_once("Conexion.php");

	class cliente extends Conexion {

		public function alta($nombre,$direccion,$telefono,$correo,$apematerno,$apepaterno,$sexo,$fenacimiento){
			$this->sentencia = "INSERT INTO cliente VALUES(null,'$nombre','$direccion',$telefono,'$correo','$apematerno','$apepaterno','$sexo','$fenacimiento')";
			$this->ejecutarSentencia();
		}

		public function consulta(){
			$this->sentencia = "SELECT * FROM cliente";
			return $this->obtenerSentencia();
		}

		public function eliminar($id){
			$this->sentencia = "DELETE FROM cliente WHERE IDcliente=$id";
			$this->ejecutarSentencia();
		}

	}
	
 ?>
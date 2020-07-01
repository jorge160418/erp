<?php 
	require_once("Conexion.php");

	class actividad extends Conexion {

		public function alta($registro,$IDusuario,$movimiento_act,$movimiento_tabla){
			$this->sentencia = "INSERT INTO actividad VALUES(null,'$registro',$IDusuario,'$movimiento_act','$movimiento_tabla')";
			$this->ejecutarSentencia();
		}

		public function consulta(){
			$this->sentencia = "SELECT u.nombre, a.registro,a.movimiento_act,a.movimiento_tabla FROM actividad a, usuario u WHERE a.IDusuario=u.IDusuario";
			return $this->obtenerSentencia();
		}

		public function eliminar($id){
			$this->sentencia = "DELETE FROM actividad WHERE IDactividad=$id";
			$this->ejecutarSentencia();
		}
			public function obtenerUsuario(){
		$this-> sentencia = "SELECT IDusuario,nombre FROM usuario ";
		$res = $this->obtenerSentencia();
		echo "<select name='usuario'>";
		while($fila = $res->fetch_assoc()){
			echo "<option value='".$fila["IDusuario"]."'> ".$fila["nombre"]." </option>";
		}
		echo "</select>";
	}

	}
 ?>
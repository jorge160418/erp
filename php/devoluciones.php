<?php 

	require_once("Conexion.php");

	class devoluciones extends Conexion {

		public function alta($fecha,$cantidad,$descripcion,$IDproducto){
			$this->sentencia = "INSERT INTO devoluciones VALUES(null,'$fecha',$cantidad,'$descripcion',$IDproducto)";
			$this->ejecutarSentencia();
		}

		public function consulta(){
			$this->sentencia = "SELECT p.nombre,p.descripcion,d.fecha,d.cantidad,d.descripcion FROM devoluciones d, producto p WHERE d.IDproducto=p.IDproducto";
			return $this->obtenerSentencia();
		}

		public function eliminar($id){
			$this->sentencia = "DELETE FROM devoluciones WHERE IDdevoluciones=$id";
			$this->ejecutarSentencia();
		}
		public function obtenerProducto(){
		$this-> sentencia = "SELECT IDproducto,nombre,descripcion FROM producto ";
		$res = $this->obtenerSentencia();
		echo "<select name='producto'>";
		while($fila = $res->fetch_assoc()){
			echo "<option value='".$fila["IDproducto"]."'> ".$fila["nombre"]." ".$fila["descripcion"]." </option>";
		}
		echo "</select>";
	}
	}

 ?>
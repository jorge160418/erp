<?php 

	require_once("Conexion.php");

	class detalle_compra extends Conexion {

		public function alta($IDmateriaprima,$IDcompra,$cantidad){
			$this->sentencia = "INSERT INTO detalle_compra VALUES(null,$IDmateriaprima,$IDcompra,$cantidad)";
			$this->ejecutarSentencia();
		}

		public function consulta(){
			// Método de las 3 tablas juntas
			$this->sentencia = "SELECT m.Nombre,c.fecha,d.cantidad FROM detalle_compra d,compra c,materiaprima m WHERE d.IDmateriaprima=m.ID AND d.IDcompra=c.IDcompra";
			return $this->obtenerSentencia();
		}

		public function eliminar($id){
			$this->sentencia = "DELETE FROM detalle_compra WHERE IDdetallecompra=$id";
			$this->ejecutarSentencia();
		}
		public function obtenerMateria(){
			$this-> sentencia = "SELECT ID,nombre FROM materiaprima ";
			$res = $this->obtenerSentencia();
			echo "<select name='IDmateriaprima'>";
			while($fila = $res->fetch_assoc()){
				echo "<option value='".$fila["ID"]."'> ".$fila["nombre"]." </option>";
			}
			echo "</select>";
		}
		public function obtenerCompra(){
			$this-> sentencia = "SELECT IDcompra,fecha,total FROM compra ";
			$res = $this->obtenerSentencia();
			echo "<select name='IDcompra'>";
			while($fila = $res->fetch_assoc()){
				echo "<option value='".$fila["IDcompra"]."'> ".$fila["fecha"]." - Total: ".$fila["total"]." </option>";
			}
			echo "</select>";
		}
		
	}

 ?>
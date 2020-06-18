<?php 

require_once("conexion.php");

class MateriaPrima extends Conexion{

	public function alta($Nombre,$Tipo,$Descripcion,$Precio,$Stock,$Existencias){
		$this->sentencia = "INSERT INTO materiaprima VALUES (null,'$Nombre','$Tipo','$Descripcion','$Precio','$Stock','$Existencias')";
		$this->ejecutarSentencia();
	}

	public function consulta(){
		$this->sentencia = "SELECT * FROM materiaprima";
		return $this->obtenerSentencia();
	}
	public function eliminar($id){
		$this->sentencia = "DELETE FROM materiaprima WHERE ID=$id";
		$this->ejecutarSentencia();
	}

	public function nombres(){
			$this->sentencia = "SELECT Nombre FROM materiaprima;";
			$res = $this->obtenerSentencia();
			$nombres = "";
			while($fila = $res->fetch_assoc()){
			$nombres = $nombres."'".$fila["Nombre"]."',";
			}
			return $nombres;
		}

	public function cantidades(){
			$this->sentencia = "SELECT Existencias FROM materiaprima;";
			$res = $this->obtenerSentencia();
			$cantidades = "";
			while($fila = $res->fetch_assoc()){
			$cantidades = $cantidades.$fila["Existencias"].",";
			}
			return $cantidades;
		}
	}
 ?>
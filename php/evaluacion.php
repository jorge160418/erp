<?php 

	require_once("Conexion.php");

	class evaluacion extends Conexion {

		public function alta($tipo,$pregunta1,$pregunta2,$pregunta3,$pregunta4,$pregunta5,$pregunta6,$pregunta7,$pregunta8,$pregunta9,$pregunta10){
			$this->sentencia = "INSERT INTO evaluacion VALUES(null,'$tipo','$pregunta1','$pregunta2','$pregunta3','$pregunta4','$pregunta5','$pregunta6','$pregunta7','$pregunta8','$pregunta9','$pregunta10')";
			$this->ejecutarSentencia();
		}

		public function consulta(){
			$this->sentencia = "SELECT * FROM evaluacion";
			return $this->obtenerSentencia();
		}

		public function eliminar($id){
			$this->sentencia = "DELETE FROM evaluacion WHERE IDevaluacion=$id";
			$this->ejecutarSentencia();
		}
		
	}

 ?>
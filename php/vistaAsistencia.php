<?php 
	require_once("asistencia.php");
	$obj = new Asistencia();
 ?>
<section id="principal">

	<form action="" method="post">
		Fecha: <input type="text" name="fecha"> <br>	
		IDempleado: <input type="text" name="idempleado"> <br>		
		Hora: <input type="text" name="hora"> <br>
		
		<input type="submit" value="Agregar Asistencia" name="alta">
	</form>
	<?php 
		if(isset($_POST["alta"])){
			$fecha = $_POST["fecha"];			
			$idempleado = $_POST["idempleado"];
			$hora = $_POST["hora"];	
				
			$obj->alta($fecha,$idempleado,$hora);
			echo "<h2>Asistencia agregada</h2>";
		}

		$resultado = $obj->consulta();
	 ?>

	<table>
		<tr>
			<th>Fecha</th>
			<th>IDempleado</th>
			<th>Hora</th>
			
		</tr>
		<?php 
			while($fila = $resultado->fetch_assoc()){
				echo "<tr>";
				echo "<td>".$fila["Fecha"]."</td>";
				echo "<td>".$fila["IDempleado"]."</td>";
				echo "<td>".$fila["Hora"]."</td>";
				
				echo "</tr>";
			}
		 ?>
	</table>

</section>
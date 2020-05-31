<?php 
	require_once("jornada.php");
	$obj = new Jornada();
 ?>
<section id="principal">

	<form action="" method="post">
		Horas Trabajadas: <input type="text" name="hrs_trabajadas"> <br>	
		Dias Trabajados: <input type="text" name="dias_trabajados"> <br>		
		Pago Hora: <input type="text" name="pago_hora"> <br>
		Horas Extra: <input type="text" name="horas_extra"> <br>
		Bonos: <input type="text" name="bonos"> <br>
		IDempleado: <input type="text" name="IDempleado"> <br>				
		
		<input type="submit" value="Agregar Jornada" name="alta">
	</form>
	<?php 
		if(isset($_POST["alta"])){					
			$hrs_trabajadas = $_POST["hrs_trabajadas"];
			$dias_trabajados = $_POST["dias_trabajados"];
			$pago_hora = $_POST["pago_hora"];	
			$horas_extra = $_POST["horas_extra"];	
			$bonos = $_POST["bonos"];			
			$IDempleado = $_POST["IDempleado"];								
				
			$obj->alta($hrs_trabajadas,$dias_trabajados,$pago_hora,$horas_extra,$bonos,$IDempleado);
			echo "<h2>Jornada agregada</h2>";
		}

		$resultado = $obj->consulta();
	 ?>

	<table>
		<tr>
			<th>Horas Trabajadas</th>
			<th>Dias Trabajados</th>
			<th>Pago Hora</th>
			<th>Horas Extra</th>
			<th>Bonos</th>
			<th>IDempleado</th>			
			
		</tr>
		<?php 
			while($fila = $resultado->fetch_assoc()){
				echo "<tr>";
				echo "<td>".$fila["hrs_trabajadas"]."</td>";	
				echo "<td>".$fila["dias_trabajados"]."</td>";	
				echo "<td>".$fila["pago_hora"]."</td>";
				echo "<td>".$fila["horas_extra"]."</td>";
				echo "<td>".$fila["bonos"]."</td>";	
				echo "<td>".$fila["IDempleado"]."</td>";									

				echo "</tr>";
			}
		 ?>
	</table>

</section>
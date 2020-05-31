<?php 
	require_once("balance.php");
	$obj = new Balance();
 ?>
<section id="principal">

	<form action="" method="post">
		Fecha de Inicio: <input type="text" name="fechainicio"> <br>	
		Fecha de Fin: <input type="text" name="fechafin"> <br>		
		Total: <input type="text" name="total"> <br>
		
		<input type="submit" value="Agregar Balance" name="alta">
	</form>
	<?php 
		if(isset($_POST["alta"])){
			$fechainicio = $_POST["fechainicio"];			
			$fechafin = $_POST["fechafin"];
			$total = $_POST["total"];	
				
			$obj->alta($fechainicio,$fechafin,$total);
			echo "<h2>Balance agregado</h2>";
		}

		$resultado = $obj->consulta();
	 ?>

	<table>
		<tr>
			<th>Fecha Inicio</th>
			<th>Fecha Fin</th>
			<th>Total</th>
			
		</tr>
		<?php 
			while($fila = $resultado->fetch_assoc()){
				echo "<tr>";
				echo "<td>".$fila["fechainicio"]."</td>";
				echo "<td>".$fila["fechafin"]."</td>";
				echo "<td>".$fila["total"]."</td>";
				
				echo "</tr>";
			}
		 ?>
	</table>

</section>
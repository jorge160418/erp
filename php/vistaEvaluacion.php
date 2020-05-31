<?php 
	require_once("evaluacion.php");
	$obj = new Evaluacion();
 ?>
<section id="principal">

	<form action="" method="post">
		Tipo: <input type="text" name="tipo"> <br>	
		Pregunta 1: <input type="text" name="pregunta1"> <br>		
		Pregunta 2: <input type="text" name="pregunta2"> <br>
		Pregunta 3: <input type="text" name="pregunta3"> <br>
		Pregunta 4: <input type="text" name="pregunta4"> <br>
		Pregunta 5: <input type="text" name="pregunta5"> <br>
		Pregunta 6: <input type="text" name="pregunta6"> <br>
		Pregunta 7: <input type="text" name="pregunta7"> <br>
		Pregunta 8: <input type="text" name="pregunta8"> <br>
		Pregunta 9: <input type="text" name="pregunta9"> <br>
		Pregunta 10: <input type="text" name="pregunta10"> <br>
		
		
		<input type="submit" value="Agregar Evaluacion" name="alta">
	</form>
	<?php 
		if(isset($_POST["alta"])){
			$tipo = $_POST["tipo"];			
			$pregunta1 = $_POST["pregunta1"];
			$pregunta2 = $_POST["pregunta2"];
			$pregunta3 = $_POST["pregunta3"];	
			$pregunta4 = $_POST["pregunta4"];			
			$pregunta5 = $_POST["pregunta5"];
			$pregunta6 = $_POST["pregunta6"];
			$pregunta7 = $_POST["pregunta7"];	
			$pregunta8 = $_POST["pregunta8"];			
			$pregunta9 = $_POST["pregunta9"];
			$pregunta10 = $_POST["pregunta10"];							
				
			$obj->alta($tipo,$pregunta1,$pregunta2,$pregunta3,$pregunta4,$pregunta5,$pregunta6,$pregunta7,$pregunta8,$pregunta9,$pregunta10);
			echo "<h2>Evaluacion agregada</h2>";
		}

		$resultado = $obj->consulta();
	 ?>

	<table>
		<tr>
			<th>Tipo</th>
			<th>Pregunta 1</th>
			<th>Pregunta 2</th>
			<th>Pregunta 3</th>
			<th>Pregunta 4</th>
			<th>Pregunta 5</th>
			<th>Pregunta 6</th>
			<th>Pregunta 7</th>
			<th>Pregunta 8</th>
			<th>Pregunta 9</th>			
			<th>Pregunta 10</th>
			
		</tr>
		<?php 
			while($fila = $resultado->fetch_assoc()){
				echo "<tr>";
				echo "<td>".$fila["tipo"]."</td>";	
				echo "<td>".$fila["pregunta1"]."</td>";	
				echo "<td>".$fila["pregunta2"]."</td>";
				echo "<td>".$fila["pregunta3"]."</td>";
				echo "<td>".$fila["pregunta4"]."</td>";	
				echo "<td>".$fila["pregunta5"]."</td>";	
				echo "<td>".$fila["pregunta6"]."</td>";
				echo "<td>".$fila["pregunta7"]."</td>";
				echo "<td>".$fila["pregunta8"]."</td>";	
				echo "<td>".$fila["pregunta9"]."</td>";	
				echo "<td>".$fila["pregunta10"]."</td>";				

				echo "</tr>";
			}
		 ?>
	</table>

</section>
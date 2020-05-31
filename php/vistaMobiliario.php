<?php 
	require_once("mobiliario.php");
	$obj = new Mobiliario();
 ?>
<section id="principal">

	<form action="" method="post">
		Nombre: <input type="text" name="nombre"> <br>
		Descripcion: <input type="text" name="descripcion"> <br>
		Cantidad: <input type="" name="cantidad"> <br>
		Nic: <input type="" name="nic"> <br>
		tipo: <input type="text" name="tipo"> <br>
				<input type="submit" value="Agregar Mobiliario" name="alta">
	</form>
	<?php 
		if(isset($_POST["alta"])){
			$nombre = $_POST["nombre"];
			$descripcion = $_POST["descripcion"];
			$cantidad = $_POST["cantidad"];
			$nic = $_POST["nic"];
			$Tipo = $_POST["tipo"];
		
			
			$obj->alta($nombre,$descripcion,$cantidad,$nic,$Tipo);
			echo "<h2>Mobiliario agregado</h2>";
		}

		$resultado = $obj->consulta();
	 ?>

	<table>
		<tr>
			<th>Nomre</th>
			<th>Descripcion</th>
			<th>Cantidad</th>
			<th>Nic</th>
			<th>Tipo</th>
		</tr>
		<?php 
			while($fila = $resultado->fetch_assoc()){
				echo "<tr>";
				echo "<td>".$fila["nombre"]."</td>";
				echo "<td>".$fila["descripcion"]."</td>";
				echo "<td>".$fila["cantidad"]."</td>";
				echo "<td>".$fila["nic"]."</td>";
				echo "<td>".$fila["tipo"]."</td>";
				echo "</tr>";
			}
		 ?>
	</table>

</section>
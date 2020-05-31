<?php 
	require_once("proyecto.php");
	$obj = new Proyecto();
 ?>
<section id="principal">

	<form action="" method="post">
		Nombre del proyecto: <input type="text" name="nombre_pro"> <br>
		Tipo de proyecto: <input type="text" name="tipo_pro"> <br>
		IDempleado: <input type="" name="IDempleado"> <br>
		Fecha de inicio: <input type="date" name="fecha_in"> <br>
		Fecha de termino: <input type="date" name="fecha_fin"> <br>
		Descripcion: <input type="text" name="descripcion"> <br>
				<input type="submit" value="Agregar Proyecto" name="alta">
	</form>
	<?php 
		if(isset($_POST["alta"])){
			$nombre_pro = $_POST["nombre_pro"];
			$tipo_pro = $_POST["`tipo_pro"];
			$IDempleado = $_POST["IDempleado"];
			$fecha_in = $_POST["fecha_in"];
			$fecha_fin = $_POST["fecha_fin"];
			$descripcion = $_POST["descripcion"];
			
			$obj->alta($nombre_pro,$tipo_pro,$IDempleado,$fecha_in,$fecha_fin,$descripcion);
			echo "<h2>Proyecto agregado</h2>";
		}

		$resultado = $obj->consulta();
	 ?>

	<table>
		<tr>
			<th>Nomre del proyecto</th>
			<th>Tipo de proyecto</th>
			<th>IDempleado</th>
			<th>Fecha de inicio</th>
			<th>Fecha de termino</th>
			<th>Descripcion</th>
		</tr>
		<?php 
			while($fila = $resultado->fetch_assoc()){
				echo "<tr>";
				echo "<td>".$fila["nombre_pro"]."</td>";
				echo "<td>".$fila["tipo_pro"]."</td>";
				echo "<td>".$fila["IDempleado"]."</td>";
				echo "<td>".$fila["fecha_in"]."</td>";
				echo "<td>".$fila["fecha_fin"]."</td>";
				echo "<td>".$fila["descripcion"]."</td>";
				echo "</tr>";
			}
		 ?>
	</table>

</section>
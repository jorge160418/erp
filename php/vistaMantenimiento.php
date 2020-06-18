<?php 
	require_once("mantenimiento.php");
	$obj = new Mantenimiento();
 ?>
<section id="principal">

	<form action="" method="post">
		Fecha de mantenimiento: <input type="date" name="fecha_man"> <br>
		Area: <input type="text" name="area"> <br>
		ID de mobiliario: <input type="" name="IDmob"> <br>
		Costo de mantenimiento: <input type="" name="costo_man"> <br>
		IDempleado: <input type="" name="IDempleado"> <br>
				<input type="submit" value="Agregar Mantenimiento" name="alta">
				<br>
					<?php 
		if(isset($_GET["e"])){
			echo "<h2>Mantenimiento eliminado</h2>";
		}
		if(isset($_GET["i"])){
			echo "<h2>Mantenimiento agregado</h2>";
		}

		 ?>
	</form>
	<?php 
		if(isset($_POST["alta"])){
			$fecha_man = $_POST["fecha_man"];
			$area = $_POST["area"];
			$IDmob = $_POST["IDmob"];
			$costo_man = $_POST["costo_man"];
			$IDempleado = $_POST["IDempleado"];
			
			$obj->alta($fecha_man,$area,$IDmob,$costo_man,$IDempleado);
	echo "<h2>Mantenimiento agregado</h2>";
		}

		$resultado = $obj->consulta();
	 ?>

	<table>
		<tr>
			<th>Fecha de mantenimiento</th>
			<th>Area</th>
			<th>ID de mobiliario</th>
			<th>Costo de mnatenimiento</th>
			<th>ID de empleado</th>
			<th>Eliminar</th>
		</tr>
		<?php 
			while($fila = $resultado->fetch_assoc()){
				echo "<tr>";
				echo "<td>".$fila["fecha_man"]."</td>";
				echo "<td>".$fila["area"]."</td>";
				echo "<td>".$fila["IDmob"]."</td>";
				echo "<td>".$fila["costo_man"]."</td>";
				echo "<td>".$fila["IDempleado"]."</td>";

		 ?>
		 	<td>
				<form action="" method="post" class="eliminar">
					<input type="hidden" value="<?php echo $fila['IDmantenimiento']; ?>" name="id">
					<input type="submit" value="Eliminar" name="eliminar">
				</form>
				</td>
				<?php
				echo "</tr>";
			}
		?>
	</table>
<?php 
		if(isset($_POST["eliminar"])){
			$id = $_POST["id"];
			$obj->eliminar($id);
			header("Location: ?sec=mant&e=1");
		}

	 ?>
</section>
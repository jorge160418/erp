<?php 
	require_once("remplazo.php");
	$obj = new Remplazo();
 ?>
<section id="principal">

	<form action="" method="post">
		IDmobiliario: <input type="" name="IDmobiliario"> <br>
		Fecha de reemplazo: <input type="date" name="fecha"> <br>
		Costo: <input type="" name="costo"> <br>
		Descripcion: <input type="text" name="descripcion"> <br>
				<input type="submit" value="Agregar Reemplazo" name="alta">
						<br>
		<?php 
		if(isset($_GET["e"])){
			echo "<h2>Remplazo eliminado</h2>";
		}
		if(isset($_GET["i"])){
			echo "<h2>Remplazo agregado</h2>";
		}

		 ?>
	</form>
	<?php 
		if(isset($_POST["alta"])){
			$IDmobiliario = $_POST["IDmobiliario"];
			$fecha = $_POST["fecha"];
			$costo = $_POST["costo"];
			$descripcion = $_POST["descripcion"];
			
			$obj->alta($IDmobiliario,$fecha,$costo,$descripcion);
			echo "<h2>Reemplazo agregado</h2>";
		}

		$resultado = $obj->consulta();
	 ?>

	<table>
		<tr>
			<th>IDmobiliario</th>
			<th>Fecha de reemplazo</th>
			<th>Costo</th>
			<th>Descripcion</th>
			<th>Eliminar</th>
		</tr>
		<?php 
			while($fila = $resultado->fetch_assoc()){
				echo "<tr>";
				echo "<td>".$fila["IDmobiliario"]."</td>";
				echo "<td>".$fila["fecha"]."</td>";
				echo "<td>".$fila["costo"]."</td>";
				echo "<td>".$fila["descripcion"]."</td>";
				
			
		 ?>
	<td>
				<form action="" method="post" class="eliminar">
					<input type="hidden" value="<?php echo $fila['IDremplazo']; ?>" name="id">
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
			header("Location: ?sec=remplazo&e=1");
		}

	 ?>

</section>
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
				<br>
				<?php 
		if(isset($_GET["e"])){
			echo "<h2>Mobiliario eliminado</h2>";
		}
		if(isset($_GET["i"])){
			echo "<h2>Mobiliario agregado</h2>";
		}

		 ?>
	</form>
	<?php 
		if(isset($_POST["alta"])){
			$nombre = $_POST["nombre"];
			$descripcion = $_POST["descripcion"];
			$cantidad = $_POST["cantidad"];
			$nic = $_POST["nic"];
			$Tipo = $_POST["tipo"];
		
			
			$obj->alta($nombre,$descripcion,$cantidad,$nic,$Tipo);
			header("Location: ?sec=mob");
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
					 ?>
	<td>
				<form action="" method="post" class="eliminar">
					<input type="hidden" value="<?php echo $fila['IDmobiliario']; ?>" name="id">
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
			header("Location: ?sec=mob");
		}

	 ?>
</section>
<?php 
	require_once("asistencia.php");
	$obj = new Asistencia();
 ?>
<section id="principal">
	<div>
		<a href="?sec=rasi"><input type="button" value="Generar Reporte"></a>
	</div>

	<form action="" method="post">
		Fecha: <input type="text" name="fecha"> <br>	
		IDempleado:
		<?php
		$obj->obtenerEmpleado();
		?>
		<br>	
		Hora: <input type="text" name="hora"> <br>
		
		<input type="submit" value="Agregar Asistencia" name="alta"><br>
		<?php 
		if(isset($_GET["e"])){
			echo "<h2>Asistencia eliminada</h2>";
		}
		if(isset($_GET["i"])){
			echo "<h2>Asistencia agregada</h2>";
		}

		 ?>
	</form>
	<?php 
		if(isset($_POST["alta"])){
			$fecha = $_POST["fecha"];			
			$IDempleado = $_POST["empleado"];
			$hora = $_POST["hora"];	
				
			$obj->alta($fecha,$IDempleado,$hora);
			echo "<h2>Asistencia agregada</h2>";
		}

		$resultado = $obj->consulta();
	 ?>

	<table>
		<tr>
			<th>Fecha</th>
			<th>IDempleado</th>
			<th>Hora</th>
			<th>Eliminar</th>
			
		</tr>
		<?php 
			while($fila = $resultado->fetch_assoc()){
				echo "<tr>";
				echo "<td>".$fila["fecha"]."</td>";
				echo "<td>".$fila["nombre"]." ".$fila["appaterno"]."  ".$fila["apmaterno"]."  ".$fila["cargo"]."</td>";
				echo "<td>".$fila["hora"]."</td>";
				?>
				<td>
				<form action="" method="post" class="eliminar">
					<input type="hidden" value="<?php echo $fila['IDasistencia']; ?>" name="id">
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
			header("Location: ?sec=asis&e=1");
		}

	 ?>
</section>
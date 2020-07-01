<?php 
	require_once("actividad.php");
	$obj = new Actividad();
 ?>
<section id="principal">

	<form action="" method="post">
		Registro: <input type="text" name="registro"> <br>	
		IDusuario:<?php
		$obj->obtenerUsuario();
		?>
		<br>	
		Movimiento Actual: <input type="text" name="movactual"> <br>
		Movimiento Tabla: <input type="text" name="movtabla"> <br>
		<input type="submit" value="Agregar Actividad" name="alta"><br>
		<?php 
		if(isset($_GET["e"])){
			echo "<h2>Actividad eliminada</h2>";
		}
		if(isset($_GET["i"])){
			echo "<h2>Actividad agregada</h2>";
		}

		 ?>
	</form>
	<?php 
		if(isset($_POST["alta"])){
			$registro = $_POST["registro"];			
			$idusuario = $_POST["usuario"];
			$movactual = $_POST["movactual"];	
			$movtabla = $_POST["movtabla"];	

			$obj->alta($registro,$idusuario,$movactual,$movtabla);
			echo "<h2>Actividad agregada</h2>";
		}

		$resultado = $obj->consulta();
	 ?>

	<table>
		<tr>
			<th>Registro</th>
			<th>IDusuario</th>
			<th>movimiento_act</th>
			<th>movimiento_tabla</th>
			<th>Eliminar</th>
		</tr>
		<?php 
			while($fila = $resultado->fetch_assoc()){
				echo "<tr>";
				echo "<td>".$fila["registro"]."</td>";
				echo "<td>".$fila["nombre"]."</td>";
				echo "<td>".$fila["movimiento_act"]."</td>";
				echo "<td>".$fila["movimiento_tabla"]."</td>";
				?>
				<td>
				<form action="" method="post" class="eliminar">
					<input type="hidden" value="<?php echo $fila['IDactividad']; ?>" name="id">
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
			header("Location: ?sec=act&e=1");
		}

	 ?>
</section>
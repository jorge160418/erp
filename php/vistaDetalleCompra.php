<?php 
	require_once("detalle_compra.php");
	$obj = new Detalle_compra();
 ?>
<section id="principal">

	<form action="" method="post">
		IDmateriaprima: <input type="text" name="IDmateriaprima"> <br>	
		IDcompra: <input type="text" name="IDcompra"> <br>		
		Cantidad: <input type="text" name="cantidad"> <br>
		
		
		
		<input type="submit" value="Agregar Detalle de Compra" name="alta"><br>
		<?php 
		if(isset($_GET["e"])){
			echo "<h2>Detalle de Compra eliminado</h2>";
		}
		if(isset($_GET["i"])){
			echo "<h2>Detalle de Compra agregado</h2>";
		}

		 ?>
	</form>
	<?php 
		if(isset($_POST["alta"])){
			$IDmateriaprima = $_POST["IDmateriaprima"];			
			$IDcompra = $_POST["IDcompra"];
			$cantidad = $_POST["cantidad"];	
			
				
			$obj->alta($IDmateriaprima,$IDcompra,$cantidad);
			echo "<h2>Detalle de Compra agregado</h2>";
		}

		$resultado = $obj->consulta();
	 ?>

	<table>
		<tr>
			<th>IDmateriaprima</th>
			<th>IDcompra</th>
			<th>Cantidad</th>
			<th>Eliminar</th>
			
		</tr>
		<?php 
			while($fila = $resultado->fetch_assoc()){
				echo "<tr>";
				echo "<td>".$fila["IDmateriaprima"]."</td>";
				echo "<td>".$fila["IDcompra"]."</td>";				
				echo "<td>".$fila["cantidad"]."</td>";
				?>
				<td>
				<form action="" method="post" class="eliminar">
					<input type="hidden" value="<?php echo $fila['IDdetallecompra']; ?>" name="id">
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
			header("Location: ?sec=dcom&e=1");
		}

	 ?>

</section>
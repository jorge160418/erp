<?php 
	require_once("pedido.php");
	$obj = new Pedido();
 ?>
<section id="principal">

	<form action="" method="post">
		Fecha de pedido: <input type="date" name="fecha"> <br>
		IDcliente: <input type="" name="IDcliente"> <br>
		Precio: <input type="" name="precio"> <br>
		Cantidad: <input type="" name="cantidad"> <br>
		Direccion: <input type="text" name="direccion"> <br>
		IDproducto: <input type="" name="IDproducto"> <br>
				<input type="submit" value="Agregar Pedido" name="alta">
									<br>
				<?php 
		if(isset($_GET["e"])){
			echo "<h2>Pedido eliminado</h2>";
		}
		if(isset($_GET["i"])){
			echo "<h2>Pedido agregado</h2>";
		}

		 ?>
	</form>
	<?php 
		if(isset($_POST["alta"])){
			$fecha = $_POST["fecha"];
			$IDcliente = $_POST["IDcliente"];
			$precio = $_POST["precio"];
			$cantidad = $_POST["cantidad"];
			$direccion = $_POST["direccion"];
			$IDproducto = $_POST["IDproducto"];
			
			$obj->alta($fecha,$IDcliente,$precio,$cantidad,$direccion,$IDproducto);
				header("Location: ?sec=pedido");		}

		$resultado = $obj->consulta();
	 ?>

	<table>
		<tr>
			<th>Fecha de pedido</th>
			<th>IDcliente</th>
			<th>Precio</th>
			<th>Cantidad</th>
			<th>Direccion</th>
			<th>IDproducto</th>
		</tr>
		<?php 
			while($fila = $resultado->fetch_assoc()){
				echo "<tr>";
				echo "<td>".$fila["fecha"]."</td>";
				echo "<td>".$fila["IDcliente"]."</td>";
				echo "<td>".$fila["precio"]."</td>";
				echo "<td>".$fila["cantidad"]."</td>";
				echo "<td>".$fila["direccion"]."</td>";
				echo "<td>".$fila["IDproducto"]."</td>";
				echo "</tr>";
			
		 ?>
	<td>
				<form action="" method="post" class="eliminar">
					<input type="hidden" value="<?php echo $fila['IDpedido']; ?>" name="id">
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
			header("Location: ?sec=pedido");
		}

	 ?>

</section>
<?php 
	require_once("producto.php");
	$obj = new Producto();
 ?>
<section id="principal">

	<form action="" method="post">
		Nombre: <input type="text" name="nombre"> <br>
		Descripcion: <input type="text" name="descripcion"> <br>
		Precio venta: <input type="" name="preciov"> <br>
		Precio compra: <input type="" name="precioc"> <br>
		Cantidad: <input type="" name="cantidad"> <br>
		Cantidad minima: <input type="" name="cantmin"> <br>
		Cantidad maxima: <input type="" name="cantmax"> <br>
		Categoria: <input type="" name="categoria"> <br>
				<input type="submit" value="Agregar Producto" name="alta">
	</form>
	<?php 
		if(isset($_POST["alta"])){
			$nombre = $_POST["nombre"];
			$descripcion = $_POST["descripcion"];
			$preciov = $_POST["preciov"];
			$precioc = $_POST["precioc"];
			$cantidad = $_POST["cantidad"];
			$cantmin = $_POST["cantmin"];
			$cantmax = $_POST["cantmax"];
			$categoria = $_POST["categoria"];
			
			$obj->alta($nombre,$descripcion,$preciov,$precioc,$cantidad,$cantmin,$cantmax,$categoria);
			echo "<h2>Producto agregado</h2>";
		}

		$resultado = $obj->consulta();
	 ?>

	<table>
		<tr>
			<th>Nomre</th>
			<th>Descripcion</th>
			<th>Precio</th>
			<th>Precio de venta</th>
			<th>Precio de compra</th>
			<th>Cantidad</th>
			<th>Cantidad minima</th>
			<th>Cantidad maxima</th>
			<th>Categoria</th>
		</tr>
		<?php 
			while($fila = $resultado->fetch_assoc()){
				echo "<tr>";
				echo "<td>".$fila["nombre"]."</td>";
				echo "<td>".$fila["descripcion"]."</td>";
				echo "<td>".$fila["preciov"]."</td>";
				echo "<td>".$fila["precioc"]."</td>";
				echo "<td>".$fila["cantidad"]."</td>";
				echo "<td>".$fila["cantmin"]."</td>";
				echo "<td>".$fila["cantmax"]."</td>";
				echo "<td>".$fila["categoria"]."</td>";
				echo "</tr>";
			}
		 ?>
	</table>

</section>
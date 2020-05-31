<?php 
	require_once("venta.php");
	$obj = new Venta();
 ?>
<section id="principal">

	<form action="" method="post">
		Fecha de venta: <input type="date" name="fecha"> <br>
		IDCliente: <input type="" name="IDCliente"> <br>
		Total: <input type="" name="Total"> <br>
		Tipo de pago: <input type="" name="tipo_pago"> <br>
				<input type="submit" value="Agregar Venta" name="alta">
	</form>
	<?php 
		if(isset($_POST["alta"])){
			$fecha = $_POST["fecha"];
			$IDCliente = $_POST["IDCliente"];
			$Total = $_POST["Total"];
			$tipo_pago = $_POST["tipo_pago"];
			
			$obj->alta($fecha,$IDCliente,$Total,$tipo_pago);
			echo "<h2>Venta agregado</h2>";
		}

		$resultado = $obj->consulta();
	 ?>

	<table>
		<tr>
			<th>Fecha de venta</th>
			<th>IDCliente</th>
			<th>Total</th>
			<th>Tipo de pago</th>
		</tr>
		<?php 
			while($fila = $resultado->fetch_assoc()){
				echo "<tr>";
				echo "<td>".$fila["fecha"]."</td>";
				echo "<td>".$fila["IDCliente"]."</td>";
				echo "<td>".$fila["Total"]."</td>";
				echo "<td>".$fila["tipo_pago"]."</td>";
				echo "</tr>";
			}
		 ?>
	</table>

</section>
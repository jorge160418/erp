<?php 
	require_once("compra.php");
	$obj = new Compra();
 ?>
<section id="principal">

	<form action="" method="post">
		Fecha: <input type="text" name="fecha"> <br>	
		Total: <input type="text" name="total"> <br>		
		Tipo Pago: <input type="text" name="tipo_pago"> <br>
		IDcliente: <input type="text" name="id_cliente"> <br>
		
		
		<input type="submit" value="Agregar Compra" name="alta">
	</form>
	<?php 
		if(isset($_POST["alta"])){
			$fecha = $_POST["fecha"];			
			$total = $_POST["total"];
			$tipo_pago = $_POST["tipo_pago"];	
			$id_cliente = $_POST["id_cliente"];
				
			$obj->alta($fecha,$total,$tipo_pago,$id_cliente);
			echo "<h2>Compra agregada</h2>";
		}

		$resultado = $obj->consulta();
	 ?>

	<table>
		<tr>
			<th>Fecha</th>
			<th>Total</th>
			<th>Tipo Pago</th>
			<th>IDcliente</th>
			
		</tr>
		<?php 
			while($fila = $resultado->fetch_assoc()){
				echo "<tr>";
				echo "<td>".$fila["fecha"]."</td>";
				echo "<td>".$fila["total"]."</td>";				
				echo "<td>".$fila["tipo_pago"]."</td>";
				echo "<td>".$fila["id_cliente"]."</td>";				
				
				echo "</tr>";
			}
		 ?>
	</table>

</section>
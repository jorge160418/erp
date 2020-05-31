<?php 
	require_once("detalle_compra.php");
	$obj = new Detalle_compra();
 ?>
<section id="principal">

	<form action="" method="post">
		IDmateriaprima: <input type="text" name="IDmateriaprima"> <br>	
		IDcompra: <input type="text" name="IDcompra"> <br>		
		Cantidad: <input type="text" name="cantidad"> <br>
		
		
		
		<input type="submit" value="Agregar Detalle de Compra" name="alta">
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
			
		</tr>
		<?php 
			while($fila = $resultado->fetch_assoc()){
				echo "<tr>";
				echo "<td>".$fila["IDmateriaprima"]."</td>";
				echo "<td>".$fila["IDcompra"]."</td>";				
				echo "<td>".$fila["cantidad"]."</td>";
				
				echo "</tr>";
			}
		 ?>
	</table>

</section>
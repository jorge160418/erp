<?php 
	require_once("venta.php");
	$obj = new Venta();
 ?>
<section id="principal">
	<div>
		<a href="?sec=gven"><input type="button" value="Generar Gráfica"></a>
	</div>
	<div>
		<a href="?sec=rven"><input type="button" value="Generar Reporte"></a>
	</div>
	<form action="" method="POST">
		Fecha de venta: <input type="date" name="fecha"> <br>
		IDCliente:
		<?php
		$obj->obtenerClientes();
		?>
		<br>
		Total: <input type="text" name="Total"> <br>
		Tipo de pago: <input type="text" name="tipo_pago"> <br>
		<input type="submit" value="Agregar Venta" name="alta"> <br>
		<?php 
		if(isset($_GET["e"])){
			echo "<h2>Venta eliminada</h2>";
		}
		if(isset($_GET["i"])){
			echo "<h2>Venta agregada</h2>";
		}

		 ?>
	</form>
	<?php 
		if(isset($_POST["alta"])){
			$fecha = $_POST["fecha"];
			$IDCliente = $_POST["cliente"];
			$Total = $_POST["Total"];
			$tipo_pago = $_POST["tipo_pago"];
			
			$obj->alta($fecha,$IDCliente,$Total,$tipo_pago);
			echo "<h2>Venta agregada</h2>";
				}

		$resultado = $obj->consulta();
	 ?>

	<table>
		<tr>
			<th>IDCliente</th>
			<th>Fecha de venta</th>
			<th>Total</th>
			<th>Tipo de pago</th>
			<th>Eliminar</th>
		</tr>
		<?php 
			while($fila = $resultado->fetch_assoc()){
				echo "<tr>";
				echo "<td>".$fila["nombre"]."  ".$fila["apepaterno"]." ".$fila["apematerno"]." </td>";
				echo "<td>".$fila["fecha"]."</td>";
				echo "<td>".$fila["Total"]."</td>";
				echo "<td>".$fila["tipo_pago"]."</td>";
				
			
		 ?>
	<td>
				<form action="" method="post" class="eliminar">
					<input type="hidden" value="<?php echo $fila['IDVenta']; ?>" name="id">
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
			header("Location: ?sec=venta&e=1");
		}

	 ?>

</section>
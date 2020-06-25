<?php 
	require_once("compra.php");
	$obj = new Compra();
 ?>
<section id="principal">
	<div>
		<a href="?sec=gcom"><input type="button" value="Generar Gráfica"></a>
	</div>
	<div>
		<a href="?sec=rcom"><input type="button" value="Generar Reporte"></a>
	</div>
	<form action="" method="post">
		Fecha: <input type="text" name="fecha"> <br>	
		Total: <input type="text" name="total"> <br>		
		Tipo Pago: <input type="text" name="tipo_pago"> <br>
		IDcliente: <input type="text" name="id_cliente"> <br>
		
		
		<input type="submit" value="Agregar Compra" name="alta"><br>
		<?php 
		if(isset($_GET["e"])){
			echo "<h2>Compra eliminada</h2>";
		}
		if(isset($_GET["i"])){
			echo "<h2>Compra agregada</h2>";
		}

		 ?>
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
			<th>Eliminar</th>
			
		</tr>
		<?php 
			while($fila = $resultado->fetch_assoc()){
				echo "<tr>";
				echo "<td>".$fila["fecha"]."</td>";
				echo "<td>".$fila["total"]."</td>";				
				echo "<td>".$fila["tipo_pago"]."</td>";
				echo "<td>".$fila["id_cliente"]."</td>";				
				?>
				<td>
				<form action="" method="post" class="eliminar">
					<input type="hidden" value="<?php echo $fila['IDcompra']; ?>" name="id">
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
			header("Location: ?sec=com&e=1");
		}

	 ?>
</section>
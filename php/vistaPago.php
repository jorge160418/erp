<?php 
	require_once("pago.php");
	$obj = new Pago();
 ?>
<section id="principal">

	<form action="" method="post">
		IDempelado: <input type="" name="IDempleado"> <br>
		Saldo: <input type="text" name="sal"> <br>
		Fecha de deposito: <input type="date" name="fecha_dep"> <br>
		Metodo de pago: <input type="text" name="met_pag"> <br>
		Descripcion: <input type="text" name="des"> <br>
				<input type="submit" value="Agregar Pago" name="alta">
						<br>
				<?php 
		if(isset($_GET["e"])){
			echo "<h2>Pago eliminado</h2>";
		}
		if(isset($_GET["i"])){
			echo "<h2>Pago agregado</h2>";
		}

		 ?>
	</form>
	<?php 
		if(isset($_POST["alta"])){
			$IDempleado = $_POST["IDempleado"];
			$sal = $_POST["sal"];
			$fecha_dep = $_POST["fecha_dep"];
			$met_pag = $_POST["met_pag"];
			$des = $_POST["des"];
			
			$obj->alta($IDempleado,$sal,$fecha_dep,$met_pag,$des);
				echo "<h2>Pago agregado</h2>";
		}

		$resultado = $obj->consulta();
	 ?>

	<table>
		<tr>
			<th>IDempleado</th>
			<th>Saldo</th>
			<th>Fecha de deposito</th>
			<th>Metodo de pago</th>
			<th>Descripcion</th>
		</tr>
		<?php 
			while($fila = $resultado->fetch_assoc()){
				echo "<tr>";
				echo "<td>".$fila["IDempleado"]."</td>";
				echo "<td>".$fila["sal"]."</td>";
				echo "<td>".$fila["fecha_dep"]."</td>";
				echo "<td>".$fila["met_pag"]."</td>";
				echo "<td>".$fila["des"]."</td>";
				echo "</tr>";
			
		 ?>
	<td>
				<form action="" method="post" class="eliminar">
					<input type="hidden" value="<?php echo $fila['IDpago']; ?>" name="id">
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
			header("Location: ?sec=pago&e=1");
		}

	 ?>

</section>
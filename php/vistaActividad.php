<?php 
	require_once("actividad.php");
	$obj = new Actividad();
 ?>
<section id="principal">

	<form action="" method="post">
		Registro: <input type="text" name="registro"> <br>	
		IDusuario: <input type="text" name="idusuario"> <br>		
		Movimiento Actual: <input type="text" name="movactual"> <br>
		Movimiento Tabla: <input type="text" name="movtabla"> <br>
		<input type="submit" value="Agregar Actividad" name="alta">
	</form>
	<?php 
		if(isset($_POST["alta"])){
			$registro = $_POST["registro"];			
			$idusuario = $_POST["idusuario"];
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
		</tr>
		<?php 
			while($fila = $resultado->fetch_assoc()){
				echo "<tr>";
				echo "<td>".$fila["registro"]."</td>";
				echo "<td>".$fila["IDusuario"]."</td>";
				echo "<td>".$fila["movimiento_act"]."</td>";
				echo "<td>".$fila["movimiento_tabla"]."</td>";
				echo "</tr>";
			}
		 ?>
	</table>

</section>
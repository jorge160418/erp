<?php 
	require_once("proveedor.php");
	$obj = new Proveedor();
 ?>
<section id="principal">

	<form action="" method="post">
		Nombre: <input type="text" name="nombre"> <br>
		Telefono: <input type="" name="telefono"> <br>
		Direccion: <input type="text" name="direccion"> <br>
		Correo: <input type="email" name="correo"> <br>
		RFC: <input type="" name="rfc"> <br>
				<input type="submit" value="Agregar Proveedor" name="alta">
	</form>
	<?php 
		if(isset($_POST["alta"])){
			$nombre = $_POST["nombre"];
			$telefono = $_POST["telefono"];
			$direccion = $_POST["direccion"];
			$correo = $_POST["correo"];
			$rfc = $_POST["rfc"];
			
			$obj->alta($nombre,$telefono,$direccion,$correo,$rfc);
			echo "<h2>Proveedor agregado</h2>";
		}

		$resultado = $obj->consulta();
	 ?>

	<table>
		<tr>
			<th>Nomre</th>
			<th>Telefono</th>
			<th>Direccion</th>
			<th>Correo</th>
			<th>RFC</th>
		</tr>
		<?php 
			while($fila = $resultado->fetch_assoc()){
				echo "<tr>";
				echo "<td>".$fila["nombre"]."</td>";
				echo "<td>".$fila["telefono"]."</td>";
				echo "<td>".$fila["direccion"]."</td>";
				echo "<td>".$fila["correo"]."</td>";
				echo "<td>".$fila["rfc"]."</td>";
				echo "</tr>";
			}
		 ?>
	</table>

</section>
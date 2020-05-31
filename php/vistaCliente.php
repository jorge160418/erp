<?php 
	require_once("cliente.php");
	$obj = new Cliente();
 ?>
<section id="principal">

	<form action="" method="post">
		Nombre: <input type="text" name="nombre"> <br>	
		Direccion: <input type="text" name="direccion"> <br>		
		Telefono: <input type="text" name="telefono"> <br>
		Correo: <input type="email" name="correo"> <br>
		Apellido Materno: <input type="text" name="apematerno"> <br>
		Apellido Paterno: <input type="text" name="apepaterno"> <br>
		Sexo: <input type="text" name="sexo"> <br>
		Fecha de Nacimiento: <input type="text" name="fenacimiento"> <br>
		
		<input type="submit" value="Agregar Cliente" name="alta">
	</form>
	<?php 
		if(isset($_POST["alta"])){
			$nombre = $_POST["nombre"];			
			$direccion = $_POST["direccion"];
			$telefono = $_POST["telefono"];	
			$correo = $_POST["correo"];
			$apematerno = $_POST["apematerno"];
			$apepaterno = $_POST["apepaterno"];
			$sexo = $_POST["sexo"];
			$fenacimiento = $_POST["fenacimiento"];
				
			$obj->alta($nombre,$direccion,$telefono,$correo,$apematerno,$apepaterno,$sexo,$fenacimiento);
			echo "<h2>Cliente agregado</h2>";
		}

		$resultado = $obj->consulta();
	 ?>

	<table>
		<tr>
			<th>Nombre</th>
			<th>Direccion</th>
			<th>Telefono</th>
			<th>Correo</th>
			<th>Apellido Materno</th>
			<th>Apellido Paterno</th>
			<th>Sexo</th>
			<th>Fecha de Nacimiento</th>			
			
		</tr>
		<?php 
			while($fila = $resultado->fetch_assoc()){
				echo "<tr>";
				echo "<td>".$fila["nombre"]."</td>";
				echo "<td>".$fila["direccion"]."</td>";				
				echo "<td>".$fila["telefono"]."</td>";
				echo "<td>".$fila["correo"]."</td>";
				echo "<td>".$fila["apematerno"]."</td>";
				echo "<td>".$fila["apepaterno"]."</td>";
				echo "<td>".$fila["sexo"]."</td>";
				echo "<td>".$fila["fenacimiento"]."</td>";
				
				echo "</tr>";
			}
		 ?>
	</table>

</section>
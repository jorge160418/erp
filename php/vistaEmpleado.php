<?php 
	require_once("empleado.php");
	$obj = new empleado();
 ?>
<section id="principal">

	<form action="" method="post">
		Nombre: <input type="text" name="nombre"> <br>	
		Apellido Paterno: <input type="text" name="appaterno"> <br>		
		Apellido Materno: <input type="text" name="apmaterno"> <br>
		Correo: <input type="email" name="correo"> <br>
		RFC: <input type="text" name="rfc"> <br>
		Telefono: <input type="text" name="telefono"> <br>
		Sexo: <input type="text" name="sexo"> <br>
		Fecha de Ingreso: <input type="text" name="fechadeingreso"> <br>
		Cargo: <input type="text" name="cargo"> <br>
		Salario: <input type="text" name="salario"> <br>
		Estado Civil: <input type="text" name="estadocivil"> <br>
		NSS: <input type="text" name="nss"> <br>
		
		
		<input type="submit" value="Agregar Empleado" name="alta">
	</form>
	<?php 
		if(isset($_POST["alta"])){
			$nombre = $_POST["nombre"];			
			$appaterno = $_POST["appaterno"];
			$apmaterno = $_POST["apmaterno"];
			$correo = $_POST["correo"];	
			$rfc = $_POST["rfc"];			
			$telefono = $_POST["telefono"];
			$sexo = $_POST["sexo"];
			$fechadeingreso = $_POST["fechadeingreso"];	
			$cargo = $_POST["cargo"];			
			$salario = $_POST["salario"];
			$estadocivil = $_POST["estadocivil"];
			$nss = $_POST["nss"];				
			
				
			$obj->alta($nombre,$appaterno,$apmaterno,$correo,$rfc,$telefono,$sexo,$fechadeingreso,$cargo,$salario,$estadocivil,$nss);
			echo "<h2>Empleado agregada</h2>";
		}

		$resultado = $obj->consulta();
	 ?>

	<table>
		<tr>
			<th>Nombre</th>
			<th>Apellido Paterno</th>
			<th>Apellido Materno</th>
			<th>Correo</th>
			<th>RFC</th>
			<th>Telefono</th>
			<th>Sexo</th>
			<th>Fecha de Ingreso</th>
			<th>Cargo</th>
			<th>Salario</th>
			<th>Estado Civil</th>
			<th>NSS</th>
			
		</tr>
		<?php 
			while($fila = $resultado->fetch_assoc()){
				echo "<tr>";
				echo "<td>".$fila["nombre"]."</td>";	
				echo "<td>".$fila["appaterno"]."</td>";	
				echo "<td>".$fila["apmaterno"]."</td>";
				echo "<td>".$fila["correo"]."</td>";
				echo "<td>".$fila["rfc"]."</td>";	
				echo "<td>".$fila["telefono"]."</td>";	
				echo "<td>".$fila["sexo"]."</td>";
				echo "<td>".$fila["fechadeingreso"]."</td>";
				echo "<td>".$fila["cargo"]."</td>";	
				echo "<td>".$fila["salario"]."</td>";	
				echo "<td>".$fila["estadocivil"]."</td>";
				echo "<td>".$fila["nss"]."</td>";

				echo "</tr>";
			}
		 ?>
	</table>

</section>
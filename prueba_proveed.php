<?php 
	require_once("php/proveedor.php");

	$obj =new Proveedor();
	//$obj->alta("Jesus","7223695847","av. 16 de septiembre 502","Jesus_bec@gmail.com","SDFG546");
	$res = $obj->consulta();

	while($fila = $res->fetch_assoc()){
		echo $fila["IDproveedor"]." ".$fila["nombre"]." ".$fila["telefono"]." ".$fila["direccion"]." ".$fila["correo"]." ".$fila["rfc"]."<br>";
	}
	echo "******************************";
	$obj->eliminar(2);
	$res = $obj->consulta();

	while($fila = $res->fetch_assoc()){
		echo $fila["IDproveedor"]." ".$fila["nombre"]." ".$fila["telefono"]." ".$fila["direccion"]." ".$fila["correo"]." ".$fila["rfc"]."<br>";
	}
 ?>
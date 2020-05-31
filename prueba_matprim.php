<?php 
	require_once("php/materiaprima.php");

	$obj =new MateriaPrima();
	$obj->alta("chocolate","blanco","werrttyyui","15.20", "30", "20");
	$res = $obj->consulta();

	while($fila = $res->fetch_assoc()){
		echo $fila["ID"]." ".$fila["Nombre"]." ".$fila["Tipo"]." ".$fila["Descripcion"]."  ".$fila["Precio"]."  ".$fila["Stock"]."  ".$fila["Existencias"]."<br>";
	}

	echo "******************************";
	$obj->eliminar(3);
	$res = $obj->consulta();

	while($fila = $res->fetch_assoc()){
		echo $fila["ID"]." ".$fila["Nombre"]." ".$fila["Tipo"]." ".$fila["Descripcion"]."  ".$fila["Precio"]."  ".$fila["Stock"]."  ".$fila["Existencias"]."<br>";
	}
 ?>
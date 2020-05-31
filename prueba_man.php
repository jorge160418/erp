<?php 
	require_once("php/mantenimiento.php");

	$obj =new Mantenimiento();
	//$obj->alta("2020/04/04","informatica","1","150","1");
	$res = $obj->consulta();

	while($fila = $res->fetch_assoc()){
		echo $fila["IDmantenimiento"]." ".$fila["fecha_man"]." ".$fila["area"]." ".$fila["IDmob"]." ".$fila["costo_man"]." ".$fila["IDempleado"]."<br>";
	}

	echo "******************************";
	$obj->eliminar(3);
	$res = $obj->consulta();

	while($fila = $res->fetch_assoc()){
		echo $fila["IDmantenimiento"]." ".$fila["fecha_man"]." ".$fila["area"]." ".$fila["IDmob"]." ".$fila["costo_man"]." ".$fila["IDempleado"]."<br>";
	}
 ?>
<?php 
	require_once("php/pago.php");

	$obj =new Pago();
	//$obj->alta("2","1500","2020/04/04","efectivo", "pago semanal");
	$res = $obj->consulta();

	while($fila = $res->fetch_assoc()){
		echo $fila["IDpago"]." ".$fila["IDempleado"]." ".$fila["sal"]." ".$fila["fecha_dep"]." ".$fila["met_pag"]."".$fila["des"]." <br>";
	}
	echo "******************************";
	$obj->eliminar(1);
	$res = $obj->consulta();

	while($fila = $res->fetch_assoc()){
		echo $fila["IDpago"]." ".$fila["IDempleado"]." ".$fila["sal"]." ".$fila["fecha_dep"]." ".$fila["met_pag"]."".$fila["des"]." <br>";
	}
	
 ?>
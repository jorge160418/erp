<?php 
	require_once("php/mobiliario.php");

	$obj =new Mobiliario();
	//$obj->alta("silla","verde","20", "412" , "escritorio");
	$res = $obj->consulta();

	while($fila = $res->fetch_assoc()){
		echo $fila["IDmobiliario"]." ".$fila["nombre"]." ".$fila["descripcion"]." ".$fila["cantidad"]."  ".$fila["nic"]."  ".$fila["tipo"]."  <br>";
	}
	echo "******************************";
	$obj->eliminar(2);
	$res = $obj->consulta();

	while($fila = $res->fetch_assoc()){
		echo $fila["IDmobiliario"]." ".$fila["nombre"]." ".$fila["descripcion"]." ".$fila["cantidad"]."  ".$fila["nic"]."  ".$fila["tipo"]."  <br>";
	}
 ?>
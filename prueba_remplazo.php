<?php 
	require_once("php/remplazo.php");

	$obj =new Remplazo();
	//$obj->alta("1","2020/04/04","300","mesa de escritorio");
	$res = $obj->consulta();

	while($fila = $res->fetch_assoc()){
		echo $fila["IDremplazo"]." ".$fila["IDmobiliario"]." ".$fila["fecha"]." ".$fila["costo"]." ".$fila["descripcion"]."<br>";
	}
	echo "******************************";
	$obj->eliminar(2);
	$res = $obj->consulta();

	while($fila = $res->fetch_assoc()){
		echo $fila["IDremplazo"]." ".$fila["IDmobiliario"]." ".$fila["fecha"]." ".$fila["costo"]." ".$fila["descripcion"]."<br>";
	}
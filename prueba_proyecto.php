<?php 
	require_once("php/proyecto.php");

	$obj =new Proyecto();
	//$obj->alta("ERP","Escolar","1","2020/02/04","2020/04/04","Sistemas Integrales");
	$res = $obj->consulta();

	while($fila = $res->fetch_assoc()){
		echo $fila["IDproyecto"]." ".$fila["nombre_pro"]." ".$fila["tipo_pro"]." ".$fila["IDempleado"]." ".$fila["fecha_in"]." ".$fila["fecha_fin"]." ".$fila["descripcion"]."<br>";
	}
	echo "******************************";
	$obj->eliminar(2);
	$res = $obj->consulta();

	while($fila = $res->fetch_assoc()){
		echo $fila["IDproyecto"]." ".$fila["nombre_pro"]." ".$fila["tipo_pro"]." ".$fila["IDempleado"]." ".$fila["fecha_in"]." ".$fila["fecha_fin"]." ".$fila["descripcion"]."<br>";
	}
 ?>
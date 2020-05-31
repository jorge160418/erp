<?php 
	require_once("php/venta.php");

	$obj =new Venta();
	//$obj->alta("2020/04/04","1","150","1");
	$res = $obj->consulta();

	while($fila = $res->fetch_assoc()){
		echo $fila["IDVenta"]." ".$fila["fecha"]." ".$fila["IDCliente"]." ".$fila["Total"]."  ".$fila["tipo_pago"]."<br>";
	}
	echo "******************************";
	$obj->eliminar(2);
	$res = $obj->consulta();

	while($fila = $res->fetch_assoc()){
		echo $fila["IDVenta"]." ".$fila["fecha"]." ".$fila["IDCliente"]." ".$fila["Total"]."  ".$fila["tipo_pago"]."<br>";
	}
 ?>
<?php 
	require_once("php/venta.php");

	$obj =new Venta();
	$obj->alta("2020/04/04","1","1569","1");
	$res = $obj->consulta();

	while($fila = $res->fetch_assoc()){
		echo $fila["IDventa"]." ".$fila["fecha"]." ".$fila["IDcliente"]." ".$fila["Total"]." ".$fila["tipo_pago"]." <br>";
	}
 ?>
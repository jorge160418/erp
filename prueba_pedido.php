<?php 
	require_once("php/pedido.php");

	$obj =new Pedido();
	//$obj->alta("2020/04/04","1","230","1","galeana 106 norte", "1");
	$res = $obj->consulta();

	while($fila = $res->fetch_assoc()){
		echo $fila["IDpedido"]." ".$fila["fecha"]." ".$fila["IDcliente"]." ".$fila["precio"]." ".$fila["cantidad"]." ".$fila["direccion"]." ".$fila["IDproducto"]."<br>";
	}
	echo "******************************";
	$obj->eliminar(2);
	$res = $obj->consulta();

	while($fila = $res->fetch_assoc()){
			echo $fila["IDpedido"]." ".$fila["fecha"]." ".$fila["IDcliente"]." ".$fila["precio"]." ".$fila["cantidad"]." ".$fila["direccion"]." ".$fila["IDproducto"]."<br>";
	}
 ?>
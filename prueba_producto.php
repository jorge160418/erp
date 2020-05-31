<?php 
	require_once("php/producto.php");

	$obj =new Producto();
	//$obj->alta("mazapan","dxcfyvgubhin","5","3","10","2","20","3");
	$res = $obj->consulta();

	while($fila = $res->fetch_assoc()){
		echo $fila["IDproducto"]." ".$fila["nombre"]." ".$fila["descripcion"]." ".$fila["preciov"]."  ".$fila["precioc"]."  ".$fila["cantidad"]."  ".$fila["cantmin"]."  ".$fila["cantmax"]."  ".$fila["categoria"]."<br>";
	}
	echo "******************************";
	$obj->eliminar(4);
	$res = $obj->consulta();

	while($fila = $res->fetch_assoc()){
		echo $fila["IDproducto"]." ".$fila["nombre"]." ".$fila["descripcion"]." ".$fila["preciov"]."  ".$fila["precioc"]."  ".$fila["cantidad"]."  ".$fila["cantmin"]."  ".$fila["cantmax"]."  ".$fila["categoria"]."<br>";
	}
 ?>
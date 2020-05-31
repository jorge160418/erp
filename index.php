<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>ERP</title>
	<link rel="stylesheet" href="css/estilos.css">
</head>
<body>
	<nav>
		<ul>
			<a href="index.php"><li>Inicio</li></a>
			<a href="?sec=act"><li>Actividad</li></a>
			<a href="?sec=asis"><li>Asistencia</li></a>
			<a href="?sec=bal"><li>Balance</li></a>
			<a href="?sec=cli"><li>Cliente</li></a>
			<a href="?sec=com"><li>Compra</li></a>
			<a href="?sec=det_com"><li>Detalle de compra</li></a>
			<a href="?sec=dev"><li>Devoluciones</li></a>
			<a href="?sec=emp"><li>Empleado</li></a>
			<a href="?sec=eval"><li>Evaluacion</li></a>
			<a href="?sec=jor"><li>Jornada</li></a>
			<a href="?sec=usu"><li>Usuario</li></a>
			<a href="?sec=mant"><li>Mantenimiento</li></a>
			<a href="?sec=matprim"><li>Materias Primas</li></a>
			<a href="?sec=mob"><li>Mobiliario</li></a>
			<a href="?sec=pago"><li>Pago</li></a>
			<a href="?sec=pedido"><li>Pedido</li></a>
			<a href="?sec=producto"><li>Producto</li></a>
			<a href="?sec=proveedor"><li>Proveedor</li></a>
			<a href="?sec=proyecto"><li>Proyecto</li></a>
			<a href="?sec=remplazo"><li>Remplazo</li></a>
			<a href="?sec=venta"><li>Venta</li></a>
		</ul>
		</ul>
	</nav>
	<?php 

		if(isset($_GET["sec"])){
			$sec = $_GET["sec"];
			switch ($sec) {
				    case 'act':
					require_once("php/vistaActividad.php");
					break;
					case 'asis':
					require_once("php/vistaAsistencia.php");
					break;
					case 'bal':
					require_once("php/vistaBalance.php");
					break;
					case 'cli':
					require_once("php/vistaCliente.php");
					break;
					case 'com':
					require_once("php/vistaCompra.php");
					break;
					case 'det_com':
					require_once("php/vistaDetalleCompra.php");
					break;
					case 'dev':
					require_once("php/vistaDevoluciones.php");
					break;
					case 'emp':
					require_once("php/vistaEmpleado.php");
					break;
					case 'eval':
					require_once("php/vistaEvaluacion.php");
					break;
					case 'jor':
					require_once("php/vistaJornada.php");
					break;
					case 'usu':
					require_once("php/vistaUsuario.php");
					break;
					case 'mant':
					require_once("php/vistaMantenimiento.php");
					break;
					case 'matprim':
					require_once("php/vistaMateriaP.php");
					break;
					case 'mob':
					require_once("php/vistaMobiliario.php");
					break;
					case 'pago':
					require_once("php/vistaPago.php");
					break;
					case 'pedido':
					require_once("php/vistaPedido.php");
					break;
					case 'producto':
					require_once("php/vistaProducto.php");
					break;
					case 'proveedor':
					require_once("php/vistaProveedor.php");
					break;
					case 'proyecto':
					require_once("php/vistaProyecto.php");
					break;
					case 'remplazo':
					require_once("php/vistaRemplazo.php");
					break;
					case 'venta':
					require_once("php/vistaVenta.php");
					break;
			}
		}
	 ?>
</body>
</html>
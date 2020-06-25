<?php 
	require_once("../fpdf/fpdf.php");
	require_once("compra.php");
	$pdf = new FPDF();
	$obj = new Compra();
	$res = $obj->consulta();
	$pdf->AddPage();
	$pdf->Image("../img/iconoreporte.png",5,5,15,15);
	$pdf->SetFont('Arial','B',20);
	$pdf->Cell(200,20,"Reporte de Compras",0,0,"C");
	$pdf->Ln(30);
	$pdf->SetFont('Arial','B',9);
	$ancho = 25;
	$pdf->Cell($ancho,10,utf8_decode("Fecha"),1,0,"C");
	$pdf->Cell($ancho,10,utf8_decode("Total"),1,0,"C");
	$pdf->Cell($ancho,10,utf8_decode("Tipo Pago"),1,0,"C");
	$pdf->Cell($ancho,10,utf8_decode("ID cliente"),1,0,"C");
	
	$pdf->Ln(10);
	$pdf->SetFont('Arial','',9);
	while($fila = $res->fetch_assoc()){
		$pdf->Cell($ancho,10,utf8_decode($fila["fecha"]),1,0,"C");
		$pdf->Cell($ancho,10,utf8_decode($fila["total"]),1,0,"C");
		$pdf->Cell($ancho,10,utf8_decode($fila["tipo_pago"]),1,0,"C");
		$pdf->Cell($ancho,10,utf8_decode($fila["id_cliente"]),1,0,"C");	
		$pdf->Ln(10);
	}
	$pdf->Output();
 ?>
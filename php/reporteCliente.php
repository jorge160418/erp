<?php 
	require_once("../fpdf/fpdf.php");
	require_once("cliente.php");
	$pdf = new FPDF();
	$obj = new Cliente();
	$res = $obj->consulta();
	$pdf->AddPage();
	$pdf->Image("../img/iconoreporte.png",5,5,15,15);
	$pdf->SetFont('Arial','B',20);
	$pdf->Cell(200,20,"Reporte de Clientes",0,0,"C");
	$pdf->Ln(30);
	$pdf->SetFont('Arial','B',9);
	$ancho = 25;
	$pdf->Cell($ancho,10,utf8_decode("Nombre"),1,0,"C");
	$pdf->Cell($ancho,10,utf8_decode("Direccion"),1,0,"C");
	$pdf->Cell($ancho,10,utf8_decode("Telefono"),1,0,"C");
	$pdf->Cell($ancho,10,utf8_decode("Correo"),1,0,"C");
	$pdf->Cell($ancho-6,10,utf8_decode("Ape Materno"),1,0,"C");
	$pdf->Cell($ancho,10,utf8_decode("Ape Paterno"),1,0,"C");
	$pdf->Cell($ancho,10,utf8_decode("Sexo"),1,0,"C");
	$pdf->Cell($ancho,10,utf8_decode("F.Nacimiento"),1,0,"C");
	$pdf->Ln(10);
	$pdf->SetFont('Arial','',9);
	while($fila = $res->fetch_assoc()){
		$pdf->Cell($ancho,10,utf8_decode($fila["nombre"]),1,0,"C");
		$pdf->Cell($ancho,10,utf8_decode($fila["direccion"]),1,0,"C");
		$pdf->Cell($ancho,10,utf8_decode($fila["telefono"]),1,0,"C");
		$pdf->Cell($ancho,10,utf8_decode($fila["correo"]),1,0,"C");
		$pdf->Cell($ancho-6,10,utf8_decode($fila["apematerno"]),1,0,"C");
		$pdf->Cell($ancho,10,utf8_decode($fila["apepaterno"]),1,0,"C");
		$pdf->Cell($ancho,10,utf8_decode($fila["sexo"]),1,0,"C");
		$pdf->Cell($ancho,10,utf8_decode($fila["fenacimiento"]),1,0,"C");
		$pdf->Ln(10);
	}
	$pdf->Output();
 ?>
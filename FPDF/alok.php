<?php
require('fpdf.php');
$pdf = new FPDF();
$pdf->AddPage();

$pdf->SetFont('Arial','I',16);
$pdf->settextcolor(145, 255, 45);
$pdf->cell(0, 10, "ALOK KUMAR GUPTA", 1, 0, 'L',0);
// $pdf->Cell(40,10,'');
$pdf->SetFont('Arial','B',16);
$pdf->ln(12.0);
$pdf->settextcolor(145, 255, 45);
$pdf->cell(0, 10, "12220300", 1, 0, 'L',1);
// $pdf->Cell(40,10,'REG NO. 12220300');
$pdf->ln(12.0);
$pdf->SetFont('Arial','U',16);
$pdf->settextcolor(145, 255, 45);
$pdf->cell(0, 10, "Master of Computer Application", 1, 0, 'L',0);
// $pdf->Cell(40,10,'Master of Computer Application');
$pdf->Output();
?>
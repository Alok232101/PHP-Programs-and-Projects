<?php
require('fpdf.php');
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10,'Hello There!');
$pdf->ln(8);
$pdf->Cell(40,10,'Alok Kumar Gupta here');
$pdf->Output();
?>
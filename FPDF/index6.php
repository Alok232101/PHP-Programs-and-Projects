<?php
require('fpdf.php');
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(150,10,"NAME - ALOK KUMAR GUPTA",0,8,'C');
$pdf->ln(5);
$pdf->Cell(40,10,'REG No. - 12220300',5,'blue','C');
$pdf->AddPage();
$pdf->Image('nCVIMG_20230708_152140111.jpg',10,6,30);
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->SetFillColor(200,220,255);
$pdf->Cell(150,10,'NAME - ALOK KUMAR GUPTA',1,'center','red');
$pdf->Cell(40,10,'REG No. - 12220300',5,'center','blue');
$pdf->Output();
?>
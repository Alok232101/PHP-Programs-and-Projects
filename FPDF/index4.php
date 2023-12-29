<?php
require("fpdf.php");
$pdf = new FPDF('P', 'in', 'Letter');
$pdf->addPage();
$pdf->setFont('Arial', 'B', 24);


$pdf->SetFillColor(255, 0, 0);
$pdf->cell(0, 2, "Graphics", 1, 0, 'L', 1);

$pdf->cell(0, 0, " ", 0, 0, 'R');
$pdf->ln(4.5);

$pdf->addPage();
$pdf->setFont('Arial', 'B', 24);
$pdf->SetFillColor(0, 255, 0);
$pdf->cell(0, 2, "text", 1, 0, 'L', 1);

$pdf->cell(0, 0, " ", 0, 0, 'R');
$pdf->ln(4.5);

$pdf->addPage();
$pdf->cell(0, 0, "PHP", 0, 0, 'C');
$pdf->ln(4.5);
$pdf->cell(0, 0, "PDF", 0, 0, 'L');
$pdf->cell(0, 0, "PDF", 0, 0, 'R');
$pdf->output();

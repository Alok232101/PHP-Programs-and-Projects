<?php
require("fpdf.php");
$pdf = new FPDF('P', 'in', 'Letter'); //orienetation, font,  page size

//first page
$pdf->addPage();
$pdf->setFont('Arial', 'B', 12);
$pdf->SetTextColor(220,50,50);
$pdf->cell(0, 0, "Personal Information", 'L');

$pdf->ln(0);

$pdf->setFont('Arial', 'B', 12);
$pdf->cell(0, 1, "Name: Alok kumar gupta", 0);

$pdf->ln(0);

$pdf->setFont('Arial', 'B', 12);
// $pdf->SetFillColor(0, 255, 0);
$pdf->cell(0, 2, "Reg No. : 12220300", 0);

$pdf->ln(0);

$pdf->setFont('Arial', 'B', 12);
$pdf->cell(0, 3, "Stream : Masters of Computer Application", 0, 0, 0);

//Second page
$pdf->addPage();
$pdf->write(7, "For a link to the next page - Click ");
$linkToPage3 = $pdf->addLink();

$pdf->setFont('', 'U');
$pdf->write(7, "here", $linkToPage3);


$linkToPage2 = $pdf->addLink();
$pdf->setLink($linkToPage2);
$pdf->image("nCVIMG_20230708_152140111.jpg", 4, 1, 2, 2, '', "https://www.linkedin.com/home?originalSubdomain=in");

//Third page
$pdf->setFont('Times', 'U', 14);
$pdf->addPage();
$pdf->SetFillColor(125,150,105);
$pdf->cell(3, 1, "Personal Information", 1);
$pdf->ln(2);
$pdf->cell(0, 1, "Name: Alok kumar gupta", 0);
$pdf->ln(0);
$pdf->cell(0, 2, "Reg No. : 12220300", 0, );
$pdf->ln(0);

$pdf->setLink($linkToPage3);
$pdf->image("nCVIMG_20230708_152140111.jpg", 4, 1, 2, 2, '', "https://www.linkedin.com/home?originalSubdomain=in");

$pdf->write(8, "For a link to the previous page - Click ");
$pdf->setTextColor(0, 0, 255);
$pdf->setFont('', 'U');
$pdf->write(8, "Now", $linkToPage2);

$pdf->output();
?> 
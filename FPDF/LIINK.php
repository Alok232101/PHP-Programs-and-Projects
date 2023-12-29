<?php 
require('fpdf.php');
$pdf = new FPDF();
// First page
$pdf->AddPage();
$pdf->SetFont('Arial','I',20);
$pdf->Write(5,"ALOK's  Next page Linkdin , click ");
$pdf->SetFont('Arial','B',16);
$link = $pdf->AddLink();
$pdf->Write(5,'here',$link);

$link2 = $pdf->AddLink();
$pdf->SetLink($link2);

// Second page
$pdf->AddPage();

$pdf->Image('nCVIMG_20230708_152140111.jpg',10,12,30,0,'','https://www.linkedin.com/home?originalSubdomain=in');
$pdf->Write(5,"Move to Next Page, click ");
$pdf->SetFont('Arial','B',16);
$pdf->Write(5,'here',$link);

$pdf->Write(5,"Move to Prev Page, click ");
$pdf->SetFont('Arial','B',16);
$pdf->Write(5,'',$link2);

?>





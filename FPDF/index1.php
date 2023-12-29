<?php
require('fpdf.php');

class PDF extends FPDF
{
function Header()
{
    
    $this->Image('nCVIMG_20230708_152140111.jpg',10,6,30);
    $this->SetFont('Arial','B',15);
    $this->Cell(80);
    $this->Cell(70,10,'ALOK KUMAR GUPTA',1,0,'C');
    $this->Ln(20);
}
function Footer()
{
    $this->SetY(-15);
    $this->SetFont('Arial','I',8);
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}
$pdf = new PDF();
// $pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',5);
// for($i=5;$i<=10;$i++)
//     $pdf->Cell(0,10,'Printing line number '.$i,0,1);
$pdf->Output();
?>
<?php
include 'connection.php';

// Fetching data from database 
$t=7;
$q="select * from teacher where id=$t";
$query=mysqli_query($conn,$q);
$res=mysqli_fetch_array($query);

// Including Files
include ('fpdf184/fpdf.php');
require ('fpdfi/fpdi.php');
//require ('fpdf/fpdf.php');
$pdf=new FPDF();

$pdf->AddPage();


$pdf->SetFont('Arial','I',20);
$pdf->SetXY(10,20);

$pdf->Write(0,'Hello, '.$res['firstname']);

$pdf->SetXY(10,30);
$pdf->Write(0,'Hello, This is the second line of this pdf file.');

$pdf->Output("t.pdf",'I');

/*
$pdf->Cell(50,30,'Hello, This is my first pdf file.');
$pdf->SetY(-50);
$pdf->Cell(-50,50,'Hello, This is the second line of this pdf file.');
$pdf->Cell(50,70,'Hello, This is the third line of this pdf file.');
*/

?>
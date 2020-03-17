<?php

include 'reporte.php';
require 'conexion.php';



$query="select nombre,apellido,cedula,num_acta,num_folio from tbactas where cedula='$_REQUEST[buscar]'";


$registros= $mysqli->query($query);

$pdf = new PDF();
$pdf ->AddPage();
$pdf ->SetFont('Arial', '', 20);
$pdf->LN(50);
$pdf-> SetXY(5,80);
$pdf->MultiCell(200,8,'Certificamos: Que la oficialia del Estado Civil de la 1RA CIRCUNCRIPCION, REPUBLICA DOMINICANA certifica el nacimiento de: ', 0,'C',0);

if($row=$registros->fetch_assoc()){
    $pdf-> SetXY(20,110);
    $pdf->Cell(130,8,'Nombre: ', 0, 0,'C');
    $pdf-> SetXY(135,110);
    $pdf->Cell(1,8,$row['nombre'], 0, 1,'C');
    $pdf-> SetXY(20,125);
    $pdf->Cell(130,8,'Apellido:', 0, 0,'C');
    $pdf-> SetXY(135,125);
    $pdf->Cell(1,8,$row['apellido'], 0, 1,'C');
    $pdf-> SetXY(20,140);
    $pdf->Cell(130,8,'Cedula :', 0, 0,'C');
    $pdf-> SetXY(133,140);
    $pdf->Cell(1,8,$row['cedula'], 0, 1,'C');
    $pdf-> SetXY(20,155);
    $pdf->Cell(130,8,'Numero de acta:', 0, 0,'C');
    $pdf-> SetXY(132,155);
    $pdf->Cell(1,8,$row['num_acta'], 0, 1,'C');
    $pdf-> SetXY(20,170);
    $pdf->Cell(130,8,'Folio de acta:', 0, 0,'C');
    $pdf-> SetXY(132,170);
    $pdf->Cell(1,8,$row['num_folio'], 0, 1,'C');
    $pdf ->Output('ACTA.pdf','D');
  
}
else{
echo " <b><center>*********ERROR CEDULA INVALIDA**********</center></b>";
}
?>
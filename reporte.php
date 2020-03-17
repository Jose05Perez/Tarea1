<?php

require 'fpdf/fpdf.php';

class pdf extends FPDF{
    function Header(){

        $this->Image('img/report.png', 94, 10);
        $this->LN(30);
        $this->SetFont('Arial', 'B', 25);
        $this->Cell(195,10,'Republica Dominicana', 0, 1,'C');
        $this->Cell(195,10,'EXTRACTO DE ACTA DE NACIMIENTO', 0, 1,'C');
        $this->Cell(195,10,'JUNTA CENTRAL ELECTORAL JCE', 0, 1,'C');
        $this->LN(60);
    }

    function Footer(){
        $this-> SetY(-15);
        $this->Image('img/barra.png',80,220);
        $this->Image('img/firma.jpg',70,250);
    }



}


?>
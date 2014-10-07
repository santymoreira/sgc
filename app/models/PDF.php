<?php 
class PDF extends FPDF
{
// Cabecera de p�gina
public function Header()
{
    
        //Primera Página
        // Logo IZQ
    $this->Image('images/Sello_ESPOCH.png',16,12,24.5,24.5);
        // Logo DER
    $this->Image('images/logo_fade.png',170,12,24.5,24.5);
    // Arial bold 15
    $this->SetFont('ARIAL','B',13);
        $this->SetTextColor(12,41,68);
    // Movernos a la derecha ENCABEZADO
        $this->Ln(7.5);
        $this->Cell(33.5);
        $this->Cell(100, 0, utf8_decode("ESCUELA SUPERIOR POLITÉCNICA DE CHIMBORAZO"), 0,"C", FALSE);
        $this->Ln(5);
        $this->Cell(41);
        $this->Cell(100, 0, utf8_decode("FACULTAD DE ADMINISTRACIÓN DE EMPRESAS"), 0,"C", FALSE);
        $this->Ln(5);
        $this->Cell(52);
        $this->Cell(100, 0, utf8_decode("COMISIÓN DE GESTIÓN DE CALIDAD"), 0,"C", FALSE);
        $this->Ln(7.5);
        $this->Cell(78);
        $this->SetTextColor(0,0,0);
        $this->SetFont('ARIAL','I',8);
        $this->Cell(100, 0, utf8_decode('"SABER PARA SER"'), 0,"C", FALSE);
    
//        DIBUJAR LINEA
        $this->SetDrawColor(31, 204, 217);
        $this->SetLineWidth(1);
        $this->Line(162, 32, 47,32);
        $this->Ln(3);
        $this->SetFont('ARIAL','B',6);
        $this->Cell(11);
        $this->Cell(100, 0, utf8_decode("ACREDITADA"), 0,"C", FALSE);
        $this->Ln(10);
        //        DIBUJAR BORDES
//      Superior
        $this->SetDrawColor(31, 204, 217);
        $this->SetLineWidth(1);
        $this->Line(210, 0.3, 0.3,0.3);
//      Inferior
        $this->SetDrawColor(31, 204, 217);
        $this->SetLineWidth(0.8);
        $this->Line(150, 296.7, 0.3,296.7);
//      Izq
        $this->SetDrawColor(31, 204, 217);
        $this->SetLineWidth(0.5);
        $this->Line(0.3, 0, 0.3,296.55);
//      Der
        $this->SetDrawColor(31, 204, 217);
        $this->SetLineWidth(0.5);
        $this->Line(209.7, 0, 209.7,250);
    
    
}

// Pie de p�gina
public  function Footer()
{
    
    // Posici�n: a 1,5 cm del final
    $this->SetY(-25);
            //        DIBUJAR LINEA
        $this->SetDrawColor(31, 204, 217);
        $this->SetLineWidth(1);
        $this->Line(146, 271.5, 8,271.5);
        // Logo IZQ
    $this->Image('images/logo_csg.png',31,273.5,17,14);
        // Logo DER
    $this->Image('images/logo_csg _cortado.png',148,235,62,62);
        //PIE PAGINA 
        $this->Ln(9);
        $this->Cell(35);
    $this->SetFont('ARIAL','B',11);
        $this->SetTextColor(12,41,68);
        $this->Cell(106, 0, utf8_decode("SISTEMA DE GESTIÓN DE LA CALIDAD"), 0,"C", FALSE);
        $this->Ln(3);
        $this->Cell(38);
    $this->SetFont('ARIAL','B',8);
        $this->SetTextColor(0,0,0);
        $this->Cell(120, 0, utf8_decode("FACULTAD DE ADMINISTRACIÓN DE EMPRESAS"), 0,"C", FALSE);
        $this->Ln(3);
        $this->Cell(51);
    $this->SetFont('ARIAL','',6);
        $this->SetTextColor(0,0,0);
        $this->Cell(106, 0, utf8_decode("Teléfono (593) 32998-200 Ext. 194 - 201"), 0,"C", FALSE);
        $this->Ln(3);
        $this->Cell(60);
    $this->SetFont('ARIAL','',6);
        $this->SetTextColor(0,0,0);
        $this->Cell(106, 0, utf8_decode("Riobamba - Ecuador"), 0,"C", FALSE);
        //numero de pagina
        $this->Cell(0,10, utf8_decode("Página: ").$this->PageNo().'/{nb}',0,0,'C');
        //fecha de reporte
        $this->Ln(5);
        $this->Cell(4);
        $this->Cell(9, 0, utf8_decode("Impreso: "), 0,"L", FALSE);
        $this->Cell(2);
        //horario de ecuador
        date_default_timezone_set('America/Guayaquil');
        $this->Cell(15,0,date("d/m/Y   H:i:s"),0,1,'L');
        $this->Cell(100);
    // N�mero de p�gina
    }
}
?>
<?php
require('fpdf17/fpdf.php');

class PDF extends FPDF
{
// Cabecera de p�gina
function Header()
{
     if($this->PageNo()==1)
    {
        //Primera Página
        // Logo
	$this->Image('logo_inm.png',60,8,90);
	// Arial bold 15
	$this->SetFont('Arial','B',20);
	// Movernos a la derecha
	$this->Cell(80);

	$this->Ln(20);
    }
    else
    {
        //Otras Páginas
        // Logo
	//$this->Image('logo_inm.png',60,8,90);
	// Arial bold 15
	$this->SetFont('Arial','B',20);
	// Movernos a la derecha
	$this->Cell(80);

	$this->Ln(20);
    }
	
}

// Pie de p�gina
function Footer()
{
    
	// Posici�n: a 1,5 cm del final
	$this->SetY(-15);
	// Arial italic 8
	$this->SetFont('Arial','I',8);
	// N�mero de p�gina
//        $cadena= 'Página';
         utf8_decode($cadena);
//        $utf= utf8_decode($cadena);
//        $cad= utf8_encode($utf);
	$this->Cell(0,10, utf8_decode("Página").$this->PageNo().'/{nb}',0,0,'C');
}
}

$dbh=mysql_connect ("localhost", "root", "123456") or die ('problema conectando porque :' . mysql_error());
mysql_select_db ("sistemadegestion",$dbh);
$q=  "SELECT * FROM empleado ";  
$dato=  mysql_query($q,$dbh)or die ("problema con query");;
$row = mysql_fetch_row($dato);


// Creaci�n del objeto de la clase heredada
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',12);
for($i=0;$i<=40;$i++)
{
//{
//        $pdf->Write(10,$row[$i]);
//}
$str='Imprimiendo línea número ';
$str = utf8_decode($str);
	$pdf->Cell(0,10,$str.$i,0,1);
}
$pdf->Output();
?>

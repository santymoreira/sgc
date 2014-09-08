<?php
require('fpdf17/fpdf.php');
$dbh=mysql_connect ("localhost", "root", "123456") or die ('problema conectando porque :' . mysql_error());
mysql_select_db ("sistemadegestion",$dbh);
$q=  "SELECT * FROM empleado ";  
$dato=  mysql_query($q,$dbh)or die ("problema con query");
class PDF extends FPDF
{
// Cabecera de p�gina
function Header()
{
     if($this->PageNo()==1)
    {
         
         $this->SetAuthor(utf8_decode('Sistema de Gestión'));
        $this->SetTitle('Reporte Listado de Servidores', FALSE);
        //Primera Página
        // Logo
//        $this->Image($file)
	$this->Image('logo_inm.png',50,8,120);
//	
	// Arial bold 15
	$this->SetFont('Arial','B',10);
	// Movernos a la derecha
	$this->Cell(80);
        $this->SetLineWidth(0.8);
        $this->Line(200, 45, 10,45);
//        $rows= mysql_fetch_row($dato);
//        $this->Cell(16,8,'Nombre',1,0,'L',FALSE);
        $this->Ln(40);
        $dbh=mysql_connect ("localhost", "root", "123456") or die ('problema conectando porque :' . mysql_error());
        mysql_select_db ("sistemadegestion",$dbh);
        $q=  "SELECT * FROM empleado where CI='0604121481'";         
        $dato=  mysql_query($q,$dbh)or die ("problema con query");
        $data= mysql_fetch_row($dato);
        $this->SetTextColor(0, 71, 171);
        $this->Cell(0,0,'Nombre: ',0,1,'L');
        $this->Cell(15);
        $this->SetTextColor(0, 0, 0);
        $this->Cell(0,0,utf8_decode($data[2]),0,1,'L');
        $this->Cell(100);
        $this->SetTextColor(0, 71, 171);
        $this->Cell(0,0,'E-mail: ',0,1,'L');
        $this->Cell(112);
        $this->SetTextColor(0, 0, 0);
        $this->Cell(0,0,$data[4],0,1,'L');
        $this->Ln(5);
        $this->SetTextColor(0, 71, 171);
        $this->Cell(0,0,'Cedula: ',0,1,'L');
        $this->Cell(15);
        $this->SetTextColor(0, 0, 0);
        $this->Cell(0,0,$data[1],0,1,'L');
        $this->Cell(100);
        $this->SetTextColor(0, 71, 171);
        $this->Cell(0,0,utf8_decode('Fecha de Impresion: '),0,1,'L');
        $this->SetTextColor(0, 71, 171);
        $this->Cell(135);
        $this->SetTextColor(0, 0, 0);
        $this->Cell(0,0,date("d/m/Y   H:i:s"),0,1,'L');
        $this->SetFont('Arial', 'BIU', 18);
        $this->Ln(10);
        $this->SetTextColor(0, 71, 171);
        $this->Cell(0,0,'Reporte Indicadores ',0,1,'C');
	$this->Ln(10);
    }
    else
    {
        $this->Ln(10);
        //Otras Páginas
        // Logo
	//$this->Image('logo_inm.png',60,8,90);
	// Arial bold 15
	$this->SetFont('Arial','BIU',20);
	// Movernos a la derecha
	$this->SetTextColor(0, 71, 171);
        $this->Cell(0,0,'Reporte Indicadores ',0,1,'C');
	$this->Ln(10);

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



$cabeceraTabla=array("CI","Nombre","Sexo","E-Mail","Celular","Convencional");


//$pdf->SetTitle('Reporte Listado de Servidores',TRUE);

// Creaci�n del objeto de la clase heredada
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();

//for($i=0;$i<count($cabeceraTabla);$i++)
//{
//    $pdf->Cell(3,10,$cabeceraTabla[$i],1,0,'C');
//}
$pdf->SetFillColor(0,71,171);
$pdf->SetFont('Courier','BI',9);
$pdf->SetTextColor(255,255,255);
//$pdf->Cell(0);
$pdf->Cell(16,8,$cabeceraTabla[0],0,0,'L',TRUE);
$pdf->Cell(65,8,$cabeceraTabla[1],0,0,'L',TRUE);
$pdf->Cell(13,8,$cabeceraTabla[2],0,0,'L',TRUE);
$pdf->Cell(50,8,$cabeceraTabla[3],0,0,'L',TRUE);
$pdf->Cell(20,8,$cabeceraTabla[4],0,0,'L',TRUE);
$pdf->Cell(25,8,$cabeceraTabla[5],0,0,'L',TRUE);
$pdf->Ln(8);


//$row = mysql_fetch_row($dato);
while ($rows=  mysql_fetch_array($dato))
{
    $pdf->SetFillColor(255,255,255);
    $pdf->SetTextColor(000,000,000);
    
    $pdf->SetFont('Arial','',6.5);
//    $pdf->Cell(0);
    $pdf ->Cell(16,8,$rows['CI'],'LR',0,'L',TRUE);
    $pdf ->Cell(65,8,utf8_decode($rows['NOMBRES']),'LR',0,'L',TRUE);
    if($rows['SEXO'] == 'H')
        $sexomostrar='HOMBRE';
    else
        $sexomostrar='MUJER';
    $pdf ->Cell(13,8,$sexomostrar,'LR',0,'L',TRUE);
    $pdf ->Cell(50,8,$rows['EMAIL'],'TB',0,'L',TRUE);
    $pdf ->Cell(20,8,$rows['CELULAR'],'TB',0,'L',TRUE);
    if($rows['COD_EMPLEADO']>0 && $rows['COD_EMPLEADO']<=4)
    {
        $pdf->SetFillColor(255,0,0);
        $pdf->SetTextColor(255,255,255);
        $pdf ->Cell(25,8,$rows['CONVENCIONAL'],1,0,'L',TRUE);
    }
    if($rows['COD_EMPLEADO']>4 && $rows['COD_EMPLEADO']<=9)
    {
        $pdf->SetFillColor(255,215,0);
        $pdf->SetTextColor(000,000,000);
        $pdf ->Cell(25,8,$rows['CONVENCIONAL'],1,0,'L',TRUE);
    }
    if($rows['COD_EMPLEADO']>9)
    {
        $pdf->SetFillColor(0,168,107);
        $pdf->SetTextColor(255,255,255);
        $pdf ->Cell(25,8,$rows['CONVENCIONAL'],1,0,'L',TRUE);
    }
    
    
    //$pdf ->Cell(25,8,$rows['CONVENCIONAL'],1,0,'L',TRUE);
    $pdf->Ln(8);
}



$pdf->SetFont('Times','',12);
for($i=0;$i<=20;$i++)
{
//{
//        $pdf->Write(10,$row[$i]);
//}
    $pdf->SetTextColor(0,0,0);
$str='Imprimiendo línea número ';
$str = utf8_decode($str);
	$pdf->Cell(0,10,$str.$i,0,1);
}
$pdf->Output();
?>

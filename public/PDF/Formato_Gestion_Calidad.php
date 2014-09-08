<?php
require('fpdf17/fpdf.php');
//require '';
 session_start();
 
 require '../../../Acceso/clConexion.php';
$conn=  conexionBD::getInstance();
$conn->conectarBD();
// $dbh=mysql_connect ("localhost", "root", "") or die ('problema conectando porque :' . mysql_error());
//mysql_select_db ("sistemadegestion",$dbh);
date_default_timezone_set('America/Guayaquil');
$query = "SELECT NOMBRE FROM escuela where COD_ESCUELA=2";
$m1= mysql_query($query) or die ("Por favor ingrese los datos correctamente1");
$escuelare=  mysql_fetch_row($m1);

mysql_query("SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'");

$query1 = "SELECT nombres,email FROM  empleado where CI=".$_SESSION['user'];
$m2= mysql_query($query1) or die ("Por favor ingrese los datos correctamente2");
$datos=  mysql_fetch_row($m2);

$query2 = "SELECT DESCRIPCION from proceso where COD_PROCESO =".$_SESSION['pro']." AND COD_MACROPROCESO=".$_SESSION['macro'];
$m3= mysql_query($query2) or die ("Por favor ingrese los datos correctamente3");
$nompro= mysql_fetch_array($m3);


$query4 = "SELECT I.PORCENTAJE FROM indicador AS I INNER JOIN proceso AS PR ON I.COD_PROCESO=PR.COD_PROCESO WHERE I.COD_EMPLEADO=".$_SESSION['cod']." AND PR.COD_PROCESO=".$_SESSION['pro']." AND PR.COD_MACROPROCESO=".$_SESSION['macro']." AND I.FECHA_INICIO='".$_SESSION['piini']."' AND I.FECHA_FIN='".$_SESSION['pffin']."'";
$m4= mysql_query($query4) or die ("Por favor ingrese los datos correctamente4");
$porce= mysql_fetch_array($m4);


$cumple="CALL porcentajeIndicadoresxEscuela(".$_SESSION['pro'].",".$_SESSION['macro'].",2,".$porce['PORCENTAJE'].")";
$cump=mysql_query($cumple) or die ("Por favor ingrese los datos correctamente cumplimiento");
$cumplimiento=mysql_fetch_array($cump);




class PDF extends FPDF
{
// Cabecera de p�gina
function Header()
{
    
        //Primera Página
        // Logo IZQ
	$this->Image('Sello_ESPOCH.png',16,12,24.5,24.5);
        // Logo DER
	$this->Image('logo_fade.png',170,12,24.5,24.5);
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
function Footer()
{
    
	// Posici�n: a 1,5 cm del final
	$this->SetY(-25);
            //        DIBUJAR LINEA
        $this->SetDrawColor(31, 204, 217);
        $this->SetLineWidth(1);
        $this->Line(146, 271.5, 8,271.5);
        // Logo IZQ
	$this->Image('logo_csg.png',31,273.5,17,14);
        // Logo DER
	$this->Image('logo_csg _cortado.png',148,235,62,62);
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
        $this->Cell(120, 0, utf8_decode("FACULTAD DE ADMISNISTRACIÓN DE EMPRESAS"), 0,"C", FALSE);
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
        $this->Cell(15,0,date("d/m/Y   H:i:s"),0,1,'L');
        $this->Cell(100);
	// N�mero de p�gina
	
        

}
}

//$dbh=mysql_connect ("localhost", "root", "123456") or die ('problema conectando porque :' . mysql_error());
//mysql_select_db ("sistemadegestion",$dbh);
//$q=  "SELECT * FROM empleado ";  
//$dato=  mysql_query($q,$dbh)or die ("problema con query");;
//$row = mysql_fetch_row($dato);


// Creaci�n del objeto de la clase heredada
$pdf = new PDF();
//$pdf=new FPDF('P','mm','A4');
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',12);
//for($i=0;$i<=80;$i++)
//{
//{
//        $pdf->Write(10,$row[$i]);
//}

//}
//$pdf->Ln(9);
//$pdf->Ln(12);
$pdf->SetFont('ARIAL','B',15);
$pdf->SetTextColor(12,41,68);
$pdf->Cell(120, 0, utf8_decode("Reporte de Indicadores"), 0,"C", TRUE);
$pdf->Ln(15);
$pdf->Cell(20);
$pdf->SetFont('ARIAL','',10);
$pdf->SetTextColor(12,41,68);
$pdf->Cell(50, 8, "CI:    ".$_SESSION['user'],"TLRB", 0,"L", FALSE);
//$pdf->Cell(10);
//$pdf->Ln(9);
$pdf->Cell(100, 8, utf8_decode("NOMBRE:    ".$datos[0]),"TBR", 0,"L", FALSE);
$pdf->Ln(8);
$pdf->Cell(20);
$pdf->Cell(150, 8, utf8_decode("EMAIL:    ".$datos[1]),"LRB", 0,"L", FALSE);
$pdf->Ln(8);
$pdf->Cell(20);
$pdf->Cell(150, 8, utf8_decode($escuelare[0]),"LRB", 0,"C", FALSE);
$pdf->Ln(8);
$pdf->Cell(20);
$pdf->Cell(150, 8, utf8_decode("INDICADOR:    ".$nompro['DESCRIPCION']),"LRB", 0,"L", FALSE);
$pdf->Ln(8);
$pdf->Cell(20);
$pdf->Cell(75, 8, utf8_decode("Fecha Inicio:    ".$_SESSION['piini']),"LRB", 0,"L", FALSE);
//$pdf->Ln(8);
//$pdf->Cell(10);
$pdf->Cell(75, 8, utf8_decode("Fecha Fin:    ".$_SESSION['pffin']),"LRB", 0,"L", FALSE);
$pdf->Ln(8);
//$pdf->Cell(100, 0, utf8_decode("Fecha Fin:    ".$_SESSION['De']), 0,"C", FALSE);
//$pdf->Ln(9);
$porc=round($cumplimiento['cumple'],2);
if($porc>=0 && $porc<=70)
{
    $pdf->SetFillColor(255,0,0);
    $pdf->SetTextColor(255,255,255);
    $pdf->Cell(20);
    $pdf->Cell(150, 8, utf8_decode("PORCENTAJE:    ".$porc),"LRB", 0,"C", TRUE);
}
 else {
    if($porc>70 && $porc<=90)
    {
    $pdf->SetFillColor(226,74,14);
    $pdf->SetTextColor(255,255,255);
    $pdf->Cell(20);
    $pdf->Cell(150, 8, utf8_decode("PORCENTAJE:    ".$porc),"LRB", 0,"C", TRUE);
    }
 else {
        $pdf->SetFillColor(0,140,0);
    $pdf->SetTextColor(255,255,255);
    $pdf->Cell(20);
    $pdf->Cell(150, 8, utf8_decode("PORCENTAJE:    ".$porc),"LRB", 0,"C", TRUE);
    }
    
}

$pdf->Ln(15);
$pdf->Cell(20);
$pdf->SetFont('ARIAL','B',15);
$pdf->SetTextColor(12,41,68);
$pdf->SetFillColor(255,255,255);
$pdf->Cell(150, 0, utf8_decode("Gráfico"), 0,"C", FALSE);
//$pdf->Ln(8);
$pdf->Image("../pChart2.1.4/examples/pictures/".$_SESSION['user'].".png",20,120,180,45.5);

$pdf->Output('MisIndicadores_'.$_SESSION['user'].'.pdf','I');

//,'D'




?>
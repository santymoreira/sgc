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
$queryc="SELECT NOMBRES FROM empleado WHERE CI = '".$_SESSION['user']."'";
$c= mysql_query($queryc) or die ("Por favor ingrese los datos correctamente nom");
$ciimp= mysql_fetch_array($c);

$conn->terminarConexion();


$conn->conectarBD();

$query = "SELECT NOMBRE FROM escuela where COD_ESCUELA=2";
$m1= mysql_query($query) or die ("Por favor ingrese los datos correctamente1");
$escuelare=  mysql_fetch_row($m1);

$conn->terminarConexion();
$conn->conectarBD();
$query5="SELECT CI,NOMBRES FROM empleado WHERE COD_EMPLEADO = ".$_SESSION['user1'];
//$query4 = "CALL PorcentajeReporteMensual(".$_SESSION['promem'].",".$_SESSION['macromem'].",2,".$_SESSION['sumamensualem'].",". $_SESSION['numrowsem'].")";
$m5= mysql_query($query5) or die ("Por favor ingrese los datos correctamente3");
$ci= mysql_fetch_array($m5);
$conn->terminarConexion();




$conn->conectarBD();

mysql_query("SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'");

$query1 = "SELECT nombres,email FROM  empleado where COD_EMPLEADO =".$_SESSION['user1'];
$m2= mysql_query($query1) or die ("Por favor ingrese los datos correctamente ci");
$datos=  mysql_fetch_row($m2);

$query2 = "SELECT DESCRIPCION from proceso where COD_PROCESO =".$_SESSION['promem']." AND COD_MACROPROCESO=".$_SESSION['macromem'];
$m3= mysql_query($query2) or die ("Por favor ingrese los datos correctamente3");
$nompro= mysql_fetch_array($m3);


$conn->terminarConexion();
$conn->conectarBD();
$query4 = "CALL PorcentajeReporteMensual(".$_SESSION['promem'].",".$_SESSION['macromem'].",2,".$_SESSION['sumamensualem'].",". $_SESSION['numrowsem'].")";
$m4= mysql_query($query4) or die ("Por favor ingrese los datos correctamente4");
$cumplemes= mysql_fetch_array($m4);

switch ($_SESSION['mesmem']){
    case 1:
        $mes='Enero';
        break;
    case 2:
        $mes='Febrero';
        break;
    case 3:
        $mes='Marzo';
        break;
    case 4:
        $mes='Abril';
        break;
    case 5:
        $mes='Mayo';
        break;
    case 6:
        $mes='Junio';
        break;
    case 7:
        $mes='Julio';
        break;
    case 8:
        $mes='Agosto';
        break;
    case 9:
        $mes='Septiembre';
        break;
    case 10:
        $mes='Octubre';
        break;
    case 11:
        $mes='Novienbre';
        break;
    case 12:
        $mes='Diciembre';
        break;
}

$conn->terminarConexion();
$conn->conectarBD();
$querya = "CALL Obteneranioactual";
$ma= mysql_query($querya) or die ("Por favor ingrese los datos correctamente ani");
$ani= mysql_fetch_array($ma);


//$cumple="CALL porcentajeIndicadoresxEscuela(".$_SESSION['pro'].",".$_SESSION['macro'].",2,".$porce['PORCENTAJE'].")";
//$cump=mysql_query($cumple) or die ("Por favor ingrese los datos correctamente cumplimiento");
//$cumplimiento=mysql_fetch_array($cump);
//include("config.inc.php");
//$dbh=mysql_connect ("localhost", "root", "") or die ('problema conectando porque :' . mysql_error());

// seleccionado la base de datos

//mysql_select_db ("sistemadegestion",$dbh);

//$quer="SELECT DISTINCT ind.PORCENTAJE FROM empleado AS emp INNER JOIN empleado_escuela AS ee ON emp.COD_EMPLEADO = ee.COD_EMPLEADO INNER JOIN escuela_proceso AS ep ON ep.COD_ESCUELA = ee.COD_ESCUELA INNER JOIN proceso AS pro ON pro.COD_PROCESO = ep.COD_PROCESO AND pro.COD_MACROPROCESO = ep.COD_MACROPROCESO INNER JOIN indicador AS ind ON ind.COD_PROCESO = pro.COD_PROCESO WHERE  ep.COD_ESCUELA =".$_POST[a]." AND emp.CI = '".$_SESSION['CIDocente']."' AND ind.FECHA_INICIO = '".$_POST[c]."' AND ind.FECHA_FIN= '".$_POST[d]."' AND pro.DESCRIPCION = '".$_POST[b]."'";
//$m1= mysql_query($quer, $dbh) or die ("problema con query");
    //$query = "SELECT ES.cod_escuela,ES.nombre FROM  empleado AS EM INNER JOIN empleado_escuela AS EE ON EM.cod_empleado = EE.cod_empleado INNER JOIN escuela AS ES ON es.cod_escuela = EE.cod_escuela WHERE EM.ci =" . $_SESSION['CIDocente'];
//$row1 = mysql_fetch_row($m1);
//if ($row1[0]===0)
//    $asd=0;
//else
//    if ($row1[0]==0.369458)
 //   $asd=100;



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
$pdf->Cell(135, 0, utf8_decode("Reporte Mensual de Indicadores"), 0,"C", TRUE);
$pdf->Ln(15);
$pdf->Cell(20);
$pdf->SetFont('ARIAL','',10);
$pdf->SetTextColor(12,41,68);
$pdf->Cell(50, 8, "Impreso por:    ".$ciimp['NOMBRES']."       CI:     ".$_SESSION['user'],"", 0,"L", FALSE);
$pdf->Ln(12);
$pdf->Cell(20);
$pdf->Cell(50, 8, "CI:    ".$ci['CI'],"TLRB", 0,"L", FALSE);
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
$pdf->Cell(150, 8, utf8_decode("Mes:    ".$mes."          Año: ".$ani['anio']),"LRB", 0,"C", FALSE);
//$pdf->Ln(8);
//$pdf->Cell(10);
//$pdf->Cell(75, 8, utf8_decode("Fecha Fin:    ".$_SESSION['pffin']),"LRB", 0,"L", FALSE);
$pdf->Ln(8);
//$pdf->Cell(100, 0, utf8_decode("Fecha Fin:    ".$_SESSION['De']), 0,"C", FALSE);
//$pdf->Ln(9);
$porc=round($cumplemes['cumple'],2);
if($porc>=0 && $porc<=70)
{
    $pdf->SetFillColor(255,0,0);
    $pdf->SetTextColor(255,255,255);
    $pdf->Cell(20);
    $pdf->Cell(150, 8, utf8_decode("PORCENTAJE:    ".$porc." %"),"LRB", 0,"C", TRUE);
}
 else {
    if($porc>70 && $porc<=90)
    {
    $pdf->SetFillColor(226,74,14);
    $pdf->SetTextColor(255,255,255);
    $pdf->Cell(20);
    $pdf->Cell(150, 8, utf8_decode("PORCENTAJE:    ".$porc." %"),"LRB", 0,"C", TRUE);
    }
 else {
        $pdf->SetFillColor(0,140,0);
    $pdf->SetTextColor(255,255,255);
    $pdf->Cell(20);
    $pdf->Cell(150, 8, utf8_decode("PORCENTAJE:    ".$porc." %"),"LRB", 0,"C", TRUE);
    }
    
}

$pdf->Ln(15);
$pdf->Cell(20);
$pdf->SetFont('ARIAL','B',15);
$pdf->SetTextColor(12,41,68);
$pdf->SetFillColor(255,255,255);
$pdf->Cell(150, 0, utf8_decode("Gráfico"), 0,"C", FALSE);
//$pdf->Ln(8);
$pdf->Image("../pChart2.1.4/examples/pictures/RMAut".$ci['CI'].".png",20,140,180,45.5);

$pdf->Output('Indicadores_Mensual_Empleado_'.$ci['CI'].'.pdf','I');

//,'D'




?>
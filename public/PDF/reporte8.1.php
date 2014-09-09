<?php
//require('mysql_table.php');


class PDF extends PDF_MySQL_Table
{
function Header()
{
	//Title
	//esto para poner el logo
	$this -> Image ('logoquitumbe.jpg',10,24,25);
	//Fuente
	$this -> SetFont('Times','B',15);
	//Movernos a la derecha
	$this -> Cell(80);
	//Titulo
	$this -> Cell(120,10,utf8_decode('COLEGIO DE BACHILLERATO TÉCNICO FISCAL "QUITUMBE"'),0,0,'C');
	$this -> Cell(-120,40,utf8_decode('Joyagshi - Chunchi - Ecuador'),0,0,'C');
	$this -> Cell(100,55,utf8_decode('Telefax. 032352279'),0,0,'C');
	$this -> Cell(-90,70,utf8_decode('colegio_quitumbe@hotmail.com'),0,0,'C');
	$this -> Cell(90,100,utf8_decode('Boletín de Calificaciones'),0,0,'C');
	$this -> Cell(-250,130,utf8_decode('Alumno:'),0,0,'C');
	$this -> Cell(310,130,utf8_decode($_POST['estudiante']),0,0,'C');
	$this -> Cell(-200,130,utf8_decode('Periodo:'),0,0,'C');
	$this -> Cell(320,130,utf8_decode($_POST['periodo']),0,0,'C');
        //Salto de Linea
	//$this -> Ln(20);
	//$this -> Ln(20);
	$this -> SetFont('Times','B',10);
	//$this -> Cell(0,10,utf8_decode('texto'),0,'C');
	$this -> Ln(4);
		$this -> Ln(10);
	//$this -> Cell(0,10,utf8_decode('texto'),0,'C');
	$this -> Ln(4);
	//$this -> Cell(0,10,utf8_decode('texto'),0,'C');
	$this -> Ln(4);
	$this -> Ln(4);
	$this -> Ln(4);
	$this -> Ln(4);
	$this -> Ln(4);
	$this -> Ln(4);
	$this -> Ln(14);
	//$this -> Cell(0,35,utf8_decode('Reporte de Representantes'),0,'C');
	$this -> Ln(4);	
	// $this -> Cell(0,10,utf8_decode('Usuario: '.$_POST['nombres']." |"),0,'L');
	$fecha=date("d-m-Y");
	$this -> Cell(0,40,$fecha,0,'L');
	$this -> Ln(30);
	//Ensure table header is output
	parent::Header();
}

function Footer()
{
	//pied de pagina
	//Posiciones: a 1,5 cm del final
	$this ->  SetY(-15);
	//Arial Italic 8
	$this -> SetFont('Arial','I',8);
	//Numero de Pagina
	$this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');

}





}

//Connect to database
//mysql_connect('localhost','root','');
//mysql_select_db('saq_quitumbe');

$pdf=new PDF('L','mm','A4');
$pdf->AddPage();
$pdf->AliasNbPages();



//Second table: specify 3 columns
$pdf->AddCol('NOMBRE_MAT',65,utf8_decode('Materia'));
$pdf->AddCol('PRIMER_PARCIAL',10,utf8_decode('P 1º'));
$pdf->AddCol('SEGUNDO_PARCIAL',10,utf8_decode('P 2º'));
$pdf->AddCol('TERCER_PARCIAL',10,utf8_decode('P 3º'));
$pdf->AddCol('PROMEDIO_PARCIAL',16,'Prom P');
$pdf->AddCol('TOTAL_PARCIAL',15,'Total P');
$pdf->AddCol('EXAM_QUIM_100',23,'Exam100%');
$pdf->AddCol('EXAM_QUIM_20',21,'Exam20%');
$pdf->AddCol('PROMEDIO_QUIMESTRAL',35,'Prom Quimestral');
$pdf->AddCol('COMP_CUALITTIVO',25,'Cuantitativo');
$pdf->AddCol('COMP_CUALITTIVO',24,'Cualitativo');
$pdf->AddCol('ESTADO_COMPORTAMIENTO',35,'Comportamiento');


//$pdf->Table('SELECT  DISTINCT ev.`ID_PERIODO`,m.`NOMBRE_MAT`,ev.`PRIMER_PARCIAL`,ev.`SEGUNDO_PARCIAL`,ev.`TERCER_PARCIAL`,ev.`PROMEDIO_PARCIAL`,ev.`TOTAL_PARCIAL`,ev.`EXAM_QUIM_100`,ev.`EXAM_QUIM_20`,ev.`PROMEDIO_QUIMESTRAL`,ev.`ESTADO_NOTA`,ev.`COMP_CUANTITATIVO`,ev.`COMP_CUALITTIVO`,ev.`ESTADO_COMPORTAMIENTO`
//FROM `r_evaluacion` AS ev 
//INNER JOIN `r_matricula` AS mtr ON mtr.`ID_ESTUDIANTE`=ev.`ID_ESTUDIANTE`
//INNER JOIN `t_estudiante` AS t ON ev.`ID_ESTUDIANTE`=t.`ID_ESTUDIANTE` 
//INNER JOIN `t_materia` AS m ON m.`ID_MATERIA`=ev.`ID_MATERIA`
//INNER JOIN `t_periodo` as p on p.`ID_PERIODO`=ev.`ID_PERIODO`
//WHERE t.`NOMBRES`="'.$_POST['estudiante'].'" AND p.`DESCRIPCION`="'.$_POST['periodo'].'" 
//
//');






$pdf->Output();
?>
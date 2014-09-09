<?php
require('pdfabase.php');

$pdf = new PDF('L','pt','A3');
$pdf->SetFont('Arial','',11.5);
$pdf->connect('localhost','root','123456','sistemadegestion');
$attr = array('titleFontSize'=>18, 'titleText'=>'Listado');
$pdf->mysql_report("SELECT CI,NOMBRES,SEXO,EMAIL,CELULAR,CONVENCIONAL FROM empleado ORDER BY nombres",false,$attr);
$pdf->Output();
?>
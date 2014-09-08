<?php
require('html_table.php');

$pdf=new PDF();
$pdf->AddPage();
$pdf->SetFont('Arial','',12);
$dbh=mysql_connect ("localhost", "root", "123456") or die ('problema conectando porque :' . mysql_error());
mysql_select_db ("sistemadegestion",$dbh);
$result=mysql_query("SELECT * FROM empleado ORDER BY nombres",$dbh);
//$number_of_rows= mysql_numrows($result);
//while($row = mysql_fetch_array($result))
//{
$html='<table border="1">
<tr>
<td width="100" height="30">'.printf("%s",$row["CI"]).'</td>
</tr>
</table>';
//}



$pdf->WriteHTML($html);
$pdf->Output();
?>
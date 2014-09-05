<?php
/* CAT:Labels */
//$a='a';
require '../../../../Acceso/clConexion.php';
$conn=  conexionBD::getInstance();
$conn->conectarBD();
session_start();
//$dbh=mysql_connect ("localhost", "root", "") or die ('problema conectando porque :' . mysql_error());
//mysql_select_db ("sistemadegestion",$dbh);
$query = "SELECT NOMBRE FROM escuela where COD_ESCUELA=2";
$m1= mysql_query($query) or die ("Por favor ingrese los datos correctamente1");
$escuelare=  mysql_fetch_row($m1);


$query2 = "SELECT DESCRIPCION from proceso where COD_PROCESO =".$_SESSION['pro']." AND COD_MACROPROCESO=".$_SESSION['macro'];
$m2= mysql_query($query2) or die ("Por favor ingrese los datos correctamente2");
$nompro= mysql_fetch_array($m2);

$query3 = "SELECT I.PORCENTAJE FROM indicador AS I INNER JOIN proceso AS PR ON I.COD_PROCESO=PR.COD_PROCESO WHERE I.COD_EMPLEADO=".$_SESSION['cod']." AND PR.COD_PROCESO=".$_SESSION['pro']." AND PR.COD_MACROPROCESO=".$_SESSION['macro']." AND I.FECHA_INICIO='".$_SESSION['iini']."' AND I.FECHA_FIN='".$_SESSION['ffin']."'";
$m3= mysql_query($query3) or die ("Por favor ingrese los datos correctamente3");
$porce= mysql_fetch_array($m3);

$cumple="CALL porcentajeIndicadoresxEscuela(".$_SESSION['pro'].",".$_SESSION['macro'].",2,".$porce['PORCENTAJE'].")";
$cump=mysql_query($cumple) or die ("Por favor ingrese los datos correctamente cumplimiento");
$cumplimiento=mysql_fetch_array($cump);
 /* pChart library inclusions */

 include("../class/pData.class.php");
 include("../class/pDraw.class.php");
 include("../class/pImage.class.php");
 include("../class/pIndicator.class.php");

 /* Create and populate the pData object */
 $MyData = new pData();  
 $MyData->addPoints(array(4,12,15,8,5,-5),"Probe 1");
 $MyData->addPoints(array(7,2,4,14,8,3),"Probe 2");
 $MyData->setAxisName(0,"Temperatures");
 $MyData->setAxisUnit(0,"°C");
 $MyData->addPoints(array("Jan","Feb","Mar","Apr","May","Jun"),"Labels");
 $MyData->setSerieDescription("Labels","Months");
 $MyData->setAbscissa("Labels");

 /* Create the pChart object */
 $myPicture = new pImage(900,330,$MyData);

 /* Draw the background */
 $Settings = array("R"=>0, "G"=>0, "B"=>255, "Dash"=>1, "DashR"=>0, "DashG"=>0, "DashB"=>255);
 $myPicture->drawFilledRectangle(0,0,900,330,$Settings);

 /* Overlay with a gradient */
 $Settings = array("StartR"=>219, "StartG"=>231, "StartB"=>139, "EndR"=>1, "EndG"=>138, "EndB"=>68, "Alpha"=>50);
 $myPicture->drawGradientArea(0,0,900,330,DIRECTION_VERTICAL,$Settings);
 $myPicture->drawGradientArea(0,0,900,40,DIRECTION_VERTICAL,array("StartR"=>0,"StartG"=>0,"StartB"=>0,"EndR"=>50,"EndG"=>50,"EndB"=>50,"Alpha"=>80));

 /* Add a border to the picture */
 $myPicture->drawRectangle(0,0,899,329,array("R"=>0,"G"=>0,"B"=>0));
 
 /* Write the picture title */ 
 $myPicture->setFontProperties(array("FontName"=>"../../../../GOTHIC/GOTHIC.ttf","FontSize"=>15));
 $myPicture->drawText(20,25,$nompro['DESCRIPCION'],array("R"=>255,"G"=>255,"B"=>255));

 
 /* Enable shadow computing */  
 $myPicture->setShadow(TRUE,array("X"=>1,"Y"=>1,"R"=>0,"G"=>0,"B"=>0,"Alpha"=>20)); 
 
  /* Write some text */  
 $TextSettings = array("R"=>255,"G"=>255,"B"=>255,"Angle"=>0,"FontSize"=>12); 
 $myPicture->drawText(110,200,"CI: ".$_SESSION['user'],$TextSettings); 
 
  /* Write some text */  
 $TextSettings = array("R"=>255,"G"=>255,"B"=>255,"Angle"=>0,"FontSize"=>12); 
 $myPicture->drawText(110,222,$escuelare[0],$TextSettings); 
 
   /* Write some text */  
 $TextSettings = array("R"=>255,"G"=>255,"B"=>255,"Angle"=>0,"FontSize"=>12); 
 $myPicture->drawText(110,244,"Fecha Inicio: ".$_SESSION['iini'],$TextSettings); 
 
   /* Write some text */  
 $TextSettings = array("R"=>255,"G"=>255,"B"=>255,"Angle"=>0,"FontSize"=>12); 
 $myPicture->drawText(110,266,"Fecha Fin: ".$_SESSION['ffin'],$TextSettings); 
/* Write some text */  
// $myPicture->setFontProperties(array("FontName"=>"../fonts/Bedizen.ttf","FontSize"=>6)); 
// $TextSettings = array("DrawBox"=>TRUE,"BoxRounded"=>TRUE,"R"=>0,"G"=>0,"B"=>0,"Angle"=>0,"FontSize"=>10); 
// $myPicture->drawText(110,140,"CI:",$TextSettings);
 
 /* Write some text */  
// $myPicture->setFontProperties(array("FontName"=>"../fonts/Bedizen.ttf","FontSize"=>6)); 
// $TextSettings = array("DrawBox"=>TRUE,"BoxRounded"=>TRUE,"R"=>0,"G"=>0,"B"=>0,"Angle"=>0,"FontSize"=>10); 
// $myPicture->drawText(110,162,"Escuela:",$TextSettings);
 
// /* Write some text */  
// $myPicture->setFontProperties(array("FontName"=>"../fonts/Bedizen.ttf","FontSize"=>6)); 
// $TextSettings = array("DrawBox"=>TRUE,"BoxRounded"=>TRUE,"R"=>0,"G"=>0,"B"=>0,"Angle"=>0,"FontSize"=>10); 
// $myPicture->drawText(110,184,"Fecha Inicio:",$TextSettings);
// 
 /* Write some text */  
// $myPicture->setFontProperties(array("FontName"=>"../fonts/Bedizen.ttf","FontSize"=>6)); 
// $TextSettings = array("DrawBox"=>TRUE,"BoxRounded"=>TRUE,"R"=>0,"G"=>0,"B"=>0,"Angle"=>0,"FontSize"=>10); 
// $myPicture->drawText(110,206,"Fecha Fin:",$TextSettings);

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 /* Create the pIndicator object */ 
 $Indicator = new pIndicator($myPicture);
// include '../../../../GOTHIC/GOTHIC.ttf';
 $myPicture->setFontProperties(array("FontName"=>"../../../../GOTHIC/GOTHIC.ttf","FontSize"=>9));

 /* Define the indicator sections */
 $IndicatorSections   = "";
 $IndicatorSections[] = array("Start"=>0,"End"=>70,"Caption"=>"Bajo","R"=>200,"G"=>0,"B"=>0);
 $IndicatorSections[] = array("Start"=>71,"End"=>90,"Caption"=>"Moderado","R"=>226,"G"=>74,"B"=>14);
 $IndicatorSections[] = array("Start"=>91,"End"=>100,"Caption"=>"Alto","R"=>0,"G"=>140,"B"=>0);

 /* Draw the 1st indicator */
 $IndicatorSettings = array("Values"=>array(round($cumplimiento['cumple'],2)),"ValueFontName"=>"../fonts/Forgotte.ttf","ValueFontSize"=>12,"IndicatorSections"=>$IndicatorSections,"SubCaptionColorFactor"=>300);
 $Indicator->draw(80,100,750,70,$IndicatorSettings);

// /* Define the indicator sections */
// $IndicatorSections   = "";
// $IndicatorSections[] = array("Start"=>0,"End"=>99,"Caption"=>"Low","R"=>135,"G"=>49,"B"=>15);
// $IndicatorSections[] = array("Start"=>100,"End"=>119,"Caption"=>"Borderline","R"=>183,"G"=>62,"B"=>15);
// $IndicatorSections[] = array("Start"=>120,"End"=>220,"Caption"=>"High","R"=>226,"G"=>74,"B"=>14);
//
// /* Draw the 2nd indicator */
// $IndicatorSettings = array("Values"=>array(100,201),"CaptionPosition"=>INDICATOR_CAPTION_BOTTOM,"CaptionR"=>0,"CaptionG"=>0,"CaptionB"=>0,"DrawLeftHead"=>FALSE,"ValueDisplay"=>INDICATOR_VALUE_LABEL,"ValueFontName"=>"../fonts/Forgotte.ttf","ValueFontSize"=>15,"IndicatorSections"=>$IndicatorSections);
// $Indicator->draw(80,160,550,30,$IndicatorSettings);

 
 
 /* Render the picture (choose the best way) */
 $myPicture->stroke("pictures/example.drawIndicator.jpg");
//echo $_POST['fin'];
?>

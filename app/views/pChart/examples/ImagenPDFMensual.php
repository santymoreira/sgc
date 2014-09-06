<?php   
 /* CAT:Labels */
session_start();
require '../../../../Acceso/clConexion.php';
$conn=  conexionBD::getInstance();
$conn->conectarBD();

//$dbh=mysql_connect ("localhost", "root", "") or die ('problema conectando porque :' . mysql_error());
//mysql_select_db ("sistemadegestion",$dbh);
$query = "SELECT NOMBRE FROM escuela where COD_ESCUELA=2";
$m1= mysql_query($query) or die ("Por favor ingrese los datos correctamente1");
$escuelare=  mysql_fetch_row($m1);


//$query2 = "SELECT DESCRIPCION from proceso where COD_PROCESO =".$_SESSION['pro']." AND COD_MACROPROCESO=".$_SESSION['macro'];
//$m2= mysql_query($query2) or die ("Por favor ingrese los datos correctamente2");
//$nompro= mysql_fetch_array($m2);

//$query3 = "SELECT I.PORCENTAJE FROM indicador AS I INNER JOIN proceso AS PR ON I.COD_PROCESO=PR.COD_PROCESO WHERE I.COD_EMPLEADO=".$_SESSION['cod']." AND PR.COD_PROCESO=".$_SESSION['pro']." AND PR.COD_MACROPROCESO=".$_SESSION['macro']." AND I.FECHA_INICIO='".$_SESSION['piini']."' AND I.FECHA_FIN='".$_SESSION['pffin']."'";
//$m3= mysql_query($query3) or die ("Por favor ingrese los datos correctamente3");
//$porce= mysql_fetch_array($m3);

$conn->terminarConexion();
$conn->conectarBD();
$query4 = "CALL PorcentajeReporteMensual(".$_SESSION['prom'].",".$_SESSION['macrom'].",2,".$_SESSION['sumamensual'].",". $_SESSION['numrows'].")";
$m4= mysql_query($query4) or die ("Por favor ingrese los datos correctamente4");
$cumplemes= mysql_fetch_array($m4);


switch ($_SESSION['mesm']){
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
 $myPicture = new pImage(700,250,$MyData);

 /* Draw the background */
 $Settings = array("R"=>255, "G"=>255, "B"=>255, "Dash"=>255, "DashR"=>255, "DashG"=>255, "DashB"=>255);
 $myPicture->drawFilledRectangle(0,0,700,230,$Settings);

 /* Overlay with a gradient */
 $Settings = array("StartR"=>255, "StartG"=>255, "StartB"=>255, "EndR"=>255, "EndG"=>255, "EndB"=>255, "Alpha"=>50);
 $myPicture->drawGradientArea(0,0,700,230,DIRECTION_VERTICAL,$Settings);
 $myPicture->drawGradientArea(0,0,700,20,DIRECTION_VERTICAL,array("StartR"=>255,"StartG"=>255,"StartB"=>255,"EndR"=>255,"EndG"=>255,"EndB"=>255,"Alpha"=>80));

 /* Add a border to the picture */
 $myPicture->drawRectangle(0,0,699,229,array("R"=>255,"G"=>255,"B"=>255));
 
 /* Write the picture title */ 
 $myPicture->setFontProperties(array("FontName"=>"../../../../GOTHIC/GOTHIC.ttf","FontSize"=>10));
 $myPicture->drawText(10,13,'',array("R"=>0,"G"=>0,"B"=>215));

  /* Enable shadow computing */  
 $myPicture->setShadow(TRUE,array("X"=>1,"Y"=>1,"R"=>0,"G"=>0,"B"=>0,"Alpha"=>20)); 
 
  /* Write some text */  
 $TextSettings = array("R"=>0,"G"=>0,"B"=>0,"Angle"=>0,"FontSize"=>9); 
 $myPicture->drawText(110,150,"CI: ".$_SESSION['user'],$TextSettings); 
 
   /* Write some text */  
 $TextSettings = array("R"=>0,"G"=>0,"B"=>0,"Angle"=>0,"FontSize"=>9); 
 $myPicture->drawText(110,170,$escuelare[0],$TextSettings);
 
   /* Write some text */  
 $TextSettings = array("R"=>0,"G"=>0,"B"=>0,"Angle"=>0,"FontSize"=>9); 
 $myPicture->drawText(110,190,"Porcentaje Mensual: ".round($cumplemes['cumple'],2)." %",$TextSettings);
 
   /* Write some text */  
 $TextSettings = array("R"=>0,"G"=>0,"B"=>0,"Angle"=>0,"FontSize"=>9); 
 $myPicture->drawText(110,210,"Mes: ".$mes,$TextSettings);
 
  $TextSettings = array("R"=>0,"G"=>0,"B"=>0,"Angle"=>0,"FontSize"=>9); 
 $myPicture->drawText(110,230,"Año: ".$ani['anio'],$TextSettings);
 
 
 
 
 
 
 
 
 
 /* Create the pIndicator object */ 
 $Indicator = new pIndicator($myPicture);

 $myPicture->setFontProperties(array("FontName"=>"../../../../GOTHIC/GOTHIC.ttf","FontSize"=>8));

 /* Define the indicator sections */
 $IndicatorSections   = "";
 $IndicatorSections[] = array("Start"=>0,"End"=>70,"Caption"=>"Bajo","R"=>200,"G"=>0,"B"=>0);
 $IndicatorSections[] = array("Start"=>71,"End"=>90,"Caption"=>"Moderado","R"=>226,"G"=>74,"B"=>14);
 $IndicatorSections[] = array("Start"=>91,"End"=>100,"Caption"=>"Alto","R"=>0,"G"=>140,"B"=>0);

 /* Draw the 1st indicator */
 $IndicatorSettings = array("Values"=>array(round($cumplemes['cumple'],2)),"ValueFontName"=>"../fonts/Forgotte.ttf","ValueFontSize"=>15,"IndicatorSections"=>$IndicatorSections,"SubCaptionColorFactor"=>300);
 $Indicator->draw(80,50,550,50,$IndicatorSettings);

 /* Define the indicator sections */
// $IndicatorSections   = "";
// $IndicatorSections[] = array("Start"=>0,"End"=>70,"Caption"=>"Bajo","R"=>135,"G"=>49,"B"=>15);
// $IndicatorSections[] = array("Start"=>71,"End"=>90,"Caption"=>"Moderado","R"=>183,"G"=>62,"B"=>15);
// $IndicatorSections[] = array("Start"=>91,"End"=>100,"Caption"=>"Alto","R"=>226,"G"=>74,"B"=>14);

 /* Draw the 2nd indicator */
// $IndicatorSettings = array("Values"=>array(100,201),"CaptionPosition"=>INDICATOR_CAPTION_BOTTOM,"CaptionR"=>0,"CaptionG"=>0,"CaptionB"=>0,"DrawLeftHead"=>FALSE,"ValueDisplay"=>INDICATOR_VALUE_LABEL,"ValueFontName"=>"../fonts/Forgotte.ttf","ValueFontSize"=>15,"IndicatorSections"=>$IndicatorSections);
// $Indicator->draw(80,160,550,30,$IndicatorSettings);

 /* Render the picture (choose the best way) */
 $myPicture->render("pictures/RM".$_SESSION['user'].".PNG");
 header('Location: ../../PDF/FormatoGestionCalidadReporteMensual.php');
 //require '';
?>

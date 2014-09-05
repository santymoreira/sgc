<?php

require '../../../../Acceso/clConexion.php';
$conn=  conexionBD::getInstance();
$conn->conectarBD();
//$porcent="call AvanceMacroprocesos(1)";
$porcent="CALL consolidadoMacroprocesos(1)";
$result=  mysql_query($porcent);
$val= mysql_fetch_row($result);
if ($val[0]==NULL)
{
    $avance=0;
}
else
{
    $avance=round($val[0],2);
}
switch ($val[1]){
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
//$mes="call consolidadomesnumer()";
//$mesact=mysql_query($mes);
//$numes=mysql_fetch_row($mesact);

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
 $myPicture = new pImage(590,200,$MyData);// tamaño ak

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
 $myPicture->setFontProperties(array("FontName"=>"../../../../GOTHIC/GOTHIC.ttf","FontSize"=>10));//tamaño letra
 $myPicture->drawText(20,25,'Docencia',array("R"=>255,"G"=>255,"B"=>255));

 
 /* Enable shadow computing */  
 $myPicture->setShadow(TRUE,array("X"=>1,"Y"=>1,"R"=>0,"G"=>0,"B"=>0,"Alpha"=>20)); 

 
 
 // /* Write some text */  
 $TextSettings = array("R"=>255,"G"=>255,"B"=>255,"Angle"=>0,"FontSize"=>12); 
 $myPicture->drawText(30,172,'Porcentaje: '.$avance,$TextSettings); 
 
 // /* Write some text */  
 $TextSettings = array("R"=>255,"G"=>255,"B"=>255,"Angle"=>0,"FontSize"=>12); 
  $myPicture->drawText(380,172,"Mes: ".$mes."     Año: ".$val[2],$TextSettings);  
 
 /* Create the pIndicator object */ 
 $Indicator = new pIndicator($myPicture);

 $myPicture->setFontProperties(array("FontName"=>"../fonts/pf_arma_five.ttf","FontSize"=>8));//letra aki

 /* Define the indicator sections */
 $IndicatorSections   = "";
 $IndicatorSections[] = array("Start"=>0,"End"=>70,"Caption"=>"Bajo","R"=>200,"G"=>0,"B"=>0);
 $IndicatorSections[] = array("Start"=>71,"End"=>90,"Caption"=>"Moderado","R"=>226,"G"=>74,"B"=>14);
 $IndicatorSections[] = array("Start"=>91,"End"=>100,"Caption"=>"Alto","R"=>0,"G"=>140,"B"=>0);

 /* Draw the 1st indicator */
 $IndicatorSettings = array("Values"=>array($avance),"ValueFontName"=>"../fonts/Forgotte.ttf","ValueFontSize"=>12,"IndicatorSections"=>$IndicatorSections,"SubCaptionColorFactor"=>300);
 $Indicator->draw(25,70,550,50,$IndicatorSettings);//cambiar tamaño aki

 
 /* Render the picture (choose the best way) */
 $myPicture->autoOutput("pictures/example.drawIndicator.jpg");
//echo $_POST['fin'];
?>

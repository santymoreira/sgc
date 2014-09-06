<?php


//$escuelare=  nombre de la escuela
//$nompro= nombre del proceso
//$porce= porcentaje del proceso
//$cumplimiento= cumplimiento

 /* pChart library inclusions */

 include("pChart2.1.4/class/pData.class.php");
 include("pChart2.1.4/class/pDraw.class.php");
 include("pChart2.1.4/class/pImage.class.php");
 include("pChart2.1.4/class/pIndicator.class.php");

  //Create and populate the pData object 
 $MyData = new pData();  
 $MyData->addPoints(array(4,12,15,8,5,-5),"Probe 1");
 $MyData->addPoints(array(7,2,4,14,8,3),"Probe 2");
 $MyData->setAxisName(0,"Temperatures");
 $MyData->setAxisUnit(0,"°C");
 $MyData->addPoints(array("Jan","Feb","Mar","Apr","May","Jun"),"Labels");
 $MyData->setSerieDescription("Labels","Months");
 $MyData->setAbscissa("Labels");

 /* Create the pChart object*/ 
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
 
 /* Write the picture title  */
 $myPicture->setFontProperties(array("FontName"=>"pChart2.1.4/fonts/Forgotte.ttf","FontSize"=>15));
 //
 //
 //$myPicture->drawText(20,25,$nompro['DESCRIPCION'],array("R"=>255,"G"=>255,"B"=>255));
 $myPicture->drawText(20,25,"Dar clases",array("R"=>255,"G"=>255,"B"=>255));

 
 /* Enable shadow computing */  
 $myPicture->setShadow(TRUE,array("X"=>1,"Y"=>1,"R"=>0,"G"=>0,"B"=>0,"Alpha"=>20)); 
 
  /* Write some text */  
 $TextSettings = array("R"=>255,"G"=>255,"B"=>255,"Angle"=>0,"FontSize"=>12); 
 //$myPicture->drawText(110,200,"CI: ".$_SESSION['user'],$TextSettings); 
 $myPicture->drawText(110,200,"0808080808",$TextSettings); 
 
  /* Write some text  */ 
 $TextSettings = array("R"=>255,"G"=>255,"B"=>255,"Angle"=>0,"FontSize"=>12); 
 //$myPicture->drawText(110,222,$escuelare[0],$TextSettings); 
 $myPicture->drawText(110,222,'Contabilidad',$TextSettings); 
 
   /* Write some text   */
 $TextSettings = array("R"=>255,"G"=>255,"B"=>255,"Angle"=>0,"FontSize"=>12); 
 //$myPicture->drawText(110,244,"Fecha Inicio: ".$_SESSION['iini'],$TextSettings); 
 $myPicture->drawText(110,244,"Fecha Inicio: ",$TextSettings); 
 
   /* Write some text  */ 
 $TextSettings = array("R"=>255,"G"=>255,"B"=>255,"Angle"=>0,"FontSize"=>12); 
 //$myPicture->drawText(110,266,"Fecha Fin: ".$_SESSION['ffin'],$TextSettings); 
 $myPicture->drawText(110,266,"Fecha Fin: ",$TextSettings); 

 
 /* Create the pIndicator object */ 
 $Indicator = new pIndicator($myPicture);
 $myPicture->setFontProperties(array("FontName"=>"pChart2.1.4/fonts/Forgotte.ttf","FontSize"=>9));

 /* Define the indicator sections */
 $IndicatorSections   = "";
 $IndicatorSections[] = array("Start"=>0,"End"=>70,"Caption"=>"Bajo","R"=>200,"G"=>0,"B"=>0);
 $IndicatorSections[] = array("Start"=>71,"End"=>90,"Caption"=>"Moderado","R"=>226,"G"=>74,"B"=>14);
 $IndicatorSections[] = array("Start"=>91,"End"=>100,"Caption"=>"Alto","R"=>0,"G"=>140,"B"=>0);

 /* Draw the 1st indicator */
 //$IndicatorSettings = array("Values"=>array(round($cumplimiento['cumple'],2)),"ValueFontName"=>"../fonts/Forgotte.ttf","ValueFontSize"=>12,"IndicatorSections"=>$IndicatorSections,"SubCaptionColorFactor"=>300);
 $IndicatorSettings = array("Values"=>array(round("3",2)),"ValueFontName"=>"pChart2.1.4/fonts/Forgotte.ttf","ValueFontSize"=>12,"IndicatorSections"=>$IndicatorSections,"SubCaptionColorFactor"=>300);
 $Indicator->draw(80,100,750,70,$IndicatorSettings);
 


 /* Render the picture (choose the best way) */
 //$myPicture->stroke("pictures/example.drawIndicator.jpg");



?>

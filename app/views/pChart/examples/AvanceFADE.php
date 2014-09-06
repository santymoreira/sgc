<?php
require '../../../../Acceso/clConexion.php';
$conn=  conexionBD::getInstance();
$conn->conectarBD();
//$porcent="call AvanceMacroprocesos(1)";
//$porcent="CALL AvanceContabilidadyAuditoria";
//$result=  mysql_query($porcent);
//$val= mysql_fetch_row($result);

$porcent1="CALL consolidadoMacroprocesos(1)";
$result1=  mysql_query($porcent1);
$val1= mysql_fetch_row($result1);



//docencia solo exite en escuelas
if ($val1[0]==NULL)
{
    $avance1=0;
}
else
{
    //calcula de cada escuela
    $avancees1= round((($val1[0]*18)/100),2);
    
    //si es el 100% eso equivale al 18% de la suma total
    $avance1=  round((($avancees1*18)/100),2);

}





// investigacion 
$conn->terminarConexion();
$conn->conectarBD();

$porcent2="CALL consolidadoMacroprocesos(2)";
$result2=  mysql_query($porcent2);
$val2= mysql_fetch_row($result2);

if ($val2[0]==NULL)
{
    
    $avance2=0;
}
else
{
    $avancees2= round((($val2[0]*20)/100),2);
    //$avance2=round($val2[0],2);
    // si es el 100% eso equivale al 20% total
    $avance2=  round((($avancees2*20)/100),2);
}
$conn->terminarConexion();
$conn->conectarBD();




// vinculacion
$porcent3="CALL consolidadoMacroprocesos(3)";
$result3=  mysql_query($porcent3);
$val3= mysql_fetch_row($result3);

if ($val3[0]==NULL)
{
    $avance3=0;
}
else
{
    $avancees3= round((($val3[0]*12)/100),2);
    //$avance3=round($val3[0],2);
     // si es el 100% eso equivale al 20% total
    $avance3=  round((($avancees3*12)/100),2);
}



//gestion administrativa

//porcentaje de gestion aministrativa de facultad por el momento no hay y es 0, aporta al total con 20 de la suma del indicador%
$conn->terminarConexion();
$conn->conectarBD();
//gestion administrativa/////////////
$porcent4="CALL consolidadoMacroprocesos(4)";
$result4=  mysql_query($porcent4);
$val4= mysql_fetch_row($result4);

if ($val4[0]==NULL)
{
    $avance4=0;
}
else
{
    
    $avancees4= round((($val4[0]*15)/100),2);
    //$avance4=round($val4[0],2);
    //si es el 100% equivale al 80% de la suma del indicador
    $avance4asumatotal=  round((($avancees4*80)/100),2);
    
    //al sumar me da el 100% pero eso es el 10% de la suma tOtal
    $avance4=round(((0+$avance4asumatotal)*10)/100,2);
    
    
}



//gestion academica

$conn->terminarConexion();
$conn->conectarBD();

//Gestion academica
$porcent5="CALL consolidadoMacroprocesos(5)";
$result5=  mysql_query($porcent5);
$val5= mysql_fetch_row($result5);

if ($val5[0]==NULL)
{
    $avance5=0;
}
else
{
    $avancees5= round((($val5[0]*15)/100),2);
    //$avance5=round($val5[0],2);
    
    //si es el 100% equivale al 80% de la suma del indicador
    $avance5asumatotal=  round((($avancees5*80)/100),2);
    
    //al sumar me da el 100% pero eso es el 10% de la suma tOtal
    $avance5=round(((0+$avance4asumatotal)*10)/100,2);
    
}


//asistencia

$conn->terminarConexion();
$conn->conectarBD();

$porcent6="CALL consolidadoMacroprocesos(6)";
$result6=  mysql_query($porcent6);
$val6= mysql_fetch_row($result6);

if ($val6[0]==NULL)
{
    $avance6=0;
}
else
{
    $avancees6= round((($val6[0]*10)/100),2);
    //$avance6=round($val6[0],2);
    //si es el 100% equivale al 80% de la suma del indicador
    $avance6asumatotal=  round((($avancees6*80)/100),2);
    //al sumar me da el 100% pero eso es el 3.4% de la suma tOtal
    $avance6=round(((0+$avance4asumatotal)*3.4)/100,2);
    

}



//mantenimiento
$conn->terminarConexion();
$conn->conectarBD();


$porcent7="CALL consolidadoMacroprocesos(7)";
$result7=  mysql_query($porcent7);
$val7= mysql_fetch_row($result7);

if ($val7[0]==NULL)
{
    $avance7=0;
}
else
{
    $avancees7= round((($val7[0]*10)/100),2);
    //$avance7=round($val7[0],2);
    //si es el 100% equivale al 80% de la suma del indicador
    $avance7asumatotal=  round((($avancees7*80)/100),2);
    //al sumar me da el 100% pero eso es el 3.4% de la suma tOtal
    $avance7=round(((0+$avance4asumatotal)*3.4)/100,2);
    

    
    
}

//Gestion de calidad representa el 10% de la suma total por el momento no hay
$gesaca=0;
//Apoyo Academico representa el 3.4% de la suma total por el momento no hay
$apoaca=0;
//Proceso FInanciero representa el 3.3% de la suma total por el momento no hay
$finan=0;
//Proceso Transporte representa el 3.3% de la suma total por el momento no hay
$tranpor=0;
//Proceso Informatico representa el 3.3% de la suma total por el momento no hay
$inform=0;

$avance=round($avance1+$avance2+$avance3+$avance4+$avance5+$avance6+$avance7+$gesaca+$apoaca+$finan+$tranpor+$inform,2);







//if ($val[0]==NULL)
//{
//    $avance=0;
//}
//else
//{
//    $avance=round($val[0],2);
//}
switch ($val1[1]){
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
 //../fonts/pf_arma_five.ttf

 $myPicture->setFontProperties(array("FontName"=>"../../../../GOTHIC/GOTHIC.ttf","FontSize"=>10));//tamaño letra
 $myPicture->drawText(20,25,'Cumplimiento - Escuela de Ingeniería en Contabilidad Y Auditoria',array("R"=>255,"G"=>255,"B"=>255));

 
 /* Enable shadow computing */  
 $myPicture->setShadow(TRUE,array("X"=>1,"Y"=>1,"R"=>0,"G"=>0,"B"=>0,"Alpha"=>20)); 

 
 
 // /* Write some text */  
 $TextSettings = array("R"=>255,"G"=>255,"B"=>255,"Angle"=>0,"FontSize"=>12); 
 $myPicture->drawText(30,172,'Porcentaje: '.$avance.'  %',$TextSettings); 
 
 // /* Write some text */  
 $TextSettings = array("R"=>255,"G"=>255,"B"=>255,"Angle"=>0,"FontSize"=>12); 
  $myPicture->drawText(380,172,"Mes:".$mes."  Año: ".$val1[2],$TextSettings);  
 
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
 $myPicture->render("pictures/avancefade.jpg");
//echo $_POST['fin'];









//require '../../../../Acceso/clConexion.php';
//$conn=  conexionBD::getInstance();
//$conn->conectarBD();
////$porcent="call AvanceMacroprocesos(1)";
//$porcent="CALL AvanceContabilidadyAuditoria";
//$result=  mysql_query($porcent);
//$val= mysql_fetch_row($result);
////$val=0;
////$cont=1;
////$valm=0;
////while ($cont<=7)
////{
////    $porcent="CALL consolidadoMacroprocesos($cont)";
////    $result=  mysql_query($porcent);
////    $valm= mysql_fetch_row($result);
////    if ($valm[0]==NULL)
////    {
////        $avance=0;
////    }
////    else
////    {
////        $avance=round($valm[0],2);
////    }
////    
////    $val=round($val+$avance,2);
////    $cont=$cont+1;
////}
//
//
//
//
//if ($val[0]==NULL)
//{
//    $avance=0;
//}
//else
//{
//    $avance=round(($val[0]/6),2);
//}
//switch ($val[1]){
//    case 1:
//        $mes='Enero';
//        break;
//    case 2:
//        $mes='Febrero';
//        break;
//    case 3:
//        $mes='Marzo';
//        break;
//    case 4:
//        $mes='Abril';
//        break;
//    case 5:
//        $mes='Mayo';
//        break;
//    case 6:
//        $mes='Junio';
//        break;
//    case 7:
//        $mes='Julio';
//        break;
//    case 8:
//        $mes='Agosto';
//        break;
//    case 9:
//        $mes='Septiembre';
//        break;
//    case 10:
//        $mes='Octubre';
//        break;
//    case 11:
//        $mes='Novienbre';
//        break;
//    case 12:
//        $mes='Diciembre';
//        break;
//}
////$mes="call consolidadomesnumer()";
////$mesact=mysql_query($mes);
////$numes=mysql_fetch_row($mesact);
//
// /* pChart library inclusions */
// include("../class/pData.class.php");
// include("../class/pDraw.class.php");
// include("../class/pImage.class.php");
// include("../class/pIndicator.class.php");
//
// /* Create and populate the pData object */
// $MyData = new pData();  
// $MyData->addPoints(array(4,12,15,8,5,-5),"Probe 1");
// $MyData->addPoints(array(7,2,4,14,8,3),"Probe 2");
// $MyData->setAxisName(0,"Temperatures");
// $MyData->setAxisUnit(0,"°C");
// $MyData->addPoints(array("Jan","Feb","Mar","Apr","May","Jun"),"Labels");
// $MyData->setSerieDescription("Labels","Months");
// $MyData->setAbscissa("Labels");
//
// /* Create the pChart object */
// $myPicture = new pImage(590,200,$MyData);// tamaño ak
//
// /* Draw the background */
// $Settings = array("R"=>0, "G"=>0, "B"=>255, "Dash"=>1, "DashR"=>0, "DashG"=>0, "DashB"=>255);
// $myPicture->drawFilledRectangle(0,0,900,330,$Settings);
//
// /* Overlay with a gradient */
// $Settings = array("StartR"=>219, "StartG"=>231, "StartB"=>139, "EndR"=>1, "EndG"=>138, "EndB"=>68, "Alpha"=>50);
// $myPicture->drawGradientArea(0,0,900,330,DIRECTION_VERTICAL,$Settings);
// $myPicture->drawGradientArea(0,0,900,40,DIRECTION_VERTICAL,array("StartR"=>0,"StartG"=>0,"StartB"=>0,"EndR"=>50,"EndG"=>50,"EndB"=>50,"Alpha"=>80));
//
// /* Add a border to the picture */
// $myPicture->drawRectangle(0,0,899,329,array("R"=>0,"G"=>0,"B"=>0));
// 
// /* Write the picture title */ 
// $myPicture->setFontProperties(array("FontName"=>"../fonts/pf_arma_five.ttf","FontSize"=>10));//tamaño letra
// $myPicture->drawText(20,25,'Cumplimiento - Facultad de Administración de Empresas',array("R"=>255,"G"=>255,"B"=>255));
//
// 
// /* Enable shadow computing */  
// $myPicture->setShadow(TRUE,array("X"=>1,"Y"=>1,"R"=>0,"G"=>0,"B"=>0,"Alpha"=>20)); 
//
// 
// 
// // /* Write some text */  
// $TextSettings = array("R"=>255,"G"=>255,"B"=>255,"Angle"=>0,"FontSize"=>12); 
// $myPicture->drawText(30,172,'Porcentaje: '.$avance.' %',$TextSettings); 
// 
// // /* Write some text */  
// $TextSettings = array("R"=>255,"G"=>255,"B"=>255,"Angle"=>0,"FontSize"=>12); 
//  $myPicture->drawText(380,172,"Mes: ".$mes."     Año: ".$val[2],$TextSettings);  
// 
// /* Create the pIndicator object */ 
// $Indicator = new pIndicator($myPicture);
//
// $myPicture->setFontProperties(array("FontName"=>"../fonts/pf_arma_five.ttf","FontSize"=>8));//letra aki
//
// /* Define the indicator sections */
// $IndicatorSections   = "";
// $IndicatorSections[] = array("Start"=>0,"End"=>70,"Caption"=>"Bajo","R"=>200,"G"=>0,"B"=>0);
// $IndicatorSections[] = array("Start"=>71,"End"=>90,"Caption"=>"Moderado","R"=>226,"G"=>74,"B"=>14);
// $IndicatorSections[] = array("Start"=>91,"End"=>100,"Caption"=>"Alto","R"=>0,"G"=>140,"B"=>0);
//
// /* Draw the 1st indicator */
// $IndicatorSettings = array("Values"=>array($avance),"ValueFontName"=>"../fonts/Forgotte.ttf","ValueFontSize"=>12,"IndicatorSections"=>$IndicatorSections,"SubCaptionColorFactor"=>300);
// $Indicator->draw(25,70,550,50,$IndicatorSettings);//cambiar tamaño aki
//
// 
// /* Render the picture (choose the best way) */
// $myPicture->autoOutput("pictures/example.drawIndicator.jpg");
////echo $_POST['fin'];
?>


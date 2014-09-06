<?php 
class ReportesController extends BaseController {


      public function individual($cod)
    {
        //$ci=Auth::user()->COD_EMPLEADO;
        $tipos=DB::select('SELECT TE.COD_TIPO,TE.DESCRIPCION FROM empleado_tipo AS ET INNER JOIN empleado AS E 
        	ON E.COD_EMPLEADO=ET.COD_EMPLEADO INNER JOIN tipo_empleado AS TE 
        	ON TE.COD_TIPO=ET.COD_TIPO INNER JOIN empleado_escuela AS EMES 
        	ON EMES.COD_EMPLEADO= E.COD_EMPLEADO INNER JOIN escuela AS ES 
        	ON ES.COD_ESCUELA=EMES.COD_ESCUELA WHERE E.COD_EMPLEADO=73 AND ES.COD_ESCUELA=2');


        //$empleados = DB::select('SELECT NOMBRES FROM empleado WHERE CI='.$ci.';');
        $tipo=json_encode($tipos);

         return View::make('reportes.individual', array('empleados' => $tipos));
    }


    public function mostrarTipo()
    {
    	$tipos=DB::select('SELECT TE.COD_TIPO,TE.DESCRIPCION FROM empleado_tipo AS ET INNER JOIN empleado AS E 
        	ON E.COD_EMPLEADO=ET.COD_EMPLEADO INNER JOIN tipo_empleado AS TE 
        	ON TE.COD_TIPO=ET.COD_TIPO INNER JOIN empleado_escuela AS EMES 
        	ON EMES.COD_EMPLEADO= E.COD_EMPLEADO INNER JOIN escuela AS ES 
        	ON ES.COD_ESCUELA=EMES.COD_ESCUELA WHERE E.COD_EMPLEADO=73 AND ES.COD_ESCUELA=2');
    	$tipo=json_encode($tipos);
    	$response = isset($_GET['callback'])?$_GET['callback']."(".$tipo.")":$tipo; 
    	echo $response;
    }

    public function combo2()
    {
    	$opcion=Input::get('op');
        $tip=Input::get('tip');
    	$usuarios = DB::table('proceso')->where('TIPO_EMPLEADO', '=', $tip)->where('COD_MACROPROCESO','=',$opcion)->get();
    	 return View::make('reportes.procesos', array('empleados' => $usuarios,'tipo_e' => $tip,'macro' => $opcion));
    	 //return View::make('reportes.procesos');
    }

    public function combo1()
    {
        $opcion=Input::get('op');

        $macroprocesos=DB::select('SELECT distinct(m.COD_MACROPROCESO) as OBJETIVO,m.NOMBRE as DESCRIPCION from macroproceso as m inner join proceso as p on m.COD_MACROPROCESO=p.COD_MACROPROCESO where p.TIPO_EMPLEADO='.$opcion.';');
        return View::make('reportes.macroprocesos', array('empleados' => $macroprocesos,'tipo_e' => $opcion));
    }

    public function tabla()
    {
        $indicadores=DB::select('SELECT DISTINCT I.COD_INDICADOR,I.COD_PROCESO,I.FECHA_INICIO,I.FECHA_FIN,I.COD_MACROPROCESO,I.COD_EMPLEADO FROM indicador AS I INNER JOIN proceso AS P ON P.COD_PROCESO=I.COD_PROCESO WHERE I.COD_EMPLEADO=134 AND I.COD_PROCESO=2 AND I.COD_MACROPROCESO=4 ORDER BY I.FECHA_FIN DESC LIMIT 31');
        return View::make('reportes.tabla', array('empleados' => $indicadores));
    }

    public function imagenReporte()
    {
        //$nombreEscuela = DB::select('SELECT NOMBRE FROM escuela where COD_ESCUELA=2');
        //$nombreProceso = DB::select('SELECT DESCRIPCION from proceso where COD_PROCESO =1 AND COD_MACROPROCESO=1');
        //$porcentajeProceso = DB::select('SELECT I.PORCENTAJE FROM indicador AS I INNER JOIN proceso AS PR ON I.COD_PROCESO=PR.COD_PROCESO WHERE I.COD_EMPLEADO=73 AND PR.COD_PROCESO=1 AND PR.COD_MACROPROCESO=1 AND I.FECHA_INICIO=1 AND I.FECHA_FIN=1');
        //$valorMaximoIndicador=Empleado::storedProcedureCall('call calcularValor( '.$escuela.','.$macroproceso.')');
        //$valorCumplido=Empleado::storedProcedureCall('CALL porcentajeIndicadoresxEscuela(proceso,macroproceso,escuela,porcentaje)');
        //
        //
        //
        //
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
 $myPicture->drawText(20,25,"Paul Dar clases",array("R"=>255,"G"=>255,"B"=>255));

 
 /* Enable shadow computing */  
 $myPicture->setShadow(TRUE,array("X"=>1,"Y"=>1,"R"=>0,"G"=>0,"B"=>0,"Alpha"=>20)); 
 
  /* Write some text */  
 $TextSettings = array("R"=>255,"G"=>255,"B"=>255,"Angle"=>0,"FontSize"=>12); 
 //$myPicture->drawText(110,200,"CI: ".$_SESSION['user'],$TextSettings); 
 $myPicture->drawText(110,200,"678",$TextSettings); 
 
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
 //$myPicture->autoOutput("pictures/example.drawIndicator.jpg");

 $myPicture->render("example.drawIndicator.png");



         return View::make("reportes/imagenReporte");

    }



}
?>


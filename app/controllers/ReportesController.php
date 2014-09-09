<?php 
class ReportesController extends BaseController {


      public function individual($escuela)
    {
        $codigoEmpleado=Auth::user()->COD_EMPLEADO;
        $cedulaEmpleado=Auth::user()->CI;
        $tipos=DB::select('SELECT TE.COD_TIPO,TE.DESCRIPCION FROM empleado_tipo AS ET INNER JOIN empleado AS E 
        	ON E.COD_EMPLEADO=ET.COD_EMPLEADO INNER JOIN tipo_empleado AS TE 
        	ON TE.COD_TIPO=ET.COD_TIPO INNER JOIN empleado_escuela AS EMES 
        	ON EMES.COD_EMPLEADO= E.COD_EMPLEADO INNER JOIN escuela AS ES 
        	ON ES.COD_ESCUELA=EMES.COD_ESCUELA WHERE E.COD_EMPLEADO=? AND ES.COD_ESCUELA=?',array($codigoEmpleado,$escuela));

         return View::make('reportes.individual', array('tipoEmpleados' => $tipos,'escuela' =>$escuela,'cedula'=>$cedulaEmpleado,'codigo'=>$codigoEmpleado));
    }

    public function individualBusqueda()
    {
        $escuela=Input::get('escuela');
        $empleado=Input::get('empleado');
        $ci=Input::get('ci');
        $nombres=Input::get('nombres');
        //$codigo=Input::get('codigo');
       // echo("<script>console.log('PHP: ".$ci."');</script>");
        //$ci=Auth::user()->COD_EMPLEADO;
        $tipos=DB::select('SELECT TE.COD_TIPO,TE.DESCRIPCION FROM empleado_tipo AS ET INNER JOIN empleado AS E 
            ON E.COD_EMPLEADO=ET.COD_EMPLEADO INNER JOIN tipo_empleado AS TE 
            ON TE.COD_TIPO=ET.COD_TIPO INNER JOIN empleado_escuela AS EMES 
            ON EMES.COD_EMPLEADO= E.COD_EMPLEADO INNER JOIN escuela AS ES 
            ON ES.COD_ESCUELA=EMES.COD_ESCUELA WHERE E.COD_EMPLEADO=? AND ES.COD_ESCUELA=?',array($empleado,$escuela));

         return View::make('reportes.individualBusqueda', array('tipoEmpleados' => $tipos,'escuela' =>$escuela,'empleado'=>$empleado,'ci'=>$ci,'nombres'=>$nombres));
    }

    public function buscarEmpleado()
    {
        $consulta=Input::get('consult');
        $escuela=Input::get('escuela');
        $cedulaEmpleado=Auth::user()->CI;
        //$buscar=Input::get('consulta');
        //if(!empty($buscar)) 
        //{
            $empleados=DB::select("SELECT CI,COD_EMPLEADO,NOMBRES FROM empleado WHERE CI !=".$cedulaEmpleado." AND  NOMBRES LIKE '%".$consulta."%'");
            foreach ($empleados as $e) { $em=$e->NOMBRES; }
        //}
        return View::make('reportes.empleadosFotos',array('empleados' => $empleados,'escuela'=>$escuela));
    }


      public function mensual($escuela)
    {
        $opcion=2;
        $ci=Auth::user()->COD_EMPLEADO;
        $tipos=DB::select('SELECT TE.COD_TIPO,TE.DESCRIPCION FROM empleado_tipo AS ET INNER JOIN empleado AS E 
            ON E.COD_EMPLEADO=ET.COD_EMPLEADO INNER JOIN tipo_empleado AS TE 
            ON TE.COD_TIPO=ET.COD_TIPO INNER JOIN empleado_escuela AS EMES 
            ON EMES.COD_EMPLEADO= E.COD_EMPLEADO INNER JOIN escuela AS ES 
            ON ES.COD_ESCUELA=EMES.COD_ESCUELA WHERE E.COD_EMPLEADO=? AND ES.COD_ESCUELA=?',array($ci,$escuela));

         return View::make('reportes.individual', array('tipoEmpleados' => $tipos,'escuela' =>$escuela,'opcion'=>$opcion));
    }

          public function mensualE($escuela)
    {
        //$opcion=2;
        $ci=Auth::user()->COD_EMPLEADO;
        $tipos=DB::select('SELECT TE.COD_TIPO,TE.DESCRIPCION FROM empleado_tipo AS ET INNER JOIN empleado AS E 
            ON E.COD_EMPLEADO=ET.COD_EMPLEADO INNER JOIN tipo_empleado AS TE 
            ON TE.COD_TIPO=ET.COD_TIPO INNER JOIN empleado_escuela AS EMES 
            ON EMES.COD_EMPLEADO= E.COD_EMPLEADO INNER JOIN escuela AS ES 
            ON ES.COD_ESCUELA=EMES.COD_ESCUELA WHERE E.COD_EMPLEADO=? AND ES.COD_ESCUELA=?',array($ci,$escuela));

         return View::make('reportes.mensual_empleado', array('tipoEmpleados' => $tipos,'escuela' =>$escuela));
    }

    public function getMes($mes)
    {
        switch ($mes) {
            case 1: return 'Enero';break;
            case 2: return 'Febrero';break;
            case 3: return 'Marzo';break;
            case 4: return 'Abril';break;
            case 5: return 'Mayo';break;
            case 6: return 'Junio';break;
            case 7: return 'Julio';break;
            case 8: return 'Agosto';break;
            case 9: return 'Septiembre';break;
            case 10: return 'Octubre';break;
            case 11: return 'Noviembre';break;
            case 12: return 'Diciembre';break;
        }
    }

    public function getEscuela($escuela)
    {
        $Escuela = DB::select('SELECT NOMBRE FROM escuela where COD_ESCUELA=?',array($escuela));
         foreach ($Escuela as $esc) { $nombreEscuela=$esc->NOMBRE; }
         return $nombreEscuela;
    }

    public function getProceso($proceso,$macroproceso)
    {
        $Proceso = DB::select('SELECT DESCRIPCION from proceso where COD_PROCESO =? AND COD_MACROPROCESO=?',array($proceso,$macroproceso));
        foreach ($Proceso as $proc) { $nombreProceso=$proc->DESCRIPCION; }
        return $nombreProceso;
    }

    public function getPorcentaje($empleado,$proceso,$macroproceso,$fechaInicio,$fechaFin)
    {
        $Porcentaje = DB::select('SELECT DISTINCT(I.PORCENTAJE) FROM indicador AS I INNER JOIN proceso AS PR ON I.COD_PROCESO=PR.COD_PROCESO WHERE I.COD_EMPLEADO=? AND PR.COD_PROCESO=? AND PR.COD_MACROPROCESO=? AND I.FECHA_INICIO=? AND I.FECHA_FIN=?',array($empleado,$proceso,$macroproceso,$fechaInicio,$fechaFin));
        if ($Porcentaje) {
            foreach ($Porcentaje as $porc) { $porcentaje=$porc->PORCENTAJE; }
        }
        return $porcentaje;
    }

    public function getValorTotal($escuela,$macroproceso)
    {
        $Indicador=Empleado::storedProcedureCall('CALL calcularValor('.$escuela.','.$macroproceso.')');
        foreach ($Indicador as $ind) { $valorMaximo=$ind->total; }
        return $valorMaximo;
    }

    public function getValorCumplido($proceso,$macroproceso,$escuela,$fechaInicio,$fechaFin,$empleado)
    {
        $maxi=$this->getValorTotal($escuela,$macroproceso);
        $porcen=$this->getPorcentaje($empleado,$proceso,$macroproceso,$fechaInicio,$fechaFin);
        $valorCumplido=Empleado::storedProcedureCall('CALL porcentajeIndicadoresxEscuela('.$proceso.','.$macroproceso.','.$escuela.','.$porcen.','.$maxi.')');
        foreach ($valorCumplido as $valor) { $valorMaximo=$valor->cumple; }
        return $valorMaximo;
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
    	$macroproceso=Input::get('macroproceso');
        $tipoEmpleado=Input::get('tipoEmpleado');
        $escuela=Input::get('escuela');
        $cedula=Input::get('cedula');
        $codigo=Input::get('codigo');
        $tipoReporte=Input::get('tipoReporte');

        //echo("<script>console.log('PHP: ".$cedula."');</script>");
    	$proceso = DB::table('proceso')->where('TIPO_EMPLEADO', '=', $tipoEmpleado)->where('COD_MACROPROCESO','=',$macroproceso)->get();
        if ($tipoReporte==1) {
            return View::make('reportes.procesos', array('procesos' => $proceso,'tipoEmpleado' => $tipoEmpleado,'macroproceso' => $macroproceso,'escuela' =>$escuela,'cedula'=>$cedula,'codigo'=>$codigo,'tipoReporte'=>$tipoReporte));
        }
         if ($tipoReporte==2) {
            return View::make('reportes.procesosBusqueda', array('procesos' => $proceso,'tipoEmpleado' => $tipoEmpleado,'macroproceso' => $macroproceso,'escuela' =>$escuela,'cedula'=>$cedula,'codigo'=>$codigo,'tipoReporte'=>$tipoReporte));
        }
    	 
    }

    public function combo1()
    {
        $tipoEmpleado=Input::get('tipoEmpleado');
        $escuela=Input::get('escuela');
        $cedula=Input::get('cedula');
        $codigo=Input::get('codigo');
        $tipoReporte=Input::get('tipoReporte');
        
        //echo("<script>console.log('PHP: ".$cedula."');</script>");

        $macroprocesos=DB::select('SELECT distinct(m.COD_MACROPROCESO) as OBJETIVO,m.NOMBRE as DESCRIPCION from macroproceso as m inner join proceso as p on m.COD_MACROPROCESO=p.COD_MACROPROCESO where p.TIPO_EMPLEADO='.$tipoEmpleado.';');
        //echo("<script>console.log('PHP: ".$escuela."');</script>");
        return View::make('reportes.macroprocesos', array('macroprocesos' => $macroprocesos,'tipoEmpleado' => $tipoEmpleado,'escuela' =>$escuela,'cedula'=>$cedula,'codigo'=>$codigo,'tipoReporte'=>$tipoReporte));
    }

    public function tabla()
    {
        $tipoReporte=Input::get('tipoReporte');
        $escuela=Input::get('escuela');
            $macroproceso=Input::get('macroproceso');
            $proceso=Input::get('proceso');
            $cedula=Input::get('cedula');//
            $codigo=Input::get('codigo');
            $suma=-1;
        if ($tipoReporte==1) 
        {
            //echo("<script>console.log('PHP: ".$codigo."');</script>");
            //$codigoEmpleado=Auth::user()->COD_EMPLEADO;
            $indicadores=DB::select('SELECT DISTINCT I.COD_INDICADOR,I.COD_PROCESO,I.FECHA_INICIO,I.FECHA_FIN,I.COD_MACROPROCESO,I.COD_EMPLEADO FROM indicador AS I INNER JOIN proceso AS P ON P.COD_PROCESO=I.COD_PROCESO WHERE I.COD_EMPLEADO=? AND I.COD_PROCESO=? AND I.COD_MACROPROCESO=? ORDER BY I.FECHA_FIN DESC LIMIT 31',array($codigo,$proceso,$macroproceso));
            return View::make('reportes.tabla', array('indicadores' => $indicadores,'escuela' =>$escuela,'macroproceso'=>$macroproceso,'proceso'=>$proceso,'codigoEmpleado'=>$codigo,'cedula'=>$cedula,'codigo'=>$codigo));
        }
        if ($tipoReporte==2) 
        {
            $mes=Input::get('mes');
            //echo("<script>console.log('PHP: ".$mes."');</script>");
            $indicadores=Empleado::storedProcedureCall('CALL ProcesosMensual('.$macroproceso.','.$proceso.','.$codigo.','.$mes.')');

            foreach ($indicadores as $indicador) {
                $suma+=$indicador->PORCENTAJE;
                
            }
            //echo("<script>console.log('PHP: ".$cedula."');</script>");
            //echo("<script>console.log('PHP: ".$suma."');</script>");
            //echo("<script>console.log('PHP: ".$codigo."');</script>");
            //$codigoEmpleado=Auth::user()->COD_EMPLEADO;
            //$indicadores=DB::select('SELECT DISTINCT I.COD_INDICADOR,I.COD_PROCESO,I.FECHA_INICIO,I.FECHA_FIN,I.COD_MACROPROCESO,I.COD_EMPLEADO FROM indicador AS I INNER JOIN proceso AS P ON P.COD_PROCESO=I.COD_PROCESO WHERE I.COD_EMPLEADO=? AND I.COD_PROCESO=? AND I.COD_MACROPROCESO=? ORDER BY I.FECHA_FIN DESC LIMIT 31',array($codigo,$proceso,$macroproceso));
            return View::make('reportes.tablaMensual', array('escuela' =>$escuela,'macroproceso'=>$macroproceso,'proceso'=>$proceso,'codigoEmpleado'=>$codigo,'cedula'=>$cedula,'codigo'=>$codigo,'suma'=>$suma,'mes'=>$mes));
        }
        
    }

    public function imagenReporte($escuela,$macroproceso,$proceso,$f1,$f2,$cedula,$codigo,$op)
    {    
        include("pChart2.1.4/class/pData.class.php");
        include("pChart2.1.4/class/pDraw.class.php");
        include("pChart2.1.4/class/pImage.class.php");
        include("pChart2.1.4/class/pIndicator.class.php");
        $school=$this->getEscuela($escuela);
        $process=$this->getProceso($proceso,$macroproceso);
        $cedulaEmpleado=$cedula;

        //$cedulaEmpleado=Auth::user()->CI;
        //$codigoEmpleado=Auth::user()->COD_EMPLEADO;
        $codigoEmpleado=$codigo;
        $cumplimiento=$this->getValorCumplido($proceso,$macroproceso,$escuela,$f1,$f2,$codigoEmpleado);
        //echo("<script>console.log('PHP: ".$nombreProceso."');</script>");
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
         //$myPicture->drawText(20,25,$nompro['DESCRIPCION'],array("R"=>255,"G"=>255,"B"=>255));
         $myPicture->drawText(20,25,$process,array("R"=>255,"G"=>255,"B"=>255));
         /* Enable shadow computing */  
         $myPicture->setShadow(TRUE,array("X"=>1,"Y"=>1,"R"=>0,"G"=>0,"B"=>0,"Alpha"=>20)); 
          /* Write some text */  
         $TextSettings = array("R"=>255,"G"=>255,"B"=>255,"Angle"=>0,"FontSize"=>12); 
         //$myPicture->drawText(110,200,"CI: ".$_SESSION['user'],$TextSettings); 
         $myPicture->drawText(110,200,"CEDULA: ".$cedulaEmpleado,$TextSettings); 
          /* Write some text  */ 
         $TextSettings = array("R"=>255,"G"=>255,"B"=>255,"Angle"=>0,"FontSize"=>12); 
         //$myPicture->drawText(110,222,$escuelare[0],$TextSettings); 
         $myPicture->drawText(110,222,$school,$TextSettings); 
           /* Write some text   */
         $TextSettings = array("R"=>255,"G"=>255,"B"=>255,"Angle"=>0,"FontSize"=>12); 
         //$myPicture->drawText(110,244,"Fecha Inicio: ".$_SESSION['iini'],$TextSettings); 
         $myPicture->drawText(110,244,"Fecha Inicio: ".$f1,$TextSettings); 
           /* Write some text  */ 
         $TextSettings = array("R"=>255,"G"=>255,"B"=>255,"Angle"=>0,"FontSize"=>12); 
         //$myPicture->drawText(110,266,"Fecha Fin: ".$_SESSION['ffin'],$TextSettings); 
         $myPicture->drawText(110,266,"Fecha Fin: ".$f2,$TextSettings); 
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
         $IndicatorSettings = array("Values"=>array(round($cumplimiento,2)),"ValueFontName"=>"pChart2.1.4/fonts/Forgotte.ttf","ValueFontSize"=>12,"IndicatorSections"=>$IndicatorSections,"SubCaptionColorFactor"=>300);
         $Indicator->draw(80,100,750,70,$IndicatorSettings);
         /* Render the picture (choose the best way) */
         //$myPicture->autoOutput("pictures/example.drawIndicator.jpg");
         if ($op==1) {
             $myPicture->render("example.drawIndicator.png");
            return View::make("reportes/imagenReporte");
         }
         if($op==2){
            $myPicture->render($codigoEmpleado.".PNG");
         }
         
    }

    public function imagenReporteMensual($escuela,$macroproceso,$proceso,$mes,$cedula,$codigo,$suma,$op)
    {    
        include("pChart2.1.4/class/pData.class.php");
        include("pChart2.1.4/class/pDraw.class.php");
        include("pChart2.1.4/class/pImage.class.php");
        include("pChart2.1.4/class/pIndicator.class.php");
        $school=$this->getEscuela($escuela);
        $process=$this->getProceso($proceso,$macroproceso);
        $cedulaEmpleado=$cedula;
        $mes=$this->getMes($mes);
        //$anio=echo date("Y");
        //$cedulaEmpleado=Auth::user()->CI;
        //$codigoEmpleado=Auth::user()->COD_EMPLEADO;
        $codigoEmpleado=$codigo;
        //$cumplimiento=$this->getValorCumplido($proceso,$macroproceso,$escuela,$f1,$f2,$codigoEmpleado);
        //echo("<script>console.log('PHP: ".$nombreProceso."');</script>");

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
         $myPicture->setFontProperties(array("FontName"=>"pChart2.1.4/fonts/Forgotte.ttf","FontSize"=>15));
         $myPicture->drawText(20,25,$process,array("R"=>255,"G"=>255,"B"=>255));

         
         /* Enable shadow computing */  
         $myPicture->setShadow(TRUE,array("X"=>1,"Y"=>1,"R"=>0,"G"=>0,"B"=>0,"Alpha"=>20)); 
         
          /* Write some text */  
         $TextSettings = array("R"=>255,"G"=>255,"B"=>255,"Angle"=>0,"FontSize"=>12); 
         $myPicture->drawText(110,200,"CI: ". $cedulaEmpleado,$TextSettings); 
         
          /* Write some text */  
         $TextSettings = array("R"=>255,"G"=>255,"B"=>255,"Angle"=>0,"FontSize"=>12); 
         $myPicture->drawText(110,222,$school,$TextSettings); 
         
           /* Write some text */  
         $TextSettings = array("R"=>255,"G"=>255,"B"=>255,"Angle"=>0,"FontSize"=>12); 
         $myPicture->drawText(110,244,"Porcentaje Mensual: ".round($suma,2)." %",$TextSettings); 
        // 
        //   /* Write some text */  
         $TextSettings = array("R"=>255,"G"=>255,"B"=>255,"Angle"=>0,"FontSize"=>12); 
         $myPicture->drawText(110,266,"Mes: ".$mes,$TextSettings); 
         
         $TextSettings = array("R"=>255,"G"=>255,"B"=>255,"Angle"=>0,"FontSize"=>12); 
         $myPicture->drawText(110,288,"Año: ".date("Y"),$TextSettings); 
         
         
         
         /* Create the pIndicator object */ 
         $Indicator = new pIndicator($myPicture);

         $myPicture->setFontProperties(array("FontName"=>"pChart2.1.4/fonts/Forgotte.ttf","FontSize"=>9));

         /* Define the indicator sections */
         $IndicatorSections   = "";
         $IndicatorSections[] = array("Start"=>0,"End"=>70,"Caption"=>"Bajo","R"=>200,"G"=>0,"B"=>0);
         $IndicatorSections[] = array("Start"=>71,"End"=>90,"Caption"=>"Moderado","R"=>226,"G"=>74,"B"=>14);
         $IndicatorSections[] = array("Start"=>91,"End"=>100,"Caption"=>"Alto","R"=>0,"G"=>140,"B"=>0);

         /* Draw the 1st indicator */
         $IndicatorSettings = array("Values"=>array(round($suma,2)),"ValueFontName"=>"pChart2.1.4/fonts/Forgotte.ttf","ValueFontSize"=>12,"IndicatorSections"=>$IndicatorSections,"SubCaptionColorFactor"=>300);
         $Indicator->draw(80,100,750,70,$IndicatorSettings);
        
         
         /* Render the picture (choose the best way) */
         //$myPicture->stroke("pictures/example.drawIndicator.jpg");

           if ($op==1) {
             $myPicture->render("example.drawIndicator.png");
            return View::make("reportes/imagenReporte");
         }
         if($op==2){
            $myPicture->render($codigoEmpleado.".PNG");
         }
         
    }

    public function pdfReporte($escuela,$macroproceso,$proceso,$f1,$f2)
    {
        $school=$this->getEscuela($escuela);
        $process=$this->getProceso($proceso,$macroproceso);
        $cedulaEmpleado=Auth::user()->CI;
        $nombreEmpleado=Auth::user()->NOMBRES;
        $codigoEmpleado=Auth::user()->COD_EMPLEADO;
        $mailEmpleado=Auth::user()->EMAIL;
        $cumplimiento=$this->getValorCumplido($proceso,$macroproceso,$escuela,$f1,$f2,$codigoEmpleado);

        $this->imagenReporte($escuela,$macroproceso,$proceso,$f1,$f2,$cedulaEmpleado,$codigoEmpleado,1);


        /*
         // pChart library inclusions
        include("pChart2.1.4/class/pData.class.php");
        include("pChart2.1.4/class/pDraw.class.php");
        include("pChart2.1.4/class/pImage.class.php");
        include("pChart2.1.4/class/pIndicator.class.php");

         // Create and populate the pData object
         $MyData = new pData();  
         $MyData->addPoints(array(4,12,15,8,5,-5),"Probe 1");
         $MyData->addPoints(array(7,2,4,14,8,3),"Probe 2");
         $MyData->setAxisName(0,"Temperatures");
         $MyData->setAxisUnit(0,"°C");
         $MyData->addPoints(array("Jan","Feb","Mar","Apr","May","Jun"),"Labels");
         $MyData->setSerieDescription("Labels","Months");
         $MyData->setAbscissa("Labels");

         // Create the pChart object
         $myPicture = new pImage(700,230,$MyData);

         // Draw the background
         $Settings = array("R"=>255, "G"=>255, "B"=>255, "Dash"=>255, "DashR"=>255, "DashG"=>255, "DashB"=>255);
         $myPicture->drawFilledRectangle(0,0,700,230,$Settings);

         //Overlay with a gradient
         $Settings = array("StartR"=>255, "StartG"=>255, "StartB"=>255, "EndR"=>255, "EndG"=>255, "EndB"=>255, "Alpha"=>50);
         $myPicture->drawGradientArea(0,0,700,230,DIRECTION_VERTICAL,$Settings);
         $myPicture->drawGradientArea(0,0,700,20,DIRECTION_VERTICAL,array("StartR"=>255,"StartG"=>255,"StartB"=>255,"EndR"=>255,"EndG"=>255,"EndB"=>255,"Alpha"=>80));

         //Add a border to the picture
         $myPicture->drawRectangle(0,0,699,229,array("R"=>255,"G"=>255,"B"=>255));
 
         //Write the picture title
         $myPicture->setFontProperties(array("FontName"=>"pChart2.1.4/fonts/Forgotte.ttf","FontSize"=>10));
         $myPicture->drawText(10,13,'',array("R"=>0,"G"=>0,"B"=>215));

          //Enable shadow computing 
         $myPicture->setShadow(TRUE,array("X"=>1,"Y"=>1,"R"=>0,"G"=>0,"B"=>0,"Alpha"=>20)); 
 
          // Write some text
         $TextSettings = array("R"=>0,"G"=>0,"B"=>0,"Angle"=>0,"FontSize"=>9); 
         //$myPicture->drawText(110,150,"CI: ".$_SESSION['user'],$TextSettings); 
         $myPicture->drawText(110,150,"CI: ".$cedulaEmpleado,$TextSettings); 
 
           //Write some text  
         $TextSettings = array("R"=>0,"G"=>0,"B"=>0,"Angle"=>0,"FontSize"=>9); 
         //$myPicture->drawText(110,170,$escuelare[0],$TextSettings);
         $myPicture->drawText(110,170,$school,$TextSettings);
 
           //Write some text 
         $TextSettings = array("R"=>0,"G"=>0,"B"=>0,"Angle"=>0,"FontSize"=>9); 
         //$myPicture->drawText(110,190,"Fecha Inicio: ".$_SESSION['piini'],$TextSettings);
         $myPicture->drawText(110,190,"Fecha Inicio: ".$f1,$TextSettings);
 
           //Write some text 
         $TextSettings = array("R"=>0,"G"=>0,"B"=>0,"Angle"=>0,"FontSize"=>9); 
         //$myPicture->drawText(110,210,"Fecha Fin: ".$_SESSION['pffin'],$TextSettings);
         $myPicture->drawText(110,210,"Fecha Fin: ".$f2,$TextSettings);
 
         //Create the pIndicator object
         $Indicator = new pIndicator($myPicture);

        $myPicture->setFontProperties(array("FontName"=>"pChart2.1.4/fonts/Forgotte.ttf","FontSize"=>8));

         //Define the indicator sections
         $IndicatorSections   = "";
         $IndicatorSections[] = array("Start"=>0,"End"=>70,"Caption"=>"Bajo","R"=>200,"G"=>0,"B"=>0);
         $IndicatorSections[] = array("Start"=>71,"End"=>90,"Caption"=>"Moderado","R"=>226,"G"=>74,"B"=>14);
         $IndicatorSections[] = array("Start"=>91,"End"=>100,"Caption"=>"Alto","R"=>0,"G"=>140,"B"=>0);

         //Draw the 1st indicator
         //$IndicatorSettings = array("Values"=>array(round($cumplimiento['cumple'],2)),"ValueFontName"=>"../fonts/Forgotte.ttf","ValueFontSize"=>15,"IndicatorSections"=>$IndicatorSections,"SubCaptionColorFactor"=>300);
         $IndicatorSettings = array("Values"=>array(round($cumplimiento,2)),"ValueFontName"=>"pChart2.1.4/fonts/Forgotte.ttf","ValueFontSize"=>15,"IndicatorSections"=>$IndicatorSections,"SubCaptionColorFactor"=>300);
         $Indicator->draw(80,50,550,50,$IndicatorSettings);



         //Render the picture (choose the best way)
         $myPicture->render($codigoEmpleado.".PNG");

         */
         //$myPicture->render("pictures/".$codigoEmpleado.".PNG");
         //header('Location: ../../PDF/Formato_Gestion_Calidad.php');
         //include("pChart2.1.4/class/pData.class.php");
         require('PDF/fpdf17/fpdf.php');

        // Creaci�n del objeto de la clase heredada
        $pdf = new PDF();

        $pdf->AliasNbPages();

        $pdf->AddPage();
        $pdf->SetFont('Times','',12);

        $pdf->SetFont('ARIAL','B',15);
        $pdf->SetTextColor(12,41,68);
        $pdf->Cell(120, 0, utf8_decode("Reporte de Indicadores"), 0,"C", TRUE);
        $pdf->Ln(15);
        $pdf->Cell(20);
        $pdf->SetFont('ARIAL','',10);
        $pdf->SetTextColor(12,41,68);
        $pdf->Cell(50, 8, "CI:    ".$cedulaEmpleado,"TLRB", 0,"L", FALSE);

        //$pdf->Cell(100, 8, utf8_decode("NOMBRE:    ".$datos[0]),"TBR", 0,"L", FALSE);
        $pdf->Cell(100, 8, utf8_decode("NOMBRE:    ".$nombreEmpleado),"TBR", 0,"L", FALSE);
        $pdf->Ln(8);
        $pdf->Cell(20);
        //$pdf->Cell(150, 8, utf8_decode("EMAIL:    ".$datos[1]),"LRB", 0,"L", FALSE);
        $pdf->Cell(150, 8, utf8_decode("EMAIL:    ".$mailEmpleado),"LRB", 0,"L", FALSE);
        $pdf->Ln(8);
        $pdf->Cell(20);
        $pdf->Cell(150, 8, utf8_decode($school),"LRB", 0,"C", FALSE);
        //$pdf->Cell(150, 8, utf8_decode($escuelare[0]),"LRB", 0,"C", FALSE);
        $pdf->Ln(8);
        $pdf->Cell(20);
        $pdf->Cell(150, 8, utf8_decode("INDICADOR:    ".$process),"LRB", 0,"L", FALSE);
        //$pdf->Cell(150, 8, utf8_decode("INDICADOR:    ".$nompro['DESCRIPCION']),"LRB", 0,"L", FALSE);
        $pdf->Ln(8);
        $pdf->Cell(20);
        //$pdf->Cell(75, 8, utf8_decode("Fecha Inicio:    ".$_SESSION['piini']),"LRB", 0,"L", FALSE);
        $pdf->Cell(75, 8, utf8_decode("Fecha Inicio:    ".$f1),"LRB", 0,"L", FALSE);
        //$pdf->Ln(8);
        //$pdf->Cell(10);
        $pdf->Cell(75, 8, utf8_decode("Fecha Fin:    ".$f2),"LRB", 0,"L", FALSE);
        //$pdf->Cell(75, 8, utf8_decode("Fecha Fin:    ".$_SESSION['pffin']),"LRB", 0,"L", FALSE);
        $pdf->Ln(8);
        //$pdf->Ln(9);
        $porc=round(2,2);
        //$porc=round($cumplimiento['cumple'],2);
        if($porc>=0 && $porc<=70)
        {
            $pdf->SetFillColor(255,0,0);
            $pdf->SetTextColor(255,255,255);
            $pdf->Cell(20);
            $pdf->Cell(150, 8, utf8_decode("PORCENTAJE:    ".$cumplimiento),"LRB", 0,"C", TRUE);
            //$pdf->Cell(150, 8, utf8_decode("PORCENTAJE:    ".$porc),"LRB", 0,"C", TRUE);
        }
         else {
            if($porc>70 && $porc<=90)
            {
            $pdf->SetFillColor(226,74,14);
            $pdf->SetTextColor(255,255,255);
            $pdf->Cell(20);
            //$pdf->Cell(150, 8, utf8_decode("PORCENTAJE:    ".$porc),"LRB", 0,"C", TRUE);
            $pdf->Cell(150, 8, utf8_decode("PORCENTAJE:    ".$cumplimiento),"LRB", 0,"C", TRUE);
            }
         else {
                $pdf->SetFillColor(0,140,0);
            $pdf->SetTextColor(255,255,255);
            $pdf->Cell(20);
            //$pdf->Cell(150, 8, utf8_decode("PORCENTAJE:    ".$porc),"LRB", 0,"C", TRUE);
            $pdf->Cell(150, 8, utf8_decode("PORCENTAJE:    ".$cumplimiento),"LRB", 0,"C", TRUE);
            }
            
        }

        $pdf->Ln(15);
        $pdf->Cell(20);
        $pdf->SetFont('ARIAL','B',15);
        $pdf->SetTextColor(12,41,68);
        $pdf->SetFillColor(255,255,255);
        $pdf->Cell(150, 0, utf8_decode("Gráfico"), 0,"C", FALSE);
        //$pdf->Ln(8);
        $pdf->Image($codigoEmpleado.".PNG",20,120,180,45.5);
        //$pdf->Image("../pChart2.1.4/examples/pictures/".$_SESSION['user'].".png",20,120,180,45.5);

        $pdf->Output('MisIndicadores_'.$codigoEmpleado.'.pdf','I');

                 //return View::make("reportes/imagenReporte");
            }

}
?>


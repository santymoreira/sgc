<?php 
class ReportesController extends BaseController {

    //echo("<script>console.log('PHP: ".$cedula."');</script>");

    #obtiene el nombre del mes
    public function getMes($mes)
    {
        switch ($mes) {
            case 1: return 'Enero';break;case 2: return 'Febrero';break;
            case 3: return 'Marzo';break;case 4: return 'Abril';break;
            case 5: return 'Mayo';break;case 6: return 'Junio';break;
            case 7: return 'Julio';break;case 8: return 'Agosto';break;
            case 9: return 'Septiembre';break;case 10: return 'Octubre';break;
            case 11: return 'Noviembre';break;case 12: return 'Diciembre';break;
        }
    }

        public function getEscuelaEmpleado()
    {
        $escuelaEmpleado=0;
        $escuelaIngresada=Session::get('escuela');
         $tipo=Login::tipoEmpleado();
        $cod=Auth::user()->COD_EMPLEADO;
        $esc = DB::select('SELECT ee.COD_ESCUELA FROM empleado as e inner join empleado_escuela as ee on e.COD_EMPLEADO=ee.COD_EMPLEADO  where e.COD_EMPLEADO=?',array($cod));
        if ($tipo==1 || $tipo==2) {
            $escuelaEmpleado=1;
        }
         foreach ($esc as $e) 
         { 
            $es=$e->COD_ESCUELA; 
            if ($es==$escuelaIngresada) {
                $escuelaEmpleado=1;
            }
         }
         return $escuelaEmpleado;
    }

    # obtiene los tipos de empleado para listarlos en el combo 
    public function getTipos($codigo,$escuela)
    {
        $tipos=DB::select('SELECT te.COD_TIPO,te.DESCRIPCION
        from tipo_empleado as te inner join empleado_tipo as et on te.COD_TIPO=et.COD_TIPO
        where et.COD_EMPLEADO=? and et.COD_ESCUELA=?',array($codigo,$escuela));
        return $tipos;
    }
    
     # obtiene los tipos de empleado para listarlos en el combo (Memcached)
    public function getTiposMemcached($codigo,$escuela)
    {
        $tipos=DB::select('SELECT te.COD_TIPO,te.DESCRIPCION
        from tipo_empleado as te inner join empleado_tipo as et on te.COD_TIPO=et.COD_TIPO
        where et.COD_EMPLEADO=? and et.COD_ESCUELA=?',array($codigo,$escuela));
        return $tipos;

         $empleados = Cache::remember(''.$tipoEmpleado.'empleados', 60, function() use ($tipoEmpleado,$escuela)
        { 
            return DB::select('SELECT * FROM empleado as e inner join empleado_tipo as et on e.COD_EMPLEADO=et.COD_EMPLEADO WHERE et.COD_TIPO =? AND et.COD_ESCUELA=?',array($tipoEmpleado,$escuela));
        }); 
        return $empleados;
    }

      public function individual($escuela,$tipo)
    {
            $tiempo=Login::tiempoSesion();
            $tipo=Login::tipoEmpleado();
            if ($tiempo == 1) 
            {
                if ( $this->getEscuelaEmpleado()==1 || $tipo==1) {
                    # code...
                $codigoEmpleado=Auth::user()->COD_EMPLEADO;
                $cedulaEmpleado=Auth::user()->CI;
                $name=Auth::user()->NOMBRES;
                //echo("<script>console.log('PHP: ".$nombres."');</script>");
                $mail=Auth::user()->EMAIL;
                $tipos=$this->getTipos($codigoEmpleado,$escuela);
                return View::make('reportes.individual', array('tipoEmpleados' => $tipos,'escuela' =>$escuela,'cedula'=>$cedulaEmpleado,'codigo'=>$codigoEmpleado,'name'=>$name,'mail'=>$mail,'tipoReporte'=>$tipo));
                }else{
                     return Redirect::back();
                }
            }
            else
            {
                Login::logout();
                //return View::make('home.welcome');
                //return View::make('home.sinAcceso');
                return Redirect::back();
            }
    }

        public function combo1()
    {
        $tipoEmpleado=Input::get('tipoEmpleado');
        $escuela=Input::get('escuela');
        $cedula=Input::get('cedula');
        $codigo=Input::get('codigo');
        $tipoReporte=Input::get('tipoReporte');
        $name=Input::get('name');
        $mail=Input::get('mail');

        $macroprocesos=DB::select('SELECT distinct(m.COD_MACROPROCESO) as OBJETIVO,m.NOMBRE as DESCRIPCION from macroproceso as m inner join proceso as p on m.COD_MACROPROCESO=p.COD_MACROPROCESO where p.TIPO_EMPLEADO='.$tipoEmpleado.';');
        //echo("<script>console.log('PHP: ".$escuela."');</script>");
        return View::make('reportes.macroprocesos', array('macroprocesos' => $macroprocesos,'tipoEmpleado' => $tipoEmpleado,'escuela' =>$escuela,'cedula'=>$cedula,'codigo'=>$codigo,'name'=>$name,'mail'=>$mail,'tipoReporte'=>$tipoReporte));
    }

        public function mensualE($escuela,$tipo)
    {
        $tiempo=Login::tiempoSesion();
            $tipo=Login::tipoEmpleado();
            if ($tiempo == 1) 
            {
                if (($tipo==1) || (($tipo==2 || $tipo==3) && $this->getEscuelaEmpleado()==1))
                {

                    $ci=Auth::user()->COD_EMPLEADO;
                    return View::make('reportes.mensual_empleado', array('escuela' =>$escuela,'tipoReporte'=>$tipo));
                }   
                else
                {
                    return Redirect::back();
                }
                 
            }elseif ($tiempo == -1) {
                Login::logout();
                return View::make('home.welcome');
            }
            else
            {
                return Redirect::back();
            }
    }

    public function individualBusqueda()
    {
        $escuela=Input::get('escuela');
        $empleado=Input::get('empleado');
        $ci=Input::get('ci');
        $nombres=Input::get('nombres');
        $tipoReporte=Input::get('tipoReporte');
        $mail=Input::get('mail');
        $tipos=$this->getTipos($empleado,$escuela);
        //echo("<script>console.log('PHP: ".$ci."');</script>");
        //echo("<script>console.log('PHP: ".$nombres."');</script>");
         return View::make('reportes.individualBusqueda', array('tipoEmpleados' => $tipos,'escuela' =>$escuela,'empleado'=>$empleado,'cedula'=>$ci,'nombre'=>$nombres,'mail'=>$mail,'tipoReporte'=>$tipoReporte));
    }

    public function buscarEmpleado()
    {
        $consulta=Input::get('consult');
        $escuela=Input::get('escuela');
        $tipoReporte=Input::get('tipoReporte');
        $cedulaEmpleado=Auth::user()->CI;
 
            $empleados=DB::select("SELECT e.CI,e.COD_EMPLEADO,e.NOMBRES,e.EMAIL FROM empleado as e inner join empleado_escuela as ee on e.COD_EMPLEADO=ee.COD_EMPLEADO WHERE ee.COD_ESCUELA=".$escuela." AND e.CI !=".$cedulaEmpleado." AND  e.NOMBRES LIKE '%".$consulta."%'");
            foreach ($empleados as $e) { $em=$e->NOMBRES; }

        return View::make('reportes.empleadosFotos',array('empleados' => $empleados,'escuela'=>$escuela,'tipoReporte'=>$tipoReporte));
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

    public function getPorcentaje($empleado,$proceso,$macroproceso,$fechaInicio,$fechaFin,$escuela)
    {
        $Porcentaje = DB::select('SELECT DISTINCT(I.PORCENTAJE) FROM indicador AS I INNER JOIN proceso AS PR ON I.COD_PROCESO=PR.COD_PROCESO WHERE I.COD_EMPLEADO=? AND PR.COD_PROCESO=? AND PR.COD_MACROPROCESO=? AND I.FECHA_INICIO=? AND I.FECHA_FIN=? AND I.COD_ESCUELA=?',array($empleado,$proceso,$macroproceso,$fechaInicio,$fechaFin,$escuela));
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
        $porcen=$this->getPorcentaje($empleado,$proceso,$macroproceso,$fechaInicio,$fechaFin,$escuela);
        $valorCumplido=Empleado::storedProcedureCall('CALL porcentajeIndicadoresxEscuela('.$proceso.','.$macroproceso.','.$escuela.','.$porcen.','.$maxi.')');
        foreach ($valorCumplido as $valor) { $valorMaximo=$valor->cumple; }
        return $valorMaximo;
    }

    public function combo2()
    {
    	$macroproceso=Input::get('macroproceso');
        $tipoEmpleado=Input::get('tipoEmpleado');
        $escuela=Input::get('escuela');
        $cedula=Input::get('cedula');
        $codigo=Input::get('codigo');
        $tipoReporte=Input::get('tipoReporte');
        $name=Input::get('name');
        $mail=Input::get('mail');

    	$proceso = DB::table('proceso')->where('TIPO_EMPLEADO', '=', $tipoEmpleado)->where('COD_MACROPROCESO','=',$macroproceso)->get();
        if ($tipoReporte==1 || $tipoReporte==4) {
            return View::make('reportes.procesos', array('procesos' => $proceso,'tipoEmpleado' => $tipoEmpleado,'macroproceso' => $macroproceso,'escuela' =>$escuela,'cedula'=>$cedula,'codigo'=>$codigo,'name'=>$name,'mail'=>$mail,'tipoReporte'=>$tipoReporte));
        }
         if ($tipoReporte==2 || $tipoReporte==3) {
            return View::make('reportes.procesosBusqueda', array('procesos' => $proceso,'tipoEmpleado' => $tipoEmpleado,'macroproceso' => $macroproceso,'escuela' =>$escuela,'cedula'=>$cedula,'codigo'=>$codigo,'name'=>$name,'mail'=>$mail,'tipoReporte'=>$tipoReporte));
        }
    }


    public function tabla()
    {
        $tipoReporte=Input::get('tipoReporte');
        $escuela=Input::get('escuela');
            $macroproceso=Input::get('macroproceso');
            $proceso=Input::get('proceso');
            $cedula=Input::get('cedula');//
            $codigo=Input::get('codigo');
            $name=Input::get('name');//
            $mail=Input::get('mail');
            $suma=0;
            echo("<script>console.log('PHP: ".$name."');</script>");
        if ($tipoReporte==1 || $tipoReporte==4) 
        {
            //echo("<script>console.log('PHP: ".$escuela."');</script>");
            $indicadores=DB::select('SELECT DISTINCT I.COD_INDICADOR,I.COD_PROCESO,I.FECHA_INICIO,I.FECHA_FIN,I.COD_MACROPROCESO,I.COD_EMPLEADO FROM indicador AS I INNER JOIN proceso AS P ON P.COD_PROCESO=I.COD_PROCESO WHERE I.COD_EMPLEADO=? AND I.COD_PROCESO=? AND I.COD_MACROPROCESO=? AND I.COD_ESCUELA=? ORDER BY I.FECHA_FIN DESC LIMIT 31',array($codigo,$proceso,$macroproceso,$escuela));
            return View::make('reportes.tabla', array('indicadores' => $indicadores,'escuela' =>$escuela,'macroproceso'=>$macroproceso,'proceso'=>$proceso,'codigoEmpleado'=>$codigo,'cedula'=>$cedula,'codigo'=>$codigo,'name'=>$name,'mail'=>$mail));
        }
        if ($tipoReporte==2 || $tipoReporte==3) 
        {
            $mes=Input::get('mes');
            $indicadores=Empleado::storedProcedureCall('CALL ProcesosMensual('.$macroproceso.','.$proceso.','.$codigo.','.$mes.','.$escuela.')');
            foreach ($indicadores as $indicador) {
                $suma+=$indicador->PORCENTAJE;
            }
            $totalIndicadores=count($indicadores);
            if ($suma!=0) {
                # code...
                 $suma=$suma/$totalIndicadores;
            }
            return View::make('reportes.tablaMensual', array('escuela' =>$escuela,'macroproceso'=>$macroproceso,'proceso'=>$proceso,'codigoEmpleado'=>$codigo,'cedula'=>$cedula,'codigo'=>$codigo,'suma'=>$suma,'mes'=>$mes,'name'=>$name,'mail'=>$mail));
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
         $Settings = array("R"=>255, "G"=>255, "B"=>255, "Dash"=>255, "DashR"=>255, "DashG"=>255, "DashB"=>255);
         //$Settings = array("R"=>0, "G"=>0, "B"=>255, "Dash"=>1, "DashR"=>0, "DashG"=>0, "DashB"=>255);
         
         $myPicture->drawFilledRectangle(0,0,900,330,$Settings);
         /* Overlay with a gradient */
          //$Settings = array("StartR"=>255, "StartG"=>255, "StartB"=>255, "EndR"=>255, "EndG"=>255, "EndB"=>255, "Alpha"=>50);
         $Settings = array("StartR"=>219, "StartG"=>231, "StartB"=>139, "EndR"=>1, "EndG"=>138, "EndB"=>68, "Alpha"=>50);
         $myPicture->drawGradientArea(0,0,900,330,DIRECTION_VERTICAL,$Settings);
         $myPicture->drawGradientArea(0,0,900,40,DIRECTION_VERTICAL,array("StartR"=>0,"StartG"=>0,"StartB"=>0,"EndR"=>50,"EndG"=>50,"EndB"=>50,"Alpha"=>80));
         //$myPicture->drawGradientArea(0,0,900,40,DIRECTION_VERTICAL,array("StartR"=>255,"StartG"=>255,"StartB"=>255,"EndR"=>255,"EndG"=>255,"EndB"=>255,"Alpha"=>80));
         /* Add a border to the picture */
         //$myPicture->drawRectangle(0,0,899,329,array("R"=>0,"G"=>0,"B"=>0));
         //$myPicture->drawRectangle(0,0,699,229,array("R"=>255,"G"=>255,"B"=>255));
         /* Write the picture title  */
         $myPicture->setFontProperties(array("FontName"=>"pChart2.1.4/fonts/Forgotte.ttf","FontSize"=>15));
         $myPicture->drawText(20,25,$process,array("R"=>255,"G"=>255,"B"=>255));
         //$myPicture->drawText(10,13,$process,array("R"=>0,"G"=>0,"B"=>0));
         //$myPicture->drawText(20,25,$process,array("R"=>255,"G"=>255,"B"=>255));
         /* Enable shadow computing */  
         $myPicture->setShadow(TRUE,array("X"=>1,"Y"=>1,"R"=>0,"G"=>0,"B"=>0,"Alpha"=>20)); 
          /* Write some text */  
          $TextSettings = array("R"=>0,"G"=>0,"B"=>0,"Angle"=>0,"FontSize"=>11); 
         //$TextSettings = array("R"=>255,"G"=>255,"B"=>255,"Angle"=>0,"FontSize"=>12); 

         $myPicture->drawText(110,200,"CI: ".$cedulaEmpleado,$TextSettings); 
         //$myPicture->drawText(110,200,"CEDULA: ".$cedulaEmpleado,$TextSettings); 
         //
          /* Write some text  */
          $TextSettings = array("R"=>0,"G"=>0,"B"=>0,"Angle"=>0,"FontSize"=>11);  
         //$TextSettings = array("R"=>255,"G"=>255,"B"=>255,"Angle"=>0,"FontSize"=>12); 
         //$myPicture->drawText(110,222,$escuelare[0],$TextSettings); 
         $myPicture->drawText(110,222,$school,$TextSettings); 

           /* Write some text   */
          $TextSettings = array("R"=>0,"G"=>0,"B"=>0,"Angle"=>0,"FontSize"=>11); 
         //$TextSettings = array("R"=>255,"G"=>255,"B"=>255,"Angle"=>0,"FontSize"=>12); 
         //$myPicture->drawText(110,244,"Fecha Inicio: ".$_SESSION['iini'],$TextSettings); 
         $myPicture->drawText(110,244,"Fecha Inicio: ".$f1,$TextSettings); 

           /* Write some text  */ 
           $TextSettings = array("R"=>0,"G"=>0,"B"=>0,"Angle"=>0,"FontSize"=>11); 
         //$TextSettings = array("R"=>255,"G"=>255,"B"=>255,"Angle"=>0,"FontSize"=>12); 
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
             $myPicture->render("images/example.drawIndicator.png");
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
        $codigoEmpleado=$codigo;

        $maximo=$this->getValorTotal($escuela,$macroproceso);
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
         
         # Create the pChart object
         //$myPicture = new pImage(900,330,$MyData);
         $myPicture = new pImage(700,230,$MyData);

         # Draw the background
         //$Settings = array("R"=>0, "G"=>0, "B"=>255, "Dash"=>1, "DashR"=>0, "DashG"=>0, "DashB"=>255);
         $Settings = array("R"=>255, "G"=>255, "B"=>255, "Dash"=>255, "DashR"=>255, "DashG"=>255, "DashB"=>255);
         $myPicture->drawFilledRectangle(0,0,900,330,$Settings);

         # Overlay with a gradient
         $Settings = array("StartR"=>219, "StartG"=>231, "StartB"=>139, "EndR"=>1, "EndG"=>138, "EndB"=>68, "Alpha"=>50);
         //$Settings = array("StartR"=>255, "StartG"=>255, "StartB"=>255, "EndR"=>255, "EndG"=>255, "EndB"=>255, "Alpha"=>50);
         $myPicture->drawGradientArea(0,0,900,330,DIRECTION_VERTICAL,$Settings);
         $myPicture->drawGradientArea(0,0,900,40,DIRECTION_VERTICAL,array("StartR"=>0,"StartG"=>0,"StartB"=>0,"EndR"=>50,"EndG"=>50,"EndB"=>50,"Alpha"=>80));
         //$myPicture->drawGradientArea(0,0,900,40,DIRECTION_VERTICAL,array("StartR"=>255,"StartG"=>255,"StartB"=>255,"EndR"=>255,"EndG"=>255,"EndB"=>255,"Alpha"=>80));

         # Add a border to the picture
         $myPicture->drawRectangle(0,0,899,329,array("R"=>0,"G"=>0,"B"=>0));
         //$myPicture->drawRectangle(0,0,699,229,array("R"=>255,"G"=>255,"B"=>255));
         
         #Write the picture title 
         $myPicture->setFontProperties(array("FontName"=>"pChart2.1.4/fonts/Forgotte.ttf","FontSize"=>15));
         //$myPicture->drawText(10,13,'',array("R"=>0,"G"=>0,"B"=>215));
         $myPicture->drawText(20,25,$process,array("R"=>255,"G"=>255,"B"=>255));

         
         # Enable shadow computing
         $myPicture->setShadow(TRUE,array("X"=>1,"Y"=>1,"R"=>0,"G"=>0,"B"=>0,"Alpha"=>20)); 
         
          # Write some text
          //$TextSettings = array("R"=>0,"G"=>0,"B"=>0,"Angle"=>0,"FontSize"=>9); 
         $TextSettings = array("R"=>255,"G"=>255,"B"=>255,"Angle"=>0,"FontSize"=>12); 
         $myPicture->drawText(110,200,"CI: ". $cedulaEmpleado,$TextSettings); 
         
         # Write some text  
         //$TextSettings = array("R"=>0,"G"=>0,"B"=>0,"Angle"=>0,"FontSize"=>9); 
         $TextSettings = array("R"=>255,"G"=>255,"B"=>255,"Angle"=>0,"FontSize"=>12); 
         $myPicture->drawText(110,222,$school,$TextSettings); 
         
         # Write some text  
         $TextSettings = array("R"=>255,"G"=>255,"B"=>255,"Angle"=>0,"FontSize"=>12); 
         //$TextSettings = array("R"=>0,"G"=>0,"B"=>0,"Angle"=>0,"FontSize"=>9); 
         $myPicture->drawText(110,244,"Porcentaje Mensual: ".round($suma*100/$maximo,2)." %",$TextSettings); 
        
         # Write some text
         //$TextSettings = array("R"=>0,"G"=>0,"B"=>0,"Angle"=>0,"FontSize"=>9); 
         $TextSettings = array("R"=>255,"G"=>255,"B"=>255,"Angle"=>0,"FontSize"=>12); 
         $myPicture->drawText(110,266,"Mes: ".$mes,$TextSettings); 
         
         $TextSettings = array("R"=>255,"G"=>255,"B"=>255,"Angle"=>0,"FontSize"=>12); 
         //$TextSettings = array("R"=>0,"G"=>0,"B"=>0,"Angle"=>0,"FontSize"=>9); 
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
         $IndicatorSettings = array("Values"=>array(round($suma*100/$maximo,2)),"ValueFontName"=>"pChart2.1.4/fonts/Forgotte.ttf","ValueFontSize"=>12,"IndicatorSections"=>$IndicatorSections,"SubCaptionColorFactor"=>300);
         $Indicator->draw(80,100,750,70,$IndicatorSettings);
        
         
         /* Render the picture (choose the best way) */
         //$myPicture->stroke("pictures/example.drawIndicator.jpg");

           if ($op==1) {
             $myPicture->render("images/example.drawIndicator.png");
            return View::make("reportes/imagenReporte");
         }
         if($op==2){
            $myPicture->render("images/".$codigoEmpleado.".PNG");
         }
         
    }

    public function getMacroproceso($macro)
    {
        $Macroproceso = DB::select('SELECT NOMBRE from macroproceso where COD_MACROPROCESO =?',array($macro));
        foreach ($Macroproceso as $proc) { $nombreMacroproceso=$proc->NOMBRE; }
        return $nombreMacroproceso;
    }

    public function imagenReporteConsolidado($escuela,$macroproceso)
    {    
         $tiempo=Login::tiempoSesion();
        $tipo=Login::tipoEmpleado();

        $Indicadores=Empleado::storedProcedureCall('CALL consolidadoMacroprocesos('.$macroproceso.','.$escuela.')');
        foreach ($Indicadores as $indicador) 
        {
                $cumplimiento=$indicador->resultado;
                $f1=$indicador->fecha1;
                $f2=$indicador->fecha2;
        }
        $macro=$this->getMacroproceso($macroproceso);
        $school=$this->getEscuela($escuela);
        $maximo=$this->getValorTotal($escuela,$macroproceso);
        $mes=$this->getMes($f1);

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

         $myPicture = new pImage(590,200,$MyData);
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
         $myPicture->setFontProperties(array("FontName"=>"pChart2.1.4/fonts/Forgotte.ttf","FontSize"=>10));//tamaño letra
         $myPicture->drawText(20,25,$macro,array("R"=>255,"G"=>255,"B"=>255));

         
         /* Enable shadow computing */  
         $myPicture->setShadow(TRUE,array("X"=>1,"Y"=>1,"R"=>0,"G"=>0,"B"=>0,"Alpha"=>20)); 

        // /* Write some text */  
         $TextSettings = array("R"=>255,"G"=>255,"B"=>255,"Angle"=>0,"FontSize"=>12); 
         $myPicture->drawText(30,172,'Porcentaje: '.round($cumplimiento,2),$TextSettings); 
         
         // /* Write some text */  
         $TextSettings = array("R"=>255,"G"=>255,"B"=>255,"Angle"=>0,"FontSize"=>12); 
           $myPicture->drawText(380,172,"Mes: ".$mes."     Año: ".$f2,$TextSettings); 
         
         /* Create the pIndicator object */ 
         $Indicator = new pIndicator($myPicture);

         $myPicture->setFontProperties(array("FontName"=>"pChart2.1.4/fonts/pf_arma_five.ttf","FontSize"=>8));//letra aki

         /* Define the indicator sections */
         $IndicatorSections   = "";
         $IndicatorSections[] = array("Start"=>0,"End"=>70,"Caption"=>"Bajo","R"=>200,"G"=>0,"B"=>0);
         $IndicatorSections[] = array("Start"=>71,"End"=>90,"Caption"=>"Moderado","R"=>226,"G"=>74,"B"=>14);
         $IndicatorSections[] = array("Start"=>91,"End"=>100,"Caption"=>"Alto","R"=>0,"G"=>140,"B"=>0);

         /* Draw the 1st indicator */
         $IndicatorSettings = array("Values"=>round($cumplimiento,2),"ValueFontName"=>"pChart2.1.4/fonts/Forgotte.ttf","ValueFontSize"=>12,"IndicatorSections"=>$IndicatorSections,"SubCaptionColorFactor"=>300);
         $Indicator->draw(25,70,550,50,$IndicatorSettings);//cambiar tamaño aki
         
             $myPicture->render("images/example.drawIndicator.png");
            return View::make("reportes/imagenReporte");

    }

 public function imagenReporteConsolidadoFacultad()
    {    
        //echo("<script>console.log('PHP: ".$total."');</script>");
        
        $valor=0;
        //macroprocesos
        for ($i=1; $i <=7 ; $i++) 
        { 
                //escuela
                for ($j=1; $j <= 6; $j++) 
                { 
                    $total=0;
                    $Indicadores=Empleado::storedProcedureCall('CALL consolidadoMacroprocesos('.$i.','.$j.')');
                    foreach ($Indicadores as $indicador) 
                    {
                        $total+=$indicador->avance;
                    }
                }
                //echo("<script>console.log('Escuela: ".$j.' '.$total"');</script>");
                $total=round($total/6,2);
                // echo("<script>console.log('Escuela: ".$j.' '.$total."');</script>");
                    $valor+=round($total,2);
                     //echo("<script>console.log('Valortotal: ".$j.' '.$valor."');</script>");
        }
        $macro="";
        $school='Facultad';
       // $maximo=$this->getValorTotal($escuela,$macroproceso);
        $mes=date('M');
        $year=date('y');
        //$mes="Enero";

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

         $myPicture = new pImage(590,200,$MyData);
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
         $myPicture->setFontProperties(array("FontName"=>"pChart2.1.4/fonts/Forgotte.ttf","FontSize"=>10));//tamaño letra
         $myPicture->drawText(20,25,$macro,array("R"=>255,"G"=>255,"B"=>255));

         
         /* Enable shadow computing */  
         $myPicture->setShadow(TRUE,array("X"=>1,"Y"=>1,"R"=>0,"G"=>0,"B"=>0,"Alpha"=>20)); 

        // /* Write some text */  
         $TextSettings = array("R"=>255,"G"=>255,"B"=>255,"Angle"=>0,"FontSize"=>12); 
         $myPicture->drawText(30,172,'Porcentaje: '.$valor,$TextSettings); 
         
         // /* Write some text */  
         $TextSettings = array("R"=>255,"G"=>255,"B"=>255,"Angle"=>0,"FontSize"=>12); 
           $myPicture->drawText(380,172,"Mes: ".$mes."     Año: ".$year,$TextSettings); 
         
         /* Create the pIndicator object */ 
         $Indicator = new pIndicator($myPicture);

         $myPicture->setFontProperties(array("FontName"=>"pChart2.1.4/fonts/pf_arma_five.ttf","FontSize"=>8));//letra aki

         /* Define the indicator sections */
         $IndicatorSections   = "";
         $IndicatorSections[] = array("Start"=>0,"End"=>70,"Caption"=>"Bajo","R"=>200,"G"=>0,"B"=>0);
         $IndicatorSections[] = array("Start"=>71,"End"=>90,"Caption"=>"Moderado","R"=>226,"G"=>74,"B"=>14);
         $IndicatorSections[] = array("Start"=>91,"End"=>100,"Caption"=>"Alto","R"=>0,"G"=>140,"B"=>0);

         /* Draw the 1st indicator */
         $IndicatorSettings = array("Values"=>round($valor,2),"ValueFontName"=>"pChart2.1.4/fonts/Forgotte.ttf","ValueFontSize"=>12,"IndicatorSections"=>$IndicatorSections,"SubCaptionColorFactor"=>300);
         $Indicator->draw(25,70,550,50,$IndicatorSettings);//cambiar tamaño aki
         
             $myPicture->render("images/example.drawIndicator.png");
            return View::make("reportes/imagenReporte");
       
    }

        public function imagenReporteConsolidadoEscuela($escuela)
    {    
         $tiempo=Login::tiempoSesion();
        $tipo=Login::tipoEmpleado();
        $total=0;

        if ($tiempo==1) {
            if ($tipo==1 || $tipo==2) {

                for ($i=1; $i <= 7; $i++) 
                { 
                    $Indicadores=Empleado::storedProcedureCall('CALL consolidadoMacroprocesos('.$i.','.$escuela.')');
                    foreach ($Indicadores as $indicador) 
                    {
                        $total+=$indicador->resultado;
                          $f1=$indicador->fecha1;
                         $f2=$indicador->fecha2;
                         //echo("<script>console.log('PHP: ".$total."');</script>");
                    }
                }


        $macro="";
        $school=$this->getEscuela($escuela);
       // $maximo=$this->getValorTotal($escuela,$macroproceso);
        $mes=$this->getMes($f1);
        //$mes="Enero";

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

         $myPicture = new pImage(590,200,$MyData);
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
         $myPicture->setFontProperties(array("FontName"=>"pChart2.1.4/fonts/Forgotte.ttf","FontSize"=>10));//tamaño letra
         $myPicture->drawText(20,25,$macro,array("R"=>255,"G"=>255,"B"=>255));

         
         /* Enable shadow computing */  
         $myPicture->setShadow(TRUE,array("X"=>1,"Y"=>1,"R"=>0,"G"=>0,"B"=>0,"Alpha"=>20)); 

        // /* Write some text */  
         $TextSettings = array("R"=>255,"G"=>255,"B"=>255,"Angle"=>0,"FontSize"=>12); 
         $myPicture->drawText(30,172,'Porcentaje: '.round($total,2),$TextSettings); 
         
         // /* Write some text */  
         $TextSettings = array("R"=>255,"G"=>255,"B"=>255,"Angle"=>0,"FontSize"=>12); 
           $myPicture->drawText(380,172,"Mes: ".$mes."     Año: ".$f2,$TextSettings); 
         
         /* Create the pIndicator object */ 
         $Indicator = new pIndicator($myPicture);

         $myPicture->setFontProperties(array("FontName"=>"pChart2.1.4/fonts/pf_arma_five.ttf","FontSize"=>8));//letra aki

         /* Define the indicator sections */
         $IndicatorSections   = "";
         $IndicatorSections[] = array("Start"=>0,"End"=>70,"Caption"=>"Bajo","R"=>200,"G"=>0,"B"=>0);
         $IndicatorSections[] = array("Start"=>71,"End"=>90,"Caption"=>"Moderado","R"=>226,"G"=>74,"B"=>14);
         $IndicatorSections[] = array("Start"=>91,"End"=>100,"Caption"=>"Alto","R"=>0,"G"=>140,"B"=>0);

         /* Draw the 1st indicator */
         $IndicatorSettings = array("Values"=>round($total,2),"ValueFontName"=>"pChart2.1.4/fonts/Forgotte.ttf","ValueFontSize"=>12,"IndicatorSections"=>$IndicatorSections,"SubCaptionColorFactor"=>300);
         $Indicator->draw(25,70,550,50,$IndicatorSettings);//cambiar tamaño aki
         
             $myPicture->render("images/example.drawIndicator.png");
            return View::make("reportes/imagenReporte");
         
         
             }
     }else{
        Login::logout();
         return View::make('home.sinAcceso');
     }
    }

            public function imagenReporteConsolidadoFade()
    {    
         $tiempo=Login::tiempoSesion();
        $tipo=Login::tipoEmpleado();
        $total=0;

        if ($tiempo==1) {
            if ($tipo==1 || $tipo==2) {

                for ($i=1; $i <= 7; $i++) 
                { 
                    $Indicadores=Empleado::storedProcedureCall('CALL consolidadoFade('.$i.')');
                    foreach ($Indicadores as $indicador) 
                    {
                        $total+=$indicador->resultado;
                          $f1=$indicador->fecha1;
                         $f2=$indicador->fecha2;
                        // echo("<script>console.log('PHP: ".$total."');</script>");
                    }
                }


        $macro="";
        $school=$this->getEscuela($escuela);
       // $maximo=$this->getValorTotal($escuela,$macroproceso);
        $mes=$this->getMes($f1);
        //$mes="Enero";

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

         $myPicture = new pImage(590,200,$MyData);
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
         $myPicture->setFontProperties(array("FontName"=>"pChart2.1.4/fonts/Forgotte.ttf","FontSize"=>10));//tamaño letra
         $myPicture->drawText(20,25,$macro,array("R"=>255,"G"=>255,"B"=>255));

         
         /* Enable shadow computing */  
         $myPicture->setShadow(TRUE,array("X"=>1,"Y"=>1,"R"=>0,"G"=>0,"B"=>0,"Alpha"=>20)); 

        // /* Write some text */  
         $TextSettings = array("R"=>255,"G"=>255,"B"=>255,"Angle"=>0,"FontSize"=>12); 
         $myPicture->drawText(30,172,'Porcentaje: '.$total,$TextSettings); 
         
         // /* Write some text */  
         $TextSettings = array("R"=>255,"G"=>255,"B"=>255,"Angle"=>0,"FontSize"=>12); 
           $myPicture->drawText(380,172,"Mes: ".$mes."     Año: ".$f2,$TextSettings); 
         
         /* Create the pIndicator object */ 
         $Indicator = new pIndicator($myPicture);

         $myPicture->setFontProperties(array("FontName"=>"pChart2.1.4/fonts/pf_arma_five.ttf","FontSize"=>8));//letra aki

         /* Define the indicator sections */
         $IndicatorSections   = "";
         $IndicatorSections[] = array("Start"=>0,"End"=>70,"Caption"=>"Bajo","R"=>200,"G"=>0,"B"=>0);
         $IndicatorSections[] = array("Start"=>71,"End"=>90,"Caption"=>"Moderado","R"=>226,"G"=>74,"B"=>14);
         $IndicatorSections[] = array("Start"=>91,"End"=>100,"Caption"=>"Alto","R"=>0,"G"=>140,"B"=>0);

         /* Draw the 1st indicator */
         $IndicatorSettings = array("Values"=>round($total,2),"ValueFontName"=>"pChart2.1.4/fonts/Forgotte.ttf","ValueFontSize"=>12,"IndicatorSections"=>$IndicatorSections,"SubCaptionColorFactor"=>300);
         $Indicator->draw(25,70,550,50,$IndicatorSettings);//cambiar tamaño aki
         
             $myPicture->render("images/example.drawIndicator.png");
            return View::make("reportes/imagenReporte");
         
         
             }
     }else{
        Login::logout();
         return View::make('home.sinAcceso');
     }
    }

    public function pdfReporte($escuela,$macroproceso,$proceso,$f1,$f2,$cedula,$codigo,$nombres,$mail)
    {
        $school=$this->getEscuela($escuela);
        $process=$this->getProceso($proceso,$macroproceso);
        $cedulaEmpleado=$cedula;
        $nombreEmpleado=$nombres;
        $codigoEmpleado=$codigo;
        $mailEmpleado=$mail;
        $cumplimiento=$this->getValorCumplido($proceso,$macroproceso,$escuela,$f1,$f2,$codigoEmpleado);

        $this->imagenReporte($escuela,$macroproceso,$proceso,$f1,$f2,$cedulaEmpleado,$codigoEmpleado,2);

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
        $porc=round($cumplimiento,2);
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

        $pdf->Output('images/'.$codigoEmpleado.'.pdf','I');

                 //return View::make("reportes/imagenReporte");
            }

        public function pdfReporteMensual($escuela,$macroproceso,$proceso,$mes,$cedula,$codigo,$suma,$nombres,$mail)
    {
        $school=$this->getEscuela($escuela);
        $process=$this->getProceso($proceso,$macroproceso);
        $cedulaEmpleado=$cedula;
        $nombreEmpleado=$nombres;
        $codigoEmpleado=$codigo;
        $mailEmpleado=$mail;
        $nombreEmpleadoActual=Auth::user()->NOMBRES;
        $ciEmpleadoActual=Auth::user()->CI;

        $mes=$this->getMes($mes);
        $maximo=$this->getValorTotal($escuela,$macroproceso);

        //$cumplimiento=$this->getValorCumplido($proceso,$macroproceso,$escuela,$f1,$f2,$codigoEmpleado);

        $this->imagenReporteMensual($escuela,$macroproceso,$proceso,$mes,$cedula,$codigo,$suma,2);


         require('PDF/fpdf17/fpdf.php');

        // Creaci�n del objeto de la clase heredada
        $pdf = new PDF();
        //$pdf=new FPDF('P','mm','A4');
        $pdf->AliasNbPages();
        $pdf->AddPage();
        $pdf->SetFont('Times','',12);

        $pdf->SetFont('ARIAL','B',15);
        $pdf->SetTextColor(12,41,68);
        $pdf->Cell(135, 0, utf8_decode("Reporte Mensual de Indicadores"), 0,"C", TRUE);
        $pdf->Ln(15);
        $pdf->Cell(20);
        $pdf->SetFont('ARIAL','',10);
        $pdf->SetTextColor(12,41,68);
        $pdf->Cell(50, 8, "Impreso por:    ".$nombreEmpleadoActual."       CI:     ".$ciEmpleadoActual,"", 0,"L", FALSE);
        $pdf->Ln(12);
        $pdf->Cell(20);
        $pdf->Cell(50, 8, "CI:    ".$cedulaEmpleado,"TLRB", 0,"L", FALSE);
        //$pdf->Cell(10);
        //$pdf->Ln(9);
        $pdf->Cell(100, 8, utf8_decode("NOMBRE:    ".$nombreEmpleado),"TBR", 0,"L", FALSE);
        $pdf->Ln(8);
        $pdf->Cell(20);
        $pdf->Cell(150, 8, utf8_decode("EMAIL:    ".$mailEmpleado),"LRB", 0,"L", FALSE);
        $pdf->Ln(8);
        $pdf->Cell(20);
        $pdf->Cell(150, 8, utf8_decode($school),"LRB", 0,"C", FALSE);
        $pdf->Ln(8);
        $pdf->Cell(20);
        $pdf->Cell(150, 8, utf8_decode("INDICADOR:    ".$process),"LRB", 0,"L", FALSE);
        $pdf->Ln(8);
        $pdf->Cell(20);
        $pdf->Cell(150, 8, utf8_decode("Mes:    ".$mes."          Año: ".date("Y")),"LRB", 0,"C", FALSE);
        //$pdf->Ln(8);
        //$pdf->Cell(10);
        //$pdf->Cell(75, 8, utf8_decode("Fecha Fin:    ".$_SESSION['pffin']),"LRB", 0,"L", FALSE);
        $pdf->Ln(8);
        //$pdf->Cell(100, 0, utf8_decode("Fecha Fin:    ".$_SESSION['De']), 0,"C", FALSE);
        //$pdf->Ln(9);
        $porc=round($suma*100/$maximo,2);
        if($porc>=0 && $porc<=70)
        {
            $pdf->SetFillColor(255,0,0);
            $pdf->SetTextColor(255,255,255);
            $pdf->Cell(20);
            $pdf->Cell(150, 8, utf8_decode("PORCENTAJE:    ".$porc." %"),"LRB", 0,"C", TRUE);
        }
         else {
            if($porc>70 && $porc<=90)
            {
            $pdf->SetFillColor(226,74,14);
            $pdf->SetTextColor(255,255,255);
            $pdf->Cell(20);
            $pdf->Cell(150, 8, utf8_decode("PORCENTAJE:    ".$porc." %"),"LRB", 0,"C", TRUE);
            }
         else {
                $pdf->SetFillColor(0,140,0);
            $pdf->SetTextColor(255,255,255);
            $pdf->Cell(20);
            $pdf->Cell(150, 8, utf8_decode("PORCENTAJE:    ".$porc." %"),"LRB", 0,"C", TRUE);
            }
    
            }

            $pdf->Ln(15);
            $pdf->Cell(20);
            $pdf->SetFont('ARIAL','B',15);
            $pdf->SetTextColor(12,41,68);
            $pdf->SetFillColor(255,255,255);
            $pdf->Cell(150, 0, utf8_decode("Gráfico"), 0,"C", FALSE);
            //$pdf->Ln(8);
            $pdf->Image($codigoEmpleado.".PNG",20,140,180,45.5);
        //$pdf->Image("../pChart2.1.4/examples/pictures/".$_SESSION['user'].".png",20,120,180,45.5);

            $pdf->Output('images/'.$codigoEmpleado.'.pdf','I');

            }

}
?>


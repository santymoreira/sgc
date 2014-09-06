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

         return View::make("pChart/examples/imagenReporte");

    }



}
?>

